@extends("application::Layouts.layout")
@section('content')
<div class="container">
    <div class="row">
      <div class="col-12">
      <div class="add-site-content text-center">
        <div class="add-site-content__img">
          <img src="{{ asset('./assets/imgs/addsite_icon.png') }}" alt="" class="img-responsive">
        </div>
        <div class="add-site-content__title">
          Enter Your Website URL
        </div>

         <div class="add-site-content__desc">
          Let's start by entering your domain or subdomain below to apply protection and free SSL!
There is no need to input HTTP or HTTPS.
        </div>

         <div class="add-site-content__input">
          <input type="text" name="add-site" placeholder="e.g. domain.com">
        </div>

        <div class="add-site-content__button">
         <a href="#" class="btn btn-success">Add Site</a>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection