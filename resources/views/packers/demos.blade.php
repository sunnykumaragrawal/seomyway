@extends('base')

@section('title')
Modern Website Designs - Packers & Movers @stop

@section('meta_desc')
@stop

@section('meta_keywords')
website templates,
website design templates,
web templates,
web design templates,
best website templates,
free website design templates,
website design templates free,
website layout template,
@stop

@section('content')
<main class="section-bg">
  <section>
    <div class="container">
      <div class="section-title">
        <h2>Best Templates For Your Packers and Movers Business</h2>
        <p></p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="template-box">
            <div class="template-img">
              <img src="{{asset('assets/img/p&m/demos/demo1.jpg')}}" class="img-fluid">
            </div>
            <div class="template-view">
              <a href="{{route('packer.demo1')}}" target="_blank">Live Demo</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="template-box">
            <div class="template-img">
              <img src="{{asset('assets/img/p&m/demos/demo3.jpg')}}" class="img-fluid">
            </div>
            <div class="template-view">
              <a href="{{route('packer.demo3')}}" target="_blank">Live Demo</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="template-box">
            <div class="template-img">
              <img src="{{asset('assets/img/p&m/demos/demo4.jpg')}}" class="img-fluid">
            </div>
            <div class="template-view">
              <a href="{{route('packer.demo4')}}" target="_blank">Live Demo</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="template-box">
            <div class="template-img">
              <img src="{{asset('assets/img/p&m/demos/demo2.jpg')}}" class="img-fluid">
            </div>
            <div class="template-view">
              <a href="{{route('packer.demo2')}}" target="_blank">Live Demo</a>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
</main>
@endsection