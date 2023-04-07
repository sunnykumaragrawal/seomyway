@extends('base')

@section('title')
How to test your website speed - Free Tools by Google
@stop

@section('meta_desc')
In this article I have mentioned so many free tools for page speed testing for your website. Some are offered by google and some are from others.
@stop

@section('meta_keywords')
website test,
website speed test google,
website speed test,
website speed checker,
web page speed test,
test website speed,
site speed test,

@stop

@section('content')
<main>
  <section class="single-blog1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <article class="single-blog-item">
            <div class="single-blog-title">
              <h1>How to check web page speed of your website : Important Ranking Factor - Free tools by Google</h1>
            </div>
            <div class="single-blog-img">
              <img src="{{asset('assets/img/blog/thumbnail/test-website-speed.png')}}" alt="Test your website speed with free tools" class="img-fluid">
            </div>
            <div class="single-blog-content">
              <h3>What is Website Speed?</h3>
              <p>Page speed is a factor that tells us how our website is loading on different devices like mobile, desktop, ipad, iphone etc.</p>
            </div>
            <div class="single-blog-content">
              <h3>Why Page Speed is important in Seo?</h3>
              <p>Google declared that we show faster websites on top rank for better user experience. So it becomes necessary to improve our website speed for better user experience.<br> There are lots of free tools which can help us to test and improve our website speed. Google also provide "Page Speed Insights" tool for testing web page speed.</p>
            </div>
            <div class="single-blog-points">
              <h3>Best tools to check website speed:</h3>
              <div class="single-blogs-steps">
                <p><b>1. Page speed Insights:</b> It is a free tool owned by google. This tool can generate report for how website is loading on both devices mobile and desktop. Also it provides the suggestions to improve web page speed.<br>This tool provide score and metrics for Website Performance, Accessibility on devices, Best Practices, Seo strategy.</p>
                <div class="visit-link"><a href="https://pagespeed.web.dev/" target="_blank">Go to page speed insights</a></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>2. Gtmetrix:</b> This tool gives us Gtmetrix grade for website performance and website structure. It also provides web vitals score like LCP, TBT, CLS.<br>This tool has advance features like: comparison option, page settings, Monitor, Setup alerts, tags and download pdf.</p>
                <div class="visit-link"><a href="https://gtmetrix.com/" target="_blank">Go to Gtmetrix</a></div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection