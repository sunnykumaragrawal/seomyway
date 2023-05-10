@extends('base')

@section('title')
How to use canonical tag in seo
@stop

@section('meta_desc')
In this article I have explained how to use canonical tag in seo & benefits of using canonical url.
@stop

@section('meta_keywords')
canonical tag,
what is a canonical tag,
what is a canonical url,
canonical tag in html,
canonical link,
canonical tag example,
canonical issue in seo,
how to add canonical tag in html,
what is canonical in seo,
what is canonical tag in seo,
@stop

@section('content')
<main>
  <section class="single-blog1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <article class="single-blog-item">
            <div class="single-blog-title">
              <h1>How to use canonical tag in seo</h1>
            </div>
            <div class="single-blog-img">
              <img src="{{asset('assets/img/blog/thumbnail/canonical-tag.png')}}" alt="How to use canonical tag in seo" class="img-fluid">
            </div>
            <div class="single-blog-content">
              <h3>What is Canonical tag?</h3>
              <p>A canonical tag(rel="canonical") is a piece of html code which helps search engine to inform the main page among the similar pages.</p>
            </div>
            <div class="single-blog-content">
              <h3>What is canonicalization?</h3>
              <p>Canonicalization is the process of selecting the most relevant webpage from the multiple set of webpages having appoximately similar information.</p>
            </div>
            <div class="single-blog-content">
              <h3>How to specify a canonical url?</h3>
              <p>To specify a canonical url , firstly we have to decide that which page can have more impact on user from the set of duplicate pages. After that we can use link tag to specify canonical url</p>
            </div>
            <div class="single-blog-content">
              <h3>Method to specify canonical url:</h3>
              <ul class="sbc-list">
                <li>Redirects</li>
                <li>rel="canonical" link annotations</li>
                <li>Sitemap inclusion</li>
              </ul>
            </div>
            <div class="single-blog-content">
              <h3>Why we need to specify a canonical url?</h3>
              <p>There are lots of reason to specify canonical url:</p>
              <ul class="sbc-list">
                <li>To specify which url we want to show on search results.</li>
                <li>To simplify the process of performance tracking.</li>
                <li>To save the crawlers time.</li>
              </ul>
            </div>
            <div class="single-blog-points">
              <h3></h3>
              <div class="single-blogs-steps">
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
            <p><a href="https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls" target="_blank">https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls</a></p>
            <p><a href="https://developers.google.com/search/docs/crawling-indexing/canonicalization" target="_blank">https://developers.google.com/search/docs/crawling-indexing/canonicalization</a></p>
            <p><a href="https://developers.google.com/search/blog/2009/02/specify-your-canonical" target="_blank">https://developers.google.com/search/blog/2009/02/specify-your-canonical</a></p>
            <p><a href="https://developers.google.com/search/blog/2013/04/5-common-mistakes-with-relcanonical" target="_blank">https://developers.google.com/search/blog/2013/04/5-common-mistakes-with-relcanonical</a></p>
            <p><a href="https://developers.google.com/search/blog/2019/03/how-to-discover-suggest-google-selected" target="_blank">https://developers.google.com/search/blog/2019/03/how-to-discover-suggest-google-selected</a></p>
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
    "@id": "https://sunnyagrawal.in/blog/canonical-tag-in-seo"
  },
  "headline": "How to use canonical tag in seo",
  "description": "In this article I have explained how to use canonical tag in seo & benefits of using canonical url.",
  "image": "https://sunnyagrawal.in/assets/img/blog/thumbnail/canonical-tag.png",  
  "author": {
    "@type": "Person",
    "name": "Sunny Agrawal",
    "url": "https://www.facebook.com/sunny.agarwal.395669/"
  },  
  "datePublished": "2023-05-09",
  "dateModified": "2023-05-09"
}
</script>
@endsection