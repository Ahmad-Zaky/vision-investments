@extends('admin-layout.layout')
@section('head')
<!-- This Page CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('/posts/create/summernote/dist/summernote-bs4.css')}}">
@endsection
@section('content')
<div class="col-12">
  <div class="card">
    <div class="card-body">
      <div class="form-row">
        <div class="col-md-2 mb-3"></div>
        <div class="col-md-8 mb-3">
          <h4 class="card-title">Create Post</h4>
        </div>
        <div class="col-md-2 mb-3"></div>
      </div>
      <form method="post" action="{{route('storePost')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
        @csrf
        {{csrf_field()}}
        <div class="form-row">
          <div class="col-md-2 mb-3"></div>
          <div class="col-md-8 mb-3">
            <label for="validationCustom01" style="text-align: right; display: block;">Title</label>
            <input type="text" class="form-control" name="title" id="validationCustom01"
              placeholder="Enter your title here" value="" required>
            <div class="invalid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-2 mb-3"></div>
        </div>
        <div class="form-row">
          <div class="col-md-2 mb-3"></div>
          <div class="col-md-8 mb-3">
            <label for="validationCustom01" style="text-align: right; display: block;">Excerpt</label>
            <input type="text" class="form-control" name="excerpt" id="validationCustom01"
              placeholder="Enter your excerpt here" value="" required>
            <div class="invalid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-2 mb-3"></div>
        </div>
        <div class="form-row">
          <div class="col-md-2 mb-3"></div>
          <div class="col-md-8 mb-3">
            <label for="validationCustom01" style="text-align: right; display: block;">Body</label>
            <textarea name="body" class="summernote"></textarea>
          </div>
          <div class="col-md-2 mb-3"></div>
        </div>
        <div class="form-row">
          <div class="col-md-2 mb-3"></div>
          <div class="col-md-8 mb-3">
            <label for="validationCustom01" style="text-align: right; display: block;">Photo</label>
              <input type="file" class="form-control-file" name="photo" id="exampleInputFile">
          </div>
          <div class="col-md-2 mb-3"></div>
        </div>
        <div class="form-row">
          <div class="col-md-2 mb-3"></div>
          <div class="col-md-8 mb-3">
            <label for="validationCustom01" style="text-align: right; display: block;">Category</label>
            <select naem="category" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-2 mb-3"></div>
        </div>
        <div class="form-row">
          <div class="col-md-2 mb-3"></div>
          <div class="col-md-8 mb-3">
            <button class="btn btn-primary" type="submit" style="float: right">Submit</button>
          </div>
          <div class="col-md-2 mb-3"></div>
        </div>
      </form>
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
    </div>
  </div>

</div>
@endsection
@section('footer')
<!-- This Page JS -->
<script src="{{asset('/posts/create/summernote/dist/summernote-bs4.min.js')}}"></script>
<script>
/************************************/
//default editor
/************************************/
$('.summernote').summernote({
  height: 350, // set editor height
  minHeight: null, // set minimum height of editor
  maxHeight: null, // set maximum height of editor
  focus: false // set focus to editable area after initializing summernote
});

/************************************/
//inline-editor
/************************************/
$('.inline-editor').summernote({
  airMode: true
});

/************************************/
//edit and save mode
/************************************/
window.edit = function() {
    $(".click2edit").summernote()
  },
  window.save = function() {
    $(".click2edit").summernote('destroy');
  }

var edit = function() {
  $('.click2edit').summernote({
    focus: true
  });
};

var save = function() {
  var markup = $('.click2edit').summernote('code');
  $('.click2edit').summernote('destroy');
};

/************************************/
//airmode editor
/************************************/
$('.airmode-summer').summernote({
  airMode: true
});
</script>
<!-- This Page JS -->
<!-- <script src="{{asset('/posts/create/tinymce/tinymce.min.js')}}"></script>
<script>
$(document).ready(function() {

  if ($("#mymce").length > 0) {
    tinymce.init({
      selector: "textarea#mymce",
      theme: "modern",
      height: 300,
      plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

    });
  }
});
</script> -->
@endsection