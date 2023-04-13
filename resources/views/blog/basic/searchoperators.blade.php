@extends('base')

@section('title')
Google search operators - Refine your search
@stop

@section('meta_desc')
Google Search operators are the tricks to refine your search. Google provides lots of search operators which are very helpful for filtering results. Let's learn with me.
@stop

@section('meta_keywords')
google search operators,
refine your search,
@stop

@section('content')
<main>
  <section class="single-blog1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <article class="single-blog-item">
            <div class="single-blog-title">
              <h1>How to use google search operators - Refine your search</h1>
            </div>
            <div class="single-blog-img">
              <img src="{{asset('assets/img/blog/thumbnail/google-search-operators.png')}}" alt="How to use google search operators" class="img-fluid">
            </div>
            <div class="single-blog-content">
              <h3>What are google search operators?</h3>
              <p>Google search operators are the terms to filter your results. Google support lots of search operators which we can use to refine our searches.</p>
            </div>
            <div class="single-blog-content">
              <h3>What are the most important google search operators?</h3>
              <p>There are lots of search operators which google support. we are mentioning here the top suggested and useful operators for seo research:</p>
              <ul class="sbc-list">
                <li>cache:google.com</li>
                <li>site:google.com</li>
                <li>related:google.com</li>
                <li>link:google.com</li>
              </ul>
            </div>
            <div class="single-blog-points">
              <h3>Explaination how these operators work:</h3>
              <div class="single-blogs-steps">
                <p><b>1. cache:</b> If you want to see last cached version of a webpage. You can use "cache:" operator before your webpage url to get the result.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/operators/gso/cache.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"><a href="http://webcache.googleusercontent.com/search?q=cache%3Aagrawalsoftwarehouse.com&rlz=1C1GCEA_enRO972RO972&oq=cac&aqs=chrome.0.69i59j69i57j0i433i512j46i433i512j0i433i512j69i60l3.3073j0j4&sourceid=chrome&ie=UTF-8" target="_blank">See cache version</a></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>2. site:</b> If you want to check how many pages are indexed and present on google of a website. You can use "site:" operator to get all the indexed webpages of a domain.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/operators/gso/site.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"><a href="https://www.google.com/search?q=site%3Ahttps%3A%2F%2Fsunnyagrawal.in%2F&rlz=1C1GCEA_enRO972RO972&sxsrf=APwXEdewCaPA2WXDR_h6J2CKPM2f858coA%3A1681400003102&ei=wyA4ZMvlBe-hseMPtqGzoAI&ved=0ahUKEwiL06OPl6f-AhXvUGwGHbbQDCQQ4dUDCA8&uact=5&oq=site%3Ahttps%3A%2F%2Fsunnyagrawal.in%2F&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzoHCCMQsAMQJzoKCAAQRxDWBBCwAzoKCAAQigUQsAMQQzoNCAAQ5AIQ1gQQsAMYAToPCC4QigUQyAMQsAMQQxgCOgQIIxAnOgsIABCABBCxAxCDAToRCC4QgwEQxwEQsQMQ0QMQgAQ6CwguEIAEEMcBENEDOgcIABCKBRBDOgoIABCKBRCxAxBDOggILhCABBCxAzoLCC4QigUQsQMQgwE6CAgAEIAEELEDOgsILhCABBCxAxCDAToTCC4QgwEQxwEQsQMQ0QMQigUQQzoICC4QsQMQgAQ6DQguEIoFEMcBENEDEEM6EAguEIoFELEDEMcBENEDEEM6BQgAEIAEOgwIABCKBRCxAxAKEEM6BAgAEANKBAhBGABQ5QVYgRtgyCBoAXABeACAAdICiAHgCJIBBzAuNS4wLjGYAQCgAQGgAQLIARPAAQHaAQYIARABGAnaAQYIAhABGAg&sclient=gws-wiz-serp" target="_blank">See site results</a></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>3. related:</b> If you want to get the similar category websites for a site. You can use "related:" operator before a site name and you will get the results.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/operators/gso/related.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"><a href="https://www.google.com/search?q=related%3Agoogle.com&rlz=1C1GCEA_enRO972RO972&sxsrf=APwXEdfdK6uIO9up5sCmVU13DfKLGXsYVg%3A1681400425040&ei=aSI4ZP_7AajPseMP9LmNiAU&ved=0ahUKEwi_1LzYmKf-AhWoZ2wGHfRcA1EQ4dUDCA8&uact=5&oq=related%3Agoogle.com&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzoICAAQigUQkQI6DQgAEIoFELEDEIMBEEM6BQgAEIAEOggIABCABBCxAzoICAAQigUQsQNKBAhBGAFQjAdYszhggD5oAXAAeACAAYACiAG3IpIBBjAuMjMuNJgBAKABAcABAQ&sclient=gws-wiz-serp" target="_blank">See related websites</a></div>
              </div>
              <div class="single-blogs-steps">
                <p><b>4. link:</b> If you want to check a particular webpage is link to which urls or sites. You can use "link:" operator to check the linked urls to a webpage.</p>
                <div class="sbs-img">
                  <img src="{{asset('assets/img/blog/operators/gso/link.PNG')}}" class="img-fluid">
                </div>
                <div class="visit-link"><a href="https://www.google.com/search?q=link%3Agoogle.com&rlz=1C1GCEA_enRO972RO972&sxsrf=APwXEdc2UqBYVZvDDz0HlLzVuFeJv2SNeg%3A1681401034666&ei=yiQ4ZPWPKKiPseMPkKiTwAI&ved=0ahUKEwj1nJX7mqf-AhWoR2wGHRDUBCgQ4dUDCA8&uact=5&oq=link%3Agoogle.com&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzoECCMQJzoICAAQigUQkQI6FAguEIoFELEDEIMBEMcBENEDEJECOgsIABCKBRCxAxCDAToLCC4QgAQQsQMQgwE6CwgAEIAEELEDEIMBOg4ILhDHARCxAxDRAxCABDoHCAAQigUQQzoOCAAQigUQsQMQgwEQkQI6CggAEIoFELEDEAo6DgguEIAEELEDEMcBENEDOg4IABCABBCxAxCDARDJAzoNCAAQigUQsQMQgwEQQzoICAAQgAQQsQNKBAhBGAFQ8QhYujVgsTtoAXAAeACAAdUDiAGrHZIBCjAuMi4xMS4xLjGYAQCgAQHAAQE&sclient=gws-wiz-serp" target="_blank">See linked pages</a></div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection