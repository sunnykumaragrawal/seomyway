@extends('base')

@section('title')
Meta tags for seo ranking - The complete guide
@stop

@section('meta_desc')
In this blog I have explained how different meta tags are important in seo ranking directly or indirectly. Also I have shared some tips for meta tags.
@stop

@section('meta_keywords')
what is meta tag in seo,
what is meta tag,
what is a meta tag,
what are meta tags used for,
what are meta tags in seo,
what are meta tags,
seo tags,
meta tags,
meta tag,
@stop

@section('content')
<main>
  <section class="single-blog1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <article class="single-blog-item">
            <div class="single-blog-title">
              <h1>Important meta tags which should consider according to google for seo</h1>
            </div>
            <div class="single-blog-img">
              <img src="{{asset('assets/img/blog/thumbnail/meta-tags.png')}}" alt="Meta tags for seo" class="img-fluid">
            </div>
            <div class="single-blog-content">
              <h3>What are meta tags?</h3>
              <p>Meta tags are the html tags present in the head section. They are used to provide additional information of the webpage. It also provide instructions to the search engines.</p>
            </div>
            <div class="single-blog-content">
              <h3>What are meta tags in seo?</h3>
              <p>Google already declare that meta tags are not the direct ranking factor in seo. But it can impact ranking indirectly.</p>
            </div>
            <div class="single-blog-points">
              <h3>List of meta tags that can affect seo ranking:</h3>
              <div class="single-blogs-steps">
                <p><b>1. Title Tag:</b> Title tag is the first thing that appears in serps and which can decide your website will be clicked or not by searcher.<br>Title tag is not a direct ranking factor but it can impact your ranking by increasing ctr(click through rate).</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/metatags/title.PNG')}}" class="img-fluid" alt="title tag">
                </div>
                <div class="visit-link">
                  <a href="{{route('blog.tipswritetitle')}}">Tips for writing title tag</a>
                  <a href="{{route('blog.commonmistakeseotitle')}}">Common mistakes while writing title tag</a>
                </div>
              </div>
              <div class="single-blogs-steps">
                <p><b>2. Meta Description:</b> Serp is the only place where meta description can be seen along with title tag. Although It is not a ranking factor in seo but it attract the searcher and help us to increase clicks on our website.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/metatags/description.PNG')}}" class="img-fluid" alt="meta description">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>3. Meta Keywords:</b> Meta keyword tag is not the ranking factor directly or indirectly. There is no use of meta keyword tag for search engine. But we can use this tag to store our keywords for our reference.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/metatags/keywords.PNG')}}" class="img-fluid" alt="meta keyword">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>4. Meta Robots Tags:</b> Meta robots tags are not the ranking factor but it can create a positive impact of our website in the eyes of search engine. It also helps bots to use their resources and time at the right place. In this way we can help crawlers to crawl our site properly.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/metatags/robots.PNG')}}" class="img-fluid" alt="meta robots tag">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>5. Canonical Meta Tag:</b> Canonical tag is used when a webpage is link by multiple urls in a website or multiple webpages have the similar idea content. In both cases we can tell bots to crawl the right url which we want to rank on serps.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/metatags/canonical.PNG')}}" class="img-fluid" alt="canonical tag">
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
    "@id": "https://sunnyagrawal.in/blog/meta-tags-for-seo"
  },
  "headline": "Meta tags for seo ranking - The complete guide",
  "description": "In this blog I have explained how different meta tags are important in seo ranking directly or indirectly. Also I have shared some tips for meta tags",
  "image": "https://sunnyagrawal.in/assets/img/blog/thumbnail/meta-tags.png",  
  "author": {
    "@type": "Person",
    "name": "Sunny Agrawal",
    "url": "https://www.facebook.com/sunny.agarwal.395669/"
  },  
  "datePublished": "2023-04-01",
  "dateModified": "2023-04-07"
}
</script>
@endsection