@extends('base')

@section('title')
How to manage crawling and indexing for my website
@stop

@section('meta_desc')
In this blog I have explained basics of crawling and indexing. Also I have explained methods to manage indexing and crawling for your website.
@stop

@section('meta_keywords')
what is google indexing,
indexing with google,
google indexing,
google indexing checker,
google crawler,
@stop

@section('content')
<main>
  <section class="single-blog1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <article class="single-blog-item">
            <div class="single-blog-title">
              <h1>How to manage crawling and indexing for my website - Google Suggestions</h1>
            </div>
            <div class="single-blog-img">
              <img src="{{asset('assets/img/blog/thumbnail/indexing-with-google.png')}}" alt="google crawling and google indexing" class="img-fluid">
            </div>
            <div class="single-blog-content">
              <h3>What is a google crawler?</h3>
              <p>Google crawler is an automated software that fetches the webpages from the web(present on internet). The generic name of google crawler is "googlebot".</p>
            </div>
            <div class="single-blog-content">
              <h3>What is google crawling and how it crawls the website?</h3>
              <p>The process of analyzing new and updated web pages is called crawling. Googlebot crawls the new and updated web pages by following links, by reading sitemap and many other methods.</p>
            </div>
            <div class="single-blog-content">
              <h3>What is google indexing?</h3>
              <p>The process of storing web pages in its index is called google indexing. Google will not show web pages on serp until it will index it.</p>
            </div>
            <div class="single-blog-points">
              <h3>Methods to manage crawling and indexing:</h3>
              <div class="single-blogs-steps">
                <p><b>1. Using sitemaps:</b> With the use of sitemap you can help crawlers to crawl your website easily. You can submit your sitemap in google search console.</p>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>2. Url Inspection tool:</b> You can use url inspection tool present in google search console to check crawl details. Also you can request for indexing here.</p>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>3. Using robots.txt:</b> With the help of robots.txt you can block crawlers to crawl and index some pages of your website. Also you can block images , videos and other assets which you don't want to index.</p>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>4. Meta robots tags:</b> Meta robots tags help you manage image size on serp, snippet length on serp, video length on serp and many more features</p>
                <div class="visit-link"></div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="references">
            <h4>References:</h4>
            <p><a href="https://developers.google.com/search/docs/crawling-indexing" target="_blank">https://developers.google.com/search/docs/crawling-indexing</a></p>
            <p><a href="https://developers.google.com/search/help/crawling-index-faq" target="_blank">https://developers.google.com/search/help/crawling-index-faq</a></p>
          </div>
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
    "@id": "https://sunnyagrawal.in/blog/indexing-with-google"
  },
  "headline": "How to manage crawling and indexing for my website",
  "description": "In this blog I have explained basics of crawling and indexing. Also I have explained methods to manage indexing and crawling for your website.",
  "image": "https://sunnyagrawal.in/assets/img/blog/thumbnail/indexing-with-google.png",  
  "author": {
    "@type": "Person",
    "name": "Sunny Agrawal",
    "url": "https://www.facebook.com/sunny.agarwal.395669/"
  },  
  "datePublished": "2023-04-19",
  "dateModified": "2023-04-19"
}
</script>
@endsection