@extends('base')

@section('title')
Best Web developer services at affordable price @stop

@section('meta_desc')
@stop

@section('meta_keywords')
web designing,
@stop

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
  <div class="breadcrumb-hero">
    <div class="container">
      <div class="breadcrumb-hero">
        <h2>Website Development Services</h2>
        <p>We also create dynamic websites as per customer requirement. Our dynamic website is fully customizable where you can change any part of content.</p>
      </div>
      <div class="row">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('webdevelopmentMain')}}">Web development</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>
<main class="section-bg">
  <section id="seo-services" class="seo-services">
    <div class="container">
      <div class="section-title">
        <h2>Web Development Services we offer</h2>  
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">1</div>
            <div class="seoservice-content">
              <h3>Blogging System</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">2</div>
            <div class="seoservice-content">
              <h3>Review System</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">3</div>
            <div class="seoservice-content">
              <h3>Booking Form</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection