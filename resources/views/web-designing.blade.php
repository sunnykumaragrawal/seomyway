@extends('base')

@section('title')
Website Designing Company - Just at 129 rs/month 
@stop

@section('meta_desc')
We are a web design agency & we create modern and responsive web designs for our clients. Our web designs are fast to load and at affordable price.
@stop

@section('meta_keywords')
web design company,
web designing company,
website design company,
website designing company,
web design agency,
website company,
website building company,
website creation company,
@stop

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
  <div class="breadcrumb-hero">
    <div class="container">
      <div class="breadcrumb-hero">
        <h1>Website Designing Company</h1>
        <p>We are a web design agency & we create modern and responsive web designs for our clients. Our web designs are fast to load and at affordable price.</p>
      </div>
      <div class="row">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('webdesignMain')}}">Web designing</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>
<main class="section-bg">
  <section id="seo-services" class="seo-services">
    <div class="container">
      <div class="section-title">
        <h2>Web Design Services</h2>  
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">1</div>
            <div class="seoservice-content">
              <h3>Pre-built websites</h3>
              <p>We have created lots of templates in advance to save our customer's time. If you are in hurry & need a website for your
              business. You can take the advantage of our services. </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">2</div>
            <div class="seoservice-content">
              <h3>Customized Web Designs</h3>
              <p>We also create brand new website design for our customers as per their requirement. Design may contains as many sections and pages as you want in your website.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">3</div>
            <div class="seoservice-content">
              <h3>Modern Web Designs</h3>
              <p>Our web designs are not the old type websites. We create modern web designs that contains beautiful images & icons, animations and easy to understand.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">4</div>
            <div class="seoservice-content">
              <h3>Responsive Web Designs</h3>
              <p>The designs that we create, they are fully responsive. It means the website will look great in mobiles, tablets, laptops and all other devices.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('common.pricing')
</main>
@endsection