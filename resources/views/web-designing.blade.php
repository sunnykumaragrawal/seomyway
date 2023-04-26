@extends('base')

@section('title')
Best Web designing services at affordable price @stop

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
        <h2>Website Designing Services</h2>
        <p>We create modern and affordable website designs for our clients. Web Designs may contains as many sections that you want. Our web designs are 100% mobile friendly.</p>
      </div>
      <div class="row">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('webdesignMain')}}">Web design</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>
<main class="section-bg">
  <section id="seo-services" class="seo-services">
    <div class="container">
      <div class="section-title">
        <h2>Web Designing Services we offer</h2>  
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">1</div>
            <div class="seoservice-content">
              <h3>Modern Web Designs</h3>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">2</div>
            <div class="seoservice-content">
              <h3>Responsive Web Designs</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection