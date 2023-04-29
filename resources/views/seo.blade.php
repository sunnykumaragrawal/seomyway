@extends('base')

@section('title')
Best seo services - Start A free trial
@stop

@section('meta_desc')
To rank your website on google you need a seo service provider. we provide best seo services at very afforable rates with free trials.
@stop

@section('meta_keywords')
seo company,
seo services,
seo agency,
best seo company,
best seo services,
@stop

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
  <div class="breadcrumb-hero">
    <div class="container">
      <div class="breadcrumb-hero">
        <h1>Best Seo Company</h1>
        <p>To rank your website on google you need a seo service provider. we provide best seo services at very afforable rates with free trials.</p>
      </div>
      <div class="row">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('seoMain')}}">Seo</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>
<main class="section-bg">
  <section id="seo-services" class="seo-services">
    <div class="container">
      <div class="section-title">
        <h2>Best Seo Services</h2>  
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">1</div>
            <div class="seoservice-content">
              <h3>Content Writing</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">2</div>
            <div class="seoservice-content">
              <h3>Link Building</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">3</div>
            <div class="seoservice-content">
              <h3>On-site optimization</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">4</div>
            <div class="seoservice-content">
              <h3>Writing meta tags</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">5</div>
            <div class="seoservice-content">
              <h3>Image optimization</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">6</div>
            <div class="seoservice-content">
              <h3>Off-site optimization</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">7</div>
            <div class="seoservice-content">
              <h3>Keyword research</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">8</div>
            <div class="seoservice-content">
              <h3>Mobile friendly website</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="seoservice-item">
            <div class="seoservice-icon">9</div>
            <div class="seoservice-content">
              <h3>Page speed Improvement</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection