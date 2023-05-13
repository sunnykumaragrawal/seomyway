@extends('base')

@section('title')
How to create & submit robots.txt file for your website
@stop

@section('meta_desc')
In this blog I have explained how to create a robots.txt file for your website and also method to submit this file directly to search engine.
@stop

@section('meta_keywords')
robots.txt,
@stop

@section('content')
<main>
  <section class="single-blog1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <article class="single-blog-item">
            <div class="single-blog-title">
              <h1>How to create and submit robots.txt file for my website - Step by step guide</h1>
            </div>
            <div class="single-blog-img">
              <img src="{{asset('assets/img/blog/thumbnail/create-and-submit-robots.txt.png')}}" alt="How to create and submit robots.txt file" class="img-fluid">
            </div>
            <div class="single-blog-content">
              <h3>What is a robots.txt file?</h3>
              <p>A robots.txt file is used to tell search engine crawlers which pages or urls they can access on a website or not.</p>
            </div>
            <div class="single-blog-content">
              <h3>What are the benefits of using robots.txt?</h3>
              <p>The main advantage of using robots.txt file for your website mentioned as below:</p>
              <ul class="sbc-list">
                <li>It reduces the crawler traffic on your server.</li>
                <li>It can also block media files(images, video, audio etc).</li>
                <li>It can also block resources files(style, script etc.)</li>
              </ul>
            </div>
            <div class="single-blog-content">
              <h3>What are the limitations of using robots.txt?</h3>
              <p>The main limitations of using robots.txt file for your website mentioned as below:</p>
              <ul class="sbc-list">
                <li>It may not be supported by all search engine crawlers.</li>
                <li>A page that's disallowed in robots.txt can still be indexed if linked to from other sites.</li>
              </ul>
            </div>
            <div class="single-blog-points">
              <h3>How to create & submit a robots.txt file for your website:</h3>
              <div class="single-blogs-steps">
                <p><b>Step1- Create a robots.txt: </b> Create a plain text file "robots.txt" and write instructions for crawlers.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstxt/1.PNG')}}" class="img-fluid" alt="creating robots.txt">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>Step2- Upload your file: </b> Upload this file on server at the root folder of your website.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstxt/2.PNG')}}" class="img-fluid" alt="uploading robots.txt">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>Step3- Test your robots.txt: </b> Navigate to your robots.txt in your browser. for example As my domain name is "sunnyagrawal.in" and the robots.txt location is "sunnyagrawal.in/robots.txt". If this url is available in browser for everyone it means i have uploaded robots.txt file properly.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstxt/3.PNG')}}" class="img-fluid" alt="testing robots.txt">
                </div>
                <div class="visit-link"></div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
</main>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://sunnyagrawal.in/blog/create-and-submit-robots.txt"
  },
  "headline": "How to create & submit robots.txt file for your website",
  "description": "In this blog I have explained how to create a robots.txt file for your website and also method to submit this file directly to search engine.",
  "image": "https://sunnyagrawal.in/assets/img/blog/thumbnail/create-and-submit-robots.txt.png",  
  "author": {
    "@type": "Person",
    "name": "Sunny Agrawal",
    "url": "https://www.facebook.com/sunny.agarwal.395669/"
  },  
  "datePublished": "2023-04-28",
  "dateModified": "2023-04-28"
}
</script>
@endsection