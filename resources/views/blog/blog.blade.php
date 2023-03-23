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
<main>
  <section id="blog-main" class="blog-main">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 entries">
          <article class="entry entry-single">
            <div class="entry-img">
              <a href="{{route('blog.seorankingfactors')}}"><img src="{{asset('assets/img/blog/thumbnail/seo-ranking-factors.png')}}" alt="seo ranking factors" class="img-fluid"></a>
            </div>
            <h2 class="entry-title"><a href="{{route('blog.seorankingfactors')}}">Most important seo ranking factors</a></h2>
          </article>
        </div>
              <div class="col-md-6 entries">
                <article class="entry entry-single">
                  <div class="entry-img">
                    <a href="{{route('keyword.freetools')}}"><img src="{{asset('assets/img/blog/thumbnail/keyword-research-tools.png')}}" alt="keyword research tools" class="img-fluid"></a>
                  </div>
                  <h2 class="entry-title"><a href="{{route('keyword.freetools')}}">Free tools for keyword research In Seo</a></h2>
                </article>
              </div>
        <div class="col-md-6 entries">
          <article class="entry entry-single">
            <div class="entry-img">
              <a href="{{route('blog.tipswritetitle')}}"><img src="{{asset('assets/img/blog/thumbnail/tips-for-writing-title-tag.png')}}" alt="tips for writing title tag" class="img-fluid"></a>
            </div>
            <h2 class="entry-title"><a href="{{route('blog.tipswritetitle')}}">Tips for writing good title tag</a></h2>
          </article>
        </div>
        <div class="col-md-6 entries">
          <article class="entry entry-single">
            <div class="entry-img">
              <a href="{{route('blog.commonmistakeseotitle')}}"><img src="{{asset('assets/img/blog/thumbnail/common-mistakes-in-title-tag.png')}}" alt="Common mistakes in title tag" class="img-fluid"></a>
            </div>
            <h2 class="entry-title"><a href="{{route('blog.commonmistakeseotitle')}}">Common Mistake while writing seo title tag</a></h2>
          </article>
        </div>
  		</div>
  	</div>
  </section>
</main>
@endsection