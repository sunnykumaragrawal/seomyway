@extends('base')

@section('title')
Full Stack Web developer & Seo optimization @stop

@section('meta_desc')
If you want to create your business online and rank on google then don't worry. we offer website designing services, website development services, seo services at affordable price. @stop

@section('meta_keywords')
website designing company,
website development company,
seo services,
@stop

@section('content')
<section id="hero">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 order-lg-1 order-2">
        <div class="owl-carousel hero-carousel">
          <div class="hero-item">
            <h1>Web Design Company</h1>
            <p>We are a web design agency & we create modern and responsive web designs for our clients. Our web designs are fast to load and at affordable price.</p>
            <div class="hero-btns">
              <a href="{{route('webdesignMain')}}" class="btn1">Web Design Services</a>
            </div>
          </div>
          <div class="hero-item">
            <h1>Web Developer</h1>
            <p>We create dynamic websites as per customer requirement. Our dynamic website is fully customizable where you can change any part of content in your website.</p>
            <div class="hero-btns">
              <a href="{{route('webdevelopmentMain')}}" class="btn1">Web Development Services</a>
            </div>
          </div>
          <div class="hero-item">
            <h1>Best Seo Company</h1>
            <p>To rank your website on google you need a seo service provider. we provide best seo services at very afforable rates with free trials.</p>
            <div class="hero-btns">
              <a href="{{route('seoMain')}}" class="btn1">Seo Services</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 offset-lg-2 order-lg-2 order-1">
        <div class="owl-carousel heroimg-carousel">
          <div class="hero-img">
            <img src="{{asset('assets/img/service/web-design.png')}}" alt="Website designing" class="img-fluid">
          </div>
          <div class="hero-img">
            <img src="{{asset('assets/img/service/web-development.png')}}" alt="Website Development" class="img-fluid">
          </div>
          <div class="hero-img">
            <img src="{{asset('assets/img/service/site-optimization.png')}}" alt="Seo Services" class="img-fluid">
          </div>
        </div>
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
          <p>I am a full stack web developer & seo service provider. I offer website designing services, website development services, seo services at affordable price.</p>
        </div>
        <div class="col-lg-3 about-btns">
          <a href="tel:7770951212" class="btn btn-danger"><span>Call Me</span></a>
          <a href="https://api.whatsapp.com/send?phone=917770951212" class="btn btn-secondary"><span>Start Chat</span></a>
          <a href="mailto:sunny.agarwal865@gmail.com" class="btn btn-info"><span>Send An Email</span></a>
        </div>
      </div>
    </div>
  </section>
  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Our Services</h2>  
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="service-icon">
              <img src="{{asset('assets/img/service/web-design.png')}}" alt="Website designing" class="img-fluid">
            </div>
            <div class="service-content">
              <h3>Website Designing</h3>
              <p>We create modern and affordable website designs for our clients. Web Designs may contains as many sections that you want. Our web designs are 100% mobile friendly.</p>
            </div>
            <div class="service-btn">
              <a href="{{route('webdesignMain')}}">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="service-icon">
              <img src="{{asset('assets/img/service/web-development.png')}}" alt="Website Development" class="img-fluid">
            </div>
            <div class="service-content">
              <h3>Web Development</h3>
              <p>We also create dynamic websites as per customer requirement. Our dynamic website is fully customizable where you can change any part of content.</p>
            </div>
            <div class="service-btn">
              <a href="{{route('webdevelopmentMain')}}">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="service-icon">
              <img src="{{asset('assets/img/service/site-optimization.png')}}" alt="Seo Services" class="img-fluid">
            </div>
            <div class="service-content">
              <h3>Seo Services</h3>
              <p>To rank your website on google you need a seo service provider. we provide best seo services at very afforable services.</p>
            </div>
            <div class="service-btn">
              <a href="{{route('seoMain')}}">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="allblogs pb-0">
    <div class="container">
      <div class="section-title">
        <h2>Latest Blogs</h2>  
      </div>
      <div class="row allblogs-carousel owl-carousel">
        <div class="allblogs-item">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('backlink.howcreate')}}"><img src="{{asset('assets/img/blog/thumbnail/how-to-create-backlinks.png')}}" alt="How to create backlinks for my website" class="img-fluid"></a></div>
          </article>
        </div>
        <div class="allblogs-item">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('keyword.freetools')}}"><img src="{{asset('assets/img/blog/thumbnail/keyword-research-tools.png')}}" alt="keyword research tools" class="img-fluid"></a></div>
          </article>
        </div>
        <div class="allblogs-item">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('seo.intro')}}"><img src="{{asset('assets/img/blog/thumbnail/how-seo-works.png')}}" alt="How does seo works?" class="img-fluid"></a></div>
          </article>
        </div>
        <div class="allblogs-item">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('backlink.competitors')}}"><img src="{{asset('assets/img/blog/thumbnail/How-to-check-competitors-backlinks.png')}}" alt="How to check competitors backlinks" class="img-fluid"></a></div>
          </article>
        </div>
        <div class="allblogs-item">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('keyword.researchsteps')}}"><img src="{{asset('assets/img/blog/thumbnail/how-to-do-keyword-research.png')}}" alt="How to do keyword research in seo" class="img-fluid"></a></div>
          </article>
        </div>
      </div>
    </div>
  </section>
  @include('common.pricing')
  <section id="faq" class="faq">
    <div class="container">
      <div class="section-title">
        <h2>Frequently Asked Questions</h2>  
      </div>
      <div class="row">
        <div class="col-lg-5 d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/img/faq-bg.webp')}}" class="img-fluid" alt="faq-background">
        </div>
        <div class="col-lg-7">
          <div class="faq-list">
            <ul>
              <li data-aos="flip-right">
                <img src="{{asset('assets/img/faq.png')}}" class="img-fluid icon-help" alt="arrow-help"> <a data-toggle="collapse" class="collapse" href="#faq-list-1">How long will it take to get a new website? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                  <p>Although each client want to make his website faster, we aim for a turnaround time of 3 to 6 working days on average. Your responsiveness to feedback, and how soon the content is prepared all have an impact on how quickly the project is finished.</p>
                </div>
              </li>

              <li data-aos="flip-right" data-aos-delay="600">
                <img src="{{asset('assets/img/faq.png')}}" class="img-fluid icon-help" alt="arrow-help"> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">What Package Should I Choose? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                  <p>If you want to make a small investment then you should select basic package. But if you need more functionality in your website and you are ready to pay little more then you can select advanced package or fully featured packages.</p>
                </div>
              </li>

              <li data-aos="flip-right" data-aos-delay="200">
                <img src="{{asset('assets/img/faq.png')}}" class="img-fluid icon-help" alt="arrow-help"> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Will you maintain my site for me? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                  <p>Yes we can! but we charge for it per year.</p>
                </div>
              </li>

              <li data-aos="flip-right" data-aos-delay="300">
                <img src="{{asset('assets/img/faq.png')}}" class="img-fluid icon-help" alt="arrow-help"> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Where should my website be hosted? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                  <p>We host our clients website at Godaddy hosting server. we can also host in server if you want but you have to pay for it.</p>
                </div>
              </li>

              <li data-aos="flip-right" data-aos-delay="400">
                <img src="{{asset('assets/img/faq.png')}}" class="img-fluid icon-help" alt="arrow-help"> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Will my website be mobile-friendly? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                  <p>Absolutely! More than ever, having a mobile-friendly website is essential! We put a lot of effort into making sure your website looks fantastic on a number of devices.</p>
                </div>
              </li>

            </ul>
          </div>
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
              <img src="{{asset('assets/img/contact/icon1.png')}}" alt="Email Us" class="img-fluid">
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
              <img src="{{asset('assets/img/contact/icon2.png')}}" alt="Call Us" class="img-fluid">
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
          <a href="https://www.instagram.com/sunny_seomyway/" target="_blank"><img src="assets/img/social/instagram.png" class="img-fluid" alt="Instagram"></a>
        </div>
        <div class="social-block" data-aos="flip-down" data-aos-delay="200">
          <a href="https://www.linkedin.com/in/sunny-agrawal-99813587/" target="_blank"><img src="assets/img/social/linkedin.png" class="img-fluid" alt="Linkedin"></a>
        </div>
        <div class="social-block" data-aos="flip-down" data-aos-delay="300">
          <a href="https://www.facebook.com/sunny.agarwal.395669/" target="_blank"><img src="assets/img/social/facebook.png" class="img-fluid" alt="Facebook"></a>
        </div>
        <div class="social-block" data-aos="flip-down" data-aos-delay="400">
          <a href="https://twitter.com/sunnyagrawal216" target="_blank"><img src="assets/img/social/twitter.png" class="img-fluid" alt="Twitter"></a>
        </div>
        <div class="social-block" data-aos="flip-down" data-aos-delay="500">
          <a href="https://www.youtube.com/channel/UCPD3EfTYaMLVXtQ6DI3PXUw" target="_blank"><img src="assets/img/social/youtube.png" class="img-fluid" alt="Youtube"></a>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection