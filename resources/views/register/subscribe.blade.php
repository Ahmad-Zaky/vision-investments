@extends('front-layout.layout')

@section('title', 'subscribe')

@section('head')
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app_cart.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive_cart.css') }}">
<link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

<!-- <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div> -->

<div class="product-section container">
  <div></div>
  <div>
    <div class="product-section-image">
      <img src="{{asset('/images/subscriptions/'.$packages[0]->thumbnail)}}" alt="product" class="active"
        id="currentImage">
    </div>
    <div class="product-section-images">
      <div class="product-section-thumbnail selected">
        <img src="{{asset('/images/subscriptions/'.$packages[0]->thumbnail)}}" alt="product">
      </div>

      @if (!$packages->isEmpty())
      @foreach ($packages as $key => $package)
      @if($key > 0)
      <div class="product-section-thumbnail">
        <img src="{{asset('/images/subscriptions/'.$package->thumbnail)}}" alt="product">
      </div>
      @endif
      @endforeach
      @endif
    </div>
  </div>
  <div class="product-section-information">

    <h1 class="product-section-title" >{{$packages[0]->name}}</h1>

    <form action="#" method="POST">

      <p>
      {!! $packages[0]->description !!}
      </p>
      
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <input class="form-control" type="text" name="price" placeholder="  قم بأدخال السعر ($)"
            style="margin-top: 10px">
        </div>
      </div>

      <p>&nbsp;</p>

      {{ csrf_field() }}
      <button type="submit" class="button button-plain" style="vertical-align : bottom;">اشترك معنا</button>
    </form>
  </div>
</div> <!-- end product-section -->
@endsection

@section('footer')
<script>
(function() {
  const currentImage = document.querySelector('#currentImage');
  const images = document.querySelectorAll('.product-section-thumbnail');

  images.forEach((element) => element.addEventListener('click', thumbnailClick));

  function thumbnailClick(e) {
    currentImage.classList.remove('active');

    currentImage.addEventListener('transitionend', () => {
      currentImage.src = this.querySelector('img').src;
      currentImage.classList.add('active');
    })

    images.forEach((element) => element.classList.remove('selected'));
    this.classList.add('selected');
  }

})();
</script>

<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('js/algolia.js') }}"></script>

@endsection