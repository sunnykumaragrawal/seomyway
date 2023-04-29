@extends('base')

@section('title')
Website Development Company - Just at 499rs/month
@stop

@section('meta_desc')
We create dynamic websites as per customer requirement. Our dynamic website is fully customizable where you can change any part of content in your website.
@stop

@section('meta_keywords')
web developer,
web development company,
website developer company,
website development company,
best web development company,
web development agency,
@stop

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
  <div class="breadcrumb-hero">
    <div class="container">
      <div class="breadcrumb-hero">
        <h1>Website Development Company</h1>
        <p>We create dynamic websites as per customer requirement. Our dynamic website is fully customizable where you can change any part of content in your website.</p>
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
        <h2>Web Development Services</h2>  
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">1</div>
            <div class="seoservice-content">
              <h3>Dynamic Sections</h3>
              <p>We offer dynamic section website to our customer's where you can change your website details like- company info, services, gallery pics, staff details, contact details, social media links etc.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">2</div>
            <div class="seoservice-content">
              <h3>Multi-purpose forms</h3>
              <p>We also create forms like- contact form, get a quote form, booking form etc, where your customer can send his detail or query to you. And you can manage this detail or query in your admin panel.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">3</div>
            <div class="seoservice-content">
              <h3>Customer Review</h3>
              <p>We can also create customer review system where your customer can give feedback for your service or product and that review will show on your website as testimonials. You can manage reviews in your admin panel.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">4</div>
            <div class="seoservice-content">
              <h3>Blogging System</h3>
              <p>We can also create blogging system in which you can manage(add, update or delete) blogs through your admin panel. And these blogs will show in your website where your audience can read these blogs.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('common.pricing')
</main>
@endsection