@extends('base')

@section('title')
Seo blogs to rank up in google @stop

@section('meta_desc')
You can get the most important tips & tricks for seo here. We will always share our experience to help you. @stop

@section('meta_keywords')
best seo blogs,
top seo blogs,
seo blogs,
@stop

@section('content')
<main class="section-bg">
  <section class="allblogs">
  	<div class="container">
      <div class="row">
        <div class="col-md-12 d-flex">
          <ul id="allblogs-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-basic">Seo Basics</li>
            <li data-filter=".filter-keyword">Keyword Research</li>
            <li data-filter=".filter-backlink">Backlinks</li>
            <li data-filter=".filter-crawling">Crawling and Indexing</li>
            <li data-filter=".filter-title">Title Tag & Meta tags</li>
            <li data-filter=".filter-ranking">Ranking Factors</li>
            <li data-filter=".filter-seotools">Seo Tools</li>
            <li data-filter=".filter-searchoperators">Search Operators</li>
          </ul>
        </div>
      </div>
  		<div class="row allblogs-container">
  			<div class="col-md-6 allblogs-item filter-basic">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('seo.intro')}}"><img src="{{asset('assets/img/blog/thumbnail/how-seo-works.png')}}" alt="How does seo works?" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('seo.intro')}}">What is SEO and How does it works?</a></h2>
            <div class="allblogs-btn"><a href="{{route('seo.intro')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-backlink">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('backlink.howcreate')}}"><img src="{{asset('assets/img/blog/thumbnail/how-to-create-backlinks.png')}}" alt="How to create backlinks for my website" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('backlink.howcreate')}}">How to create backlinks for my website</a></h2>
            <div class="allblogs-btn"><a href="{{route('backlink.howcreate')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-keyword">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('keyword.freetools')}}"><img src="{{asset('assets/img/blog/thumbnail/keyword-research-tools.png')}}" alt="keyword research tools" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('keyword.freetools')}}">Free tools for keyword research In Seo</a></h2>
            <div class="allblogs-btn"><a href="{{route('keyword.freetools')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-keyword">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('keyword.researchsteps')}}"><img src="{{asset('assets/img/blog/thumbnail/hoe-to-do-keyword-research.png')}}" alt="How to do keyword research in seo" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('keyword.researchsteps')}}">How to do keyword research In Seo</a></h2>
            <div class="allblogs-btn"><a href="{{route('keyword.researchsteps')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-title">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.tipswritetitle')}}"><img src="{{asset('assets/img/blog/thumbnail/tips-for-writing-title-tag.png')}}" alt="tips for writing title tag" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('blog.tipswritetitle')}}">Tips for writing good title tag</a></h2>
            <div class="allblogs-btn"><a href="{{route('blog.tipswritetitle')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-seotools">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.pagespeedtools')}}"><img src="{{asset('assets/img/blog/thumbnail/test-website-speed.png')}}" alt="Test your website speed with free tools" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('blog.pagespeedtools')}}">Free tools for testing website speed</a></h2>
            <div class="allblogs-btn"><a href="{{route('blog.pagespeedtools')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-title">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.commonmistakeseotitle')}}"><img src="{{asset('assets/img/blog/thumbnail/common-mistakes-in-title-tag.png')}}" alt="Common mistakes in title tag" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('blog.commonmistakeseotitle')}}">Common Mistake while writing seo title tag</a></h2>
            <div class="allblogs-btn"><a href="{{route('blog.commonmistakeseotitle')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-title">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.metatags')}}"><img src="{{asset('assets/img/blog/thumbnail/meta-tags.png')}}" alt="Meta tags for seo" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('blog.metatags')}}">What are meta tags in seo</a></h2>
            <div class="allblogs-btn"><a href="{{route('blog.metatags')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-title">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.metarobotstags')}}"><img src="{{asset('assets/img/blog/thumbnail/meta-robots-tag.png')}}" alt="Meta Robots tags" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('blog.metarobotstags')}}">What are meta robots tags in seo</a></h2>
            <div class="allblogs-btn"><a href="{{route('blog.metarobotstags')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-keyword">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('tool.googlekeywordplanner')}}"><img src="{{asset('assets/img/blog/thumbnail/google-keyword-planner.png')}}" alt="How to use google keyword planner" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('tool.googlekeywordplanner')}}">How to use Google Keyword Planner</a></h2>
            <div class="allblogs-btn"><a href="{{route('tool.googlekeywordplanner')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-keyword">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('tool.keywordtoolio')}}"><img src="{{asset('assets/img/blog/thumbnail/keyword-tool.io.png')}}" alt="How to use keyword tool.io" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('tool.keywordtoolio')}}">How to use Keyword tool.io</a></h2>
            <div class="allblogs-btn"><a href="{{route('tool.keywordtoolio')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-keyword">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('tool.keywordeverywhere')}}"><img src="{{asset('assets/img/blog/thumbnail/keywod-everywhere.png')}}" alt="How to use keyword Everywhere" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('tool.keywordeverywhere')}}">How to use Keyword Everywhere</a></h2>
            <div class="allblogs-btn"><a href="{{route('tool.keywordeverywhere')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-keyword">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('tool.keywordsheeter')}}"><img src="{{asset('assets/img/blog/thumbnail/keyword-sheeter.png')}}" alt="How to use keyword Sheeter" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('tool.keywordsheeter')}}">How to use Keyword Sheeter</a></h2>
            <div class="allblogs-btn"><a href="{{route('tool.keywordsheeter')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-keyword">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('tool.keywordsurfer')}}"><img src="{{asset('assets/img/blog/thumbnail/keyword-surfer.png')}}" alt="How to use keyword Surfer" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('tool.keywordsurfer')}}">How to use Keyword Surfer</a></h2>
            <div class="allblogs-btn"><a href="{{route('tool.keywordsurfer')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-backlink">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('backlink.competitors')}}"><img src="{{asset('assets/img/blog/thumbnail/How-to-check-competitors-backlinks.png')}}" alt="How to check competitors backlinks" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('backlink.competitors')}}">How to check competitors backlinks</a></h2>
            <div class="allblogs-btn"><a href="{{route('backlink.competitors')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-ranking">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.seorankingfactors')}}"><img src="{{asset('assets/img/blog/thumbnail/seo-ranking-factors.png')}}" alt="seo ranking factors" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('blog.seorankingfactors')}}">Most important seo ranking factors</a></h2>
            <div class="allblogs-btn"><a href="{{route('blog.seorankingfactors')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-searchoperators">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.searchoperators')}}"><img src="{{asset('assets/img/blog/thumbnail/google-search-operators.png')}}" alt="How to use google search operators" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('blog.searchoperators')}}">How search operators are useful for us</a></h2>
            <div class="allblogs-btn"><a href="{{route('blog.searchoperators')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-crawling">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.seoindex')}}"><img src="{{asset('assets/img/blog/thumbnail/indexing-with-google.png')}}" alt="google crawling and google indexing" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('blog.seoindex')}}">How search operators are useful for us</a></h2>
            <div class="allblogs-btn"><a href="{{route('blog.seoindex')}}">Read More</a></div>
          </article>
        </div>
        <div class="col-md-6 allblogs-item filter-basic">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('seo.sitemap')}}"><img src="{{asset('assets/img/blog/thumbnail/generate-submit-xml-sitemap.png')}}" alt="How to generate and submit xml sitemap" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('seo.sitemap')}}">How to generate and submit xml sitemap</a></h2>
            <div class="allblogs-btn"><a href="{{route('seo.sitemap')}}">Read More</a></div>
          </article>
        </div>
      </div>
  	</div>
  </section>
</main>
@endsection