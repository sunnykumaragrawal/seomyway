@extends('base')

@section('title')
What is SEO and how does it works - Google guidelines
@stop

@section('meta_desc')
In this blog I have explained the seo basics and how does it work for any website. Also I have mentioned all the factors that should consider while practicing seo.
@stop

@section('meta_keywords')
what is seo,
what is seo and how it works,
@stop

@section('content')
<main>
  <section class="single-blog1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <article class="single-blog-item">
            <div class="single-blog-title">
              <h1>What is Seo and How does it works? - Google guidelines</h1>
            </div>
            <div class="single-blog-img">
              <img src="{{asset('assets/img/blog/thumbnail/how-seo-works.png')}}" alt="How does seo works?" class="img-fluid">
            </div>
            <div class="single-blog-content">
              <h3>What is Search Engine Optimization?</h3>
              <p>Seo is the technique of optimizing our website for search engine as well as for our customers. With the help of seo we can rank on top in google and can reach to our audience easily. According to GOOGLE there are lots of factors that we should consider while optimizing our website.</p>
            </div>
            <div class="single-blog-content">
              <h3>How does Seo work?</h3>
              <p>There are lots of blogs where this topic is discussed , but here I am sharing the information with the help of google blogs and guidelines:</p>
              <ul class="sbc-list">
                <li>Upload your website on server</li>
                <li>Crawling and Indexing</li>
                <li>On-site or On-page optimization</li>
                <li>Keyword research and content writing</li>
                <li>Link Building</li>
                <li>Marketing</li>
                <li>Track your website performance</li>
                <li>Analyse & Improve Your website performance</li>
              </ul>
            </div>
            <div class="single-blog-points">
              <h3>Explaination how seo work:</h3>
              <div class="single-blogs-steps">
                <p><b>1. Upload your website on server:</b> Uploading our website on server is the step that can be done before doing any seo practice.</p>
                <div class="sbs-tips">
                  <h4>Some important tips that you should consider:</h4>
                  <ul class="sbs-list">
                    <li>Purchase a domain name perfectly related your business.</li>
                    <li>Purchase a hosting(server) in that country where your audience is present.</li>
                    <li>Secure your website using SSL Certificate & https protocol.</li>
                  </ul>
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>2. Crawling and Indexing:</b> After uploading your website on server you can proceed for seo. The first step in seo is proper crawling and indexing of your website. You can manage crawling and indexing by using "Google search console" and other parameters like: sitemap, robots.txt etc.</p>
                <div class="sbs-tips">
                  <h4>Important parameters which help you in managing crawling and indexing:</h4>
                  <ul class="sbs-list">
                    <li>You can request for "Indexing" using google search console.</li>
                    <li>You can check indexed pages by using "site:" operator.</li>
                    <li>You should submit a sitemap and robots.txt file to help crawlers.</li>
                    <li>You can also use meta robots tags for managing advanced crawling and indexing.</li>
                  </ul>
                </div>
                <div class="visit-link">
                  <a href="{{route('blog.seoindex')}}" target="_blank">crawling and indexing with google</a>
                  <a href="{{route('seo.sitemap')}}" target="_blank">xml sitemap</a>
                  <a href="{{route('seo.robotstxt')}}" target="_blank">robots.txt</a>
                </div>
              </div>
              <div class="single-blogs-steps">
                <p><b>3. On-site or On-page optimization:</b> After the above step we can start real seo practice. There are lots of factors in on-page seo that may affect your website ranking. We are seperating these on the basis of google guidelines.</p>
                <div class="sbs-tips">
                  <h4>The factors that 100% affect your website ranking:</h4>
                  <ul class="sbs-list">
                    <li>Page speed of your website</li>
                    <li>Mobile friendly of your website</li>
                    <li>Core web vitals</li>
                  </ul>
                </div>
                <div class="sbs-tips">
                  <h4>The factors that can help crawlers to understand your website better and indirect ranking factors:</h4>
                  <ul class="sbs-list">
                    <li>Title tag</li>
                    <li>Meta description</li>
                    <li>Other meta tags</li>
                    <li>heading tags</li>
                    <li>Image alt attribute</li>
                    <li>Hyperlink Anchor text</li>
                    <li>Simple & content related Urls</li>
                    <li>Use proper Navigations and Breadcrumbs</li>
                    <li>Proper structure of html tags</li>
                    <li>Schema markup data</li>
                    <li>Canonical tag</li>
                  </ul>
                </div>
                <div class="visit-link">
                  <a href="{{route('blog.tipswritetitle')}}" target="_blank">Tips for writing title tag</a>
                  <a href="{{route('blog.commonmistakeseotitle')}}" target="_blank">Common mistakes in title tag</a>
                  <a href="{{route('blog.metatags')}}" target="_blank">Meta tags</a>
                  <a href="{{route('blog.metarobotstags')}}" target="_blank">Meta robots tags</a><br><br>
                  <a href="{{route('blog.canonicaltag')}}" target="_blank">Canonical tag</a>
                  <a href="{{route('blog.pagespeedtools')}}" target="_blank">Page speed test</a>
                </div>
              </div>
              <div class="single-blogs-steps">
                <p><b>4. Keyword research & content writing:</b> Content is the backbone of any website. Useful , Answerable and quality content can help us to achieve great user experience. But we cann't achieve this without keyword research. So before any content writing we should have a proper strategy for keyword research.</p>
                <div class="sbs-tips">
                  <h4>Tips for content writing in seo:</h4>
                  <ul class="sbs-list">
                    <li>Write easy to read content</li>
                    <li>Organize your topics clearly</li>
                    <li>Create fresh, unique content</li>
                    <li>Optimize content for users, not for search engine</li>
                    <li>Avoid distracting ads</li>
                  </ul>
                </div>
                <div class="visit-link">
                  <a href="{{route('keyword.researchsteps')}}">How to do keyword research</a>
                  <a href="{{route('keyword.freetools')}}">Free keyword research tools</a>
                </div>
              </div>
              <div class="single-blogs-steps">
                <p><b>5. Link Building:</b> Backlinks are one of the most important ranking factor in seo. So before creating any backlink we should have a proper backlink strategy. Quality backlinks can increase "EAT Score" and thus website will rank higher.</p>
                <div class="sbs-tips">
                  <h4>Tips you should consider while creating backlinks:</h4>
                  <ul class="sbs-list">
                    <li>Analyze your competitors backlinks</li>
                    <li>Try to get backlinks from your related community</li>
                    <li>Avoid Spammy websites and links.</li>
                  </ul>
                </div>
                <div class="visit-link">
                  <a href="{{route('backlink.howcreate')}}" target="_blank">How to create backlinks for my website?</a>
                  <a href="{{route('backlink.competitors')}}" target="_blank">Competitors backlinks</a>
                  <a href="{{route('backlink.brokenlinks')}}" target="_blank">Broken Backlink building</a>
                </div>
              </div>
              <div class="single-blogs-steps">
                <p><b>6. Marketing:</b> Getting convertable traffic on our website is very crucial for any website. Marketing is the good way of increasing traffic.</p>
                <div class="sbs-tips">
                  <h4>There are lots of ways to increase traffic:</h4>
                  <ul class="sbs-list">
                    <li>Promote your sites by running ads</li>
                    <li>Social media marketing</li>
                    <li>Inter-community talks</li>
                  </ul>
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>7. Track your website performance:</b> Once you done with first-level seo , now it is time to track your website performance. Tracking of website helps us to manage and improve performance and user experience.</p>
                <div class="sbs-tips">
                  <h4>Tools that you can use to track performance:</h4>
                  <ul class="sbs-list">
                    <li>Google Search Console</li>
                    <li>Google Analytics</li>
                    <li>Third-party tools(Ahrefs, Semrush, Moz)</li>
                  </ul>
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>8. Analyse and Improve your website performance:</b> Once you get the performance summary or report , you can make further decision to improve rankings.</p>
                <div class="sbs-tips">
                  <h4>With the help of Google Search Console and Google Analytics you can get lots of data:</h4>
                  <ul class="sbs-list">
                    <li>Impressions and clicks on your website</li>
                    <li>Keywords for which your website is showing on google</li>
                    <li>Page experience report</li>
                    <li>Mobile Usability report</li>
                    <li>External and Internal links report</li>
                  </ul>
                </div>
                <div class="sbs-tips">
                  <h4>In-built tools in Google Search Console:</h4>
                  <ul class="sbs-list">
                    <li>Url Inspection tool</li>
                    <li>Url Removal tool</li>
                  </ul>
                </div>
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
            <p><a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide" target="_blank">https://developers.google.com/search/docs/fundamentals/seo-starter-guide</a></p>
            <p><a href="https://developers.google.com/search/docs/fundamentals/get-started-developers" target="_blank">https://developers.google.com/search/docs/fundamentals/get-started-developers</a></p>
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
    "@id": "https://sunnyagrawal.in/blog/how-seo-works"
  },
  "headline": "What is SEO and how does it works - Google guidelines",
  "description": "In this blog I have explained the seo basics and how does it work for any website. Also I have mentioned all the factors that should consider while practicing seo.",
  "image": "https://sunnyagrawal.in/assets/img/blog/thumbnail/how-seo-works.png",  
  "author": {
    "@type": "Person",
    "name": "Sunny Agrawal",
    "url": "https://www.facebook.com/sunny.agarwal.395669/"
  },  
  "datePublished": "2023-04-18",
  "dateModified": "2023-04-18"
}
</script>
@endsection