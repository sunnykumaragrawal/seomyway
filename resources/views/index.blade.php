@extends('base')

@section('title')
Seo services at affordable price @stop

@section('meta_desc')
If you want to grow your business online then don't worry. we offer seo services which will help you to reach your customers. @stop

@section('meta_keywords')
best seo services,
seo company,
@stop

@section('content')
<section id="hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>BoostUp Your Business & Get Top Of Search Engine</h1>
        <a href="tel:7770951212">Call Me Now</a>
      </div>
    </div>
  </div>
</section>
<main class="section-bg">
  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 about-img">
          <img src="{{asset('assets/img/sunny.png')}}" class="img-fluid" alt="Sunny Agrawal">
        </div>
        <div class="col-lg-6 about-content">
          <h3>Hey, I am Sunny</h3>
          <p>I offer seo services for you and my ultimate goal is to grow your business online with my knowledge & experience.</p>
        </div>
        <div class="col-lg-3 about-btns">
          <a href="tel:7770951212" class="btn btn-danger"><img src="{{asset('assets/img/phone-call.png')}}" class="img-fluid"> <span>Call Me</span></a>
          <a href="https://api.whatsapp.com/send?phone=917770951212" class="btn btn-secondary"><img src="{{asset('assets/img/whatsapp.png')}}" class="img-fluid"> <span>Start Chat</span></a>
          <a href="mailto:sunny.agarwal865@gmail.com" class="btn btn-info"><img src="{{asset('assets/img/mail.png')}}" class="img-fluid"> <span>Send An Email</span></a>
        </div>
      </div>
    </div>
  </section>
  <section id="whyus" class="whyus">
    <div class="container">
      <div class="section-title">
        <h2>Why Us</h2>  
      </div>

      <div class="whyus-carousel owl-theme">
        <div class="whyus-block">
          <div class="whyus-item">
            <div class="whyus-icon"><img src="{{asset('assets/img/whyus/passionate.png')}}" class="img-fluid" alt="Passionate"></div>
            <div class="whyus-content">
              <h5>Passionate</h5>
              <p></p>
            </div>
          </div>
        </div>
        <div class="whyus-block">
          <div class="whyus-item">
            <div class="whyus-icon"><img src="{{asset('assets/img/whyus/experience.png')}}" class="img-fluid" alt="Experience"></div>
            <div class="whyus-content">
              <h5>Experience</h5>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Seo Services</h2>  
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="service-item">
            <div class="service-icon">
              <img src="{{asset('assets/img/service/content-writing.png')}}" alt="Seo Content Writing" class="img-fluid">
            </div>
            <div class="service-content">
              <h3>Seo Content Writing</h3>
              <p>Quality of Content is the backbone for a website in Seo. Low quality content may down your ranking, so you must have a good and fresh content for your website. we can create a good quality for you.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="service-item">
            <div class="service-icon">
              <img src="{{asset('assets/img/service/site-optimization.png')}}" alt="Site Optimization" class="img-fluid">
            </div>
            <div class="service-content">
              <h3>Site Optimization</h3>
              <p>Page speed is one of the most important ranking factor in seo and also crucial as per your audience point of view. we can optimize your website which includes(css, js , images) optimization.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="service-item">
            <div class="service-icon">
              <img src="{{asset('assets/img/service/backlink.png')}}" alt="Link Building" class="img-fluid">
            </div>
            <div class="service-content">
              <h3>Link Building</h3>
              <p>Backlinks are the clickable links which are present in others website pointing to your website. It can increase your domain authority which results in your better ranking. we can create quality backlinks for you.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="service-item">
            <div class="service-icon">
              <img src="{{asset('assets/img/service/mobile-friendly.png')}}" alt="Seo Mobile Friendly" class="img-fluid">
            </div>
            <div class="service-content">
              <h3>Seo Mobile Friendly</h3>
              <p>Responsiveness of the website is a strong ranking factor in seo. Also it plays an important role for user experience. we can improve responsiveness of your website and make it 100% fit to your mobile and other devices.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="allblogs pb-0">
    <div class="container">
      <div class="section-title">
        <h2>Seo Blogs</h2>  
      </div>
      <div class="row allblogs-carousel owl-carousel">
        <div class="allblogs-item">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.seorankingfactors')}}"><img src="{{asset('assets/img/blog/thumbnail/seo-ranking-factors.png')}}" alt="seo ranking factors" class="img-fluid"></a></div>
            <h3 class="allblogs-title"><a href="{{route('blog.seorankingfactors')}}">Most important seo ranking factors</a></h3>
            <div class="allblogs-btn"><a href="{{route('blog.seorankingfactors')}}">Read More</a></div>
          </article>
        </div>
        <div class="allblogs-item">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('keyword.freetools')}}"><img src="{{asset('assets/img/blog/thumbnail/keyword-research-tools.png')}}" alt="keyword research tools" class="img-fluid"></a></div>
            <h3 class="allblogs-title"><a href="{{route('keyword.freetools')}}">Free tools for keyword research In Seo</a></h3>
            <div class="allblogs-btn"><a href="{{route('keyword.freetools')}}">Read More</a></div>
          </article>
        </div>
        <div class="allblogs-item">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('keyword.researchsteps')}}"><img src="{{asset('assets/img/blog/thumbnail/hoe-to-do-keyword-research.png')}}" alt="How to do keyword research in seo" class="img-fluid"></a></div>
            <h3 class="allblogs-title"><a href="{{route('keyword.researchsteps')}}">How to do keyword research In Seo</a></h3>
            <div class="allblogs-btn"><a href="{{route('keyword.researchsteps')}}">Read More</a></div>
          </article>
        </div>
        <div class="allblogs-item">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.tipswritetitle')}}"><img src="{{asset('assets/img/blog/thumbnail/tips-for-writing-title-tag.png')}}" alt="tips for writing title tag" class="img-fluid"></a></div>
            <h3 class="allblogs-title"><a href="{{route('blog.tipswritetitle')}}">Tips for writing good title tag</a></h3>
            <div class="allblogs-btn"><a href="{{route('blog.tipswritetitle')}}">Read More</a></div>
          </article>
        </div>
        <div class="allblogs-item">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.commonmistakeseotitle')}}"><img src="{{asset('assets/img/blog/thumbnail/common-mistakes-in-title-tag.png')}}" alt="Common mistakes in title tag" class="img-fluid"></a></div>
            <h3 class="allblogs-title"><a href="{{route('blog.commonmistakeseotitle')}}">Common Mistake while writing seo title tag</a></h3>
            <div class="allblogs-btn"><a href="{{route('blog.commonmistakeseotitle')}}">Read More</a></div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2>Contact Us</h2>  
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="contact-item">
            <div class="contact-icon">
              <img src="{{asset('assets/img/contact/icon1.png')}}" alt="Email" class="img-fluid">
            </div>
            <div class="contact-content">
              <h3>Email</h3>
              <p>sunny.agarwal865@gmail.com</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-item">
            <div class="contact-icon">
              <img src="{{asset('assets/img/contact/icon2.png')}}" alt="Phone" class="img-fluid">
            </div>
            <div class="contact-content">
              <h3>Phone</h3>
              <p>7770951212</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="socialmedia" id="socialmedia">
    <div class="container">
      <div class="section-title">
        <h2>Let's start follow Me</h2>  
      </div>
      <div class="owl-carousel socialmedia-carousel">
        <div class="social-block" data-aos="flip-down" data-aos-delay="100">
          <a href="https://www.instagram.com/sunny_seomyway/" target="_blank"><img src="assets/img/social/instagram.png" class="img-fluid" alt=""></a>
        </div>
        <div class="social-block" data-aos="flip-down" data-aos-delay="200">
          <a href="https://www.linkedin.com/in/sunny-agrawal-99813587/" target="_blank"><img src="assets/img/social/linkedin.png" class="img-fluid" alt=""></a>
        </div>
        <div class="social-block" data-aos="flip-down" data-aos-delay="300">
          <a href="https://www.facebook.com/sunny.agarwal.395669/" target="_blank"><img src="assets/img/social/facebook.png" class="img-fluid" alt=""></a>
        </div>
        <div class="social-block" data-aos="flip-down" data-aos-delay="400">
          <a href="https://twitter.com/sunnyagrawal216" target="_blank"><img src="assets/img/social/twitter.png" class="img-fluid" alt=""></a>
        </div>
        <div class="social-block" data-aos="flip-down" data-aos-delay="500">
          <a href="https://www.youtube.com/channel/UCPD3EfTYaMLVXtQ6DI3PXUw" target="_blank"><img src="assets/img/social/youtube.png" class="img-fluid" alt=""></a>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection