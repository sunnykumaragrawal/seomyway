@extends('base')

@section('title')
How to generate & submit sitemap directly to google
@stop

@section('meta_desc')
In this blog I have explained how to generate a sitemap for your website and also 2 important tricks to submit sitemap directly to search engine.
@stop

@section('meta_keywords')
sitemap,
xml sitemap,
@stop

@section('content')
<main>
  <section class="single-blog1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <article class="single-blog-item">
            <div class="single-blog-title">
              <h1>How to generate a sitemap for your website & submit directly to google - Step by step guide</h1>
            </div>
            <div class="single-blog-img">
              <img src="{{asset('assets/img/blog/thumbnail/generate-submit-xml-sitemap.png')}}" alt="How to generate and submit xml sitemap" class="img-fluid">
            </div>
            <div class="single-blog-content">
              <h3>What is an xml sitemap?</h3>
              <p>An xml sitemap is a file that contains all urls of a website. It helps crawlers to find all the pages in a website and crawl them easily. This xml file is mainly created for search engines for better crawling and indexing.</p>
            </div>
            <div class="single-blog-content">
              <h3>What are the benefits of using sitemap?</h3>
              <p>The main advantage of using sitemap for your website mentioned as below:</p>
              <ul class="sbc-list">
                <li>It informs search engine for new and updated pages for crawling and indexing.</li>
                <li>It may be possible that some pages of your website will not indexed, but after including sitemap, all pages will be indexed surely.</li>
              </ul>
            </div>
            <div class="single-blog-points">
              <h3>How to generate & submit sitemap for your website:</h3>
              <div class="single-blogs-steps">
                <p><b>Step1: </b> Go to official website of xml sitemap. Put your website url on search box here and press "START" button.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/sitemap/1.PNG')}}" class="img-fluid" alt="generate sitemap">
                </div>
                <div class="visit-link"><a href="https://www.xml-sitemaps.com/" target="_blank">xml sitemap generator</a></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>Step2: </b> Once sitemap generated you can see it by clicking "VIEW SITEMAP DETAILS" button.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/sitemap/2.PNG')}}" class="img-fluid" alt="view sitemap">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>Step3: </b> Now sitemap is ready to use, you can download this file by clicking "DOWNLOAD YOUR XML SITEMAP FILE" button.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/sitemap/3.PNG')}}" class="img-fluid" alt="download sitemap">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>Step4: </b> Upload sitemap for your website in your website root directory. Now go to GOOGLE SEARCH CONSOLE and in sitemaps section enter sitemap url "sitemap.xml" and press "submit" button.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/sitemap/4.PNG')}}" class="img-fluid" alt="upload sitemap">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>Step5: </b> Paste this url "https://google.com/ping?sitemap=https://yourdomain.com/sitemap" with your domain name in browser and press enter. The sitemap will submit automatically to google.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/sitemap/5.PNG')}}" class="img-fluid" alt="submit sitemap">
                </div>
                <div class="visit-link"><a href="https://google.com/ping?sitemap=https://yourdomain.com/sitemap" target="_blank">Submit your sitemap</a></div>
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
    "@id": "https://sunnyagrawal.in/blog/xml-sitemap-generate-and-submit"
  },
  "headline": "How to generate & submit sitemap directly to google",
  "description": "In this blog I have explained how to generate a sitemap for your website and also 2 important tricks to submit sitemap directly to search engine.",
  "image": "https://sunnyagrawal.in/assets/img/blog/thumbnail/generate-submit-xml-sitemap.png",  
  "author": {
    "@type": "Person",
    "name": "Sunny Agrawal",
    "url": "https://www.facebook.com/sunny.agarwal.395669/"
  },  
  "datePublished": "2023-04-27",
  "dateModified": "2023-04-27"
}
</script>
@endsection