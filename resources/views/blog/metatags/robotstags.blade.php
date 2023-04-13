@extends('base')

@section('title')
Meta Robots tags In seo- The fastest guide
@stop

@section('meta_desc')
In this blog I have explained all meta robots tags that are important as search engine point of view. 
@stop

@section('meta_keywords')
robots meta tag,
robot tag,
meta tag robots,
meta robots tag,
meta robot,
@stop

@section('content')
<main>
  <section class="single-blog1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <article class="single-blog-item">
            <div class="single-blog-title">
              <h1>How to use meta robots tags in our website for better crawling and indexing</h1>
            </div>
            <div class="single-blog-img">
              <img src="{{asset('assets/img/blog/thumbnail/meta-robots-tag.png')}}" alt="Meta Robots tags" class="img-fluid">
            </div>
            <div class="single-blog-content">
              <h3>What are meta robots tag?</h3>
              <p>Meta robots tag are piece of html code present in the head section of the webpage. With the help of robots tag we can inform bots, how we want to crawl and index our website.</p>
            </div>
            <div class="single-blog-content">
              <h3>Available meta robots tags</h3>
              <p>Google support below meta robots tags for better crawling and indexing:</p>
              <ul class="sbc-list">
                <li>all</li>
                <li>noindex</li>
                <li>nofollow</li>
                <li>noimageindex</li>
                <li>nosnippet</li>
                <li>noarchive</li>
                <li>notranslate</li>
                <li>max-snippet</li>
                <li>max-image-preview</li>
                <li>max-video-preview</li>
                <li>indexifembedded</li>
                <li>none</li>
                <li>unavailable_after</li>
              </ul>
            </div>
            <div class="single-blog-content">
              <h3>List of bots available</h3>
              <p>There are lots of bots but we are mentioning important bots name here:</p>
              <ul class="sbc-list">
                <li>googlebot</li>
                <li>bingbot</li>
                <li>yandexbot</li>
                <li>applebot</li>
              </ul>
            </div>
            <div class="single-blog-points">
              <h3>How to use meta robots tags:</h3>
              <div class="single-blogs-steps">
                <p><b>1. all:</b> This value is default. we don't need to mention it. This value indicates bots can crawl and index the webpage and everything in the webpage like images, videos, text etc.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/all.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>2. noindex:</b> If we don't want to index a particular webpage, In this case we can use "noindex" value. This value indicates bots cannot index that webpage. Thus the webpage will not show in the serps.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/noindex.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>3. nofollow:</b> If we don't want to crawl the links(url) present in a particular webpage, In this case we can use "nofollow" value. This value indicates that bots cannot crawl the urls present in that webpage.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/nofollow.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>4. noimageindex:</b> If we don't want to show the images in serps that are present in a particular webpage, In this case we can use "noimageindex" value. This value indicates that bots cannot index the images present in that webpage. Thus the images will not appear in serps.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/noimageindex.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>5. nosnippet:</b> If we don't want to show text snippet or video preview in serps that are based on our webpage, In this case we can use "nosnippet" value. This value indicates that bots cannot generate any text snippet or a video preview from our webpage.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/nosnippet.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>6. noarchive:</b> If we don't want to show cache version of our webpage on serps, In this case we can use "noarchive" value. This value indicates that bots cannot generate any cache link or cache version of your website.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/noarchive.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>7. notranslate:</b> If we don't want to offer translation option for the webpage by search engine, In this case we can use "notranslate" value. This value indicates that search engine will not offer any translation option when user is visiting to your website.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/notranslate.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>8. max-snippet:</b> If we want to limit the snippet text length, In this case we can use "max-snippet" value. This value also takes a parameter "character length" which should be a number.<br>For example: if we want to limit character length upto 400 characters we can use "max-snippet:400" in meta robots tag.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/max-snippet.PNG')}}" class="img-fluid">
                </div><br>
                <p>"max-snippet:0" indicates that snippet length is 0. It means bots cannot generate any snippet for your webpage.<br><br>"max-snippet:-1" indicates that snippet may have any suitable length.</p>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>9. max-image-preview:</b> If we want to manage how our webpage images should be look in serps, In this case we can use "max-image-preview" value. This value also takes a parameter called "image-size". And there are 3 different values available for this none, standard and large.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/max-image-preview.PNG')}}" class="img-fluid">
                </div><br>
                <p>"max-image-preview:none" indicates that image preview is not available on serp.<br><br>"max-image-preview:standard" indicates that preview of image will be of default size.<br><br>"max-image-preview:large" indicates that preview of image will be large , it means image will take maximum or full width of view-port.</p>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>10. max-video-preview:</b> If we want to control video length in serps that is generate from our webpage, In this case we can use "max-video-preview" value. This value also takes a parameter called "video length in seconds".<br>For example: if we want to show video upto 20 seconds. we can use "max-video-preview:20".</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/max-video-preview.PNG')}}" class="img-fluid">
                </div><br>
                <p>"max-video-preview:0" indicates video of 0 seconds, it means no video can be generated from webpage.<br><br>"max-video-preview:-1" indicates no limit of video length, the video may have of any suitable length(time).</p>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>11. indexifembedded:</b> If we don't want to show a particular webpage on serps. At the same time we also want to index that page if it is embedded in any other webpage through iframe, In this case we can use "indexifembedded" value. This value works only when used with the "noindex" value.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/indexifembedded.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>12. none:</b> If we don't want to index a particular webpage. At the same time we don't want to crawl any links available on that webpage, In this case we can use "none" value. This value indicates that bots cannot index that page nor crawl any links present on that webpage. It is the combination of two values "noindex" and "nofollow"</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/none.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>13. unavailable_after:</b> If we don't want to show a webpage on serps after a partcular date and time, In this case we can use "unavailable_after" value. This value indicates that after a particular date it will be removed from serps<br>For example: if we don't want to show a page in serps after 25 Oct 2023. In this case we can use this value.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/robotstag/unavailable_after.PNG')}}" class="img-fluid">
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
            <p><a href="https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag" target="_blank">https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag</a></p>
            <p><a href="https://developers.google.com/search/blog/2007/03/using-robots-meta-tag" target="_blank">https://developers.google.com/search/blog/2007/03/using-robots-meta-tag</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection