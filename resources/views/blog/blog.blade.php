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
            <li data-filter=".filter-keyword">Keyword Research</li>
            <li data-filter=".filter-title">Title Tag & Meta tags</li>
            <li data-filter=".filter-ranking">Ranking Factors</li>
          </ul>
        </div>
      </div>
  		<div class="row allblogs-container">
  			<div class="col-md-6 allblogs-item filter-ranking">
          <article class="allblogs-block">
            <div class="allblogs-img"><a href="{{route('blog.seorankingfactors')}}"><img src="{{asset('assets/img/blog/thumbnail/seo-ranking-factors.png')}}" alt="seo ranking factors" class="img-fluid"></a></div>
            <h2 class="allblogs-title"><a href="{{route('blog.seorankingfactors')}}">Most important seo ranking factors</a></h2>
            <div class="allblogs-btn"><a href="{{route('blog.seorankingfactors')}}">Read More</a></div>
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
  		</div>
  	</div>
  </section>
</main>
@endsection