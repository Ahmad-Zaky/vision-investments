@extends('admin-layout.layout')
@section('head')
<!-- This page plugin CSS -->
<link href="{{asset('/posts/posts/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('content')
<style>
.limit-txt-w-250 {
  width: 250px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="page-content container-fluid">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="row">
    <!-- Column -->
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex no-block align-items-center mb-4">
            <h4 class="card-title">All Contacts</h4>
            <div class="ml-auto">
              <div class="btn-group">
                <button type="button" class="btn btn-dark" onclick="location.href='{{route('createPost')}}'">
                  Create New Contact
                </button>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table id="file_export" class="table table-bordered nowrap display">
              <thead>
                <tr>
                  <th>
                    <input type="checkbox"onclick="toggle(this)" id="selectAllBoxes">
                    <!-- <div class="custom-control custom-checkbox"> -->
                      <!-- <input type="checkbox" class="custom-control-input" id="customControlValidation2" required> -->
                      <!-- <label class="custom-control-label" for="customControlValidation2"></label> -->
                    <!-- </div> -->
                  </th>
                  <th style="text-align:center;" >Title</th>
                  <th style="text-align:center;" >Excerpt</th>
                  <th style="text-align:center;" >Body</th>
                  <th style="text-align:center;" >Approved</th>
                  <th style="text-align:center;" >Published</th>
                  <th style="text-align:center;" >Category</th>
                  <th style="text-align:center;" >Author</th>
                  <th style="text-align:center;" >Created</th>
                  <th style="text-align:center;" >Last Update</th>
                  <th style="text-align:center;" >Actions</th>
                </tr>
              </thead>
              <tbody>
                @if(!$posts->isEmpty())
                @foreach($posts as $post)
                <tr>
                  <td>
                    <input type="checkbox"  class="checkBoxes" name="chkBoxArr[]" value="{{$post['id']}}">
                  </td>
                  <td style="text-align:right;">
                    {{$post['title']}}
                  </td>
                  <td>
                    <p class="limit-txt-w-250" style="text-align:right;">
                      {{$post['excerpt']}}
                    </p>
                  </td>
                  <td>
                    <p class="limit-txt-w-250" style="text-align:center;">
                      <a href="{{route('homePost', $post['slug'])}}">
                        اقرأ المقالة
                      </a>
                    </p>
                  </td>
                  <td>
                    <p style="text-align:center;">
                      {{$post['approved'] ? 'Approved' : 'Not Approved'}}
                    </p>
                  </td>
                  <td>
                    <p title="{{explode(' ', $post['published_at'])[1]}}" style="text-align:right;">
                      {{explode(' ', $post['published_at'])[0]}}
                    </p>
                  </td>
                  <td>
                    <p style="text-align:center;">
                      {{$post['category']['name']}}
                    </p>
                  </td>
                  <td style="text-align:center;">
                    <p>
                      {{$post['reg_user']['first_name'] .' '. $post['reg_user']['last_name']}}
                    </p>
                  </td>
                  <td>
                    <p title="{{explode(' ', $post['created_at'])[1]}}" style="text-align:right;">
                      {{explode(' ', $post['created_at'])[0]}}
                    </p>
                  </td>
                  <td>
                    <p title="{{explode(' ', $post['updated_at'])[1]}}" style="text-align:right;">
                      {{explode(' ', $post['updated_at'])[0]}}
                    </p>
                  </td>
                  <td>
                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                      data-toggle="tooltip" data-original-title="Delete"><i class="ti-close"
                        aria-hidden="true"></i></button>
                  </td>
                </tr>
                @endforeach
                @else
                <tr>
                  <p>
                    <h3> No data is available ! </h3>
                  </p>
                </tr>
                @endif
















              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Column -->
  </div>
  <!-- ============================================================== -->
  <!-- End PAge Content -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Right sidebar -->
  <!-- ============================================================== -->
  <!-- .right-sidebar -->
  <!-- ============================================================== -->
  <!-- End Right sidebar -->
  <!-- ============================================================== -->
</div>
<!-- Share Modal -->
<div class="modal fade" id="Sharemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-auto-fix mr-2"></i>
            Share With</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
            <input type="text" class="form-control" placeholder="Enter Name Here" aria-label="Username">
          </div>
          <div class="row">
            <div class="col-3 text-center">
              <a href="#Whatsapp" class="text-success">
                <i class="display-6 mdi mdi-whatsapp"></i><br><span class="text-muted">Whatsapp</span>
              </a>
            </div>
            <div class="col-3 text-center">
              <a href="#Facebook" class="text-info">
                <i class="display-6 mdi mdi-facebook"></i><br><span class="text-muted">Facebook</span>
              </a>
            </div>
            <div class="col-3 text-center">
              <a href="#Instagram" class="text-danger">
                <i class="display-6 mdi mdi-instagram"></i><br><span class="text-muted">Instagram</span>
              </a>
            </div>
            <div class="col-3 text-center">
              <a href="#Skype" class="text-cyan">
                <i class="display-6 mdi mdi-skype"></i><br><span class="text-muted">Skype</span>
              </a>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>
            Send</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Create Modal -->
<div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt mr-2"></i> Create
            New Contact</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
            <input type="text" class="form-control" placeholder="Enter Name Here" aria-label="name">
          </div>
          <div class="input-group mb-3">
            <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
            <input type="text" class="form-control" placeholder="Enter Mobile Number Here" aria-label="no">
          </div>
          <div class="input-group mb-3">
            <button type="button" class="btn btn-info"><i class="ti-import text-white"></i></button>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success"><i class="ti-save"></i> Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection

@section('footer')
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!--This page plugins -->
<script src="{{asset('/posts/posts/js/jquery.dataTables.min.js')}}"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="{{asset('/posts/posts/js/datatable-advanced.init.js')}}"></script>
<script>
// select all checkboxes option
$("#selectAllBoxes").click(function(event) {

  if (this.checked) {
    $(".checkBoxes").each(function() {
      this.checked = true;
    });
  } else {
    $(".checkBoxes").each(function() {
      this.checked = false;
    });
  }
});
</script>
@endsection