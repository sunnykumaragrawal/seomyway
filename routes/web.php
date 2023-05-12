<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/web-designing-company', function () {
    return view('web-designing');
})->name('webdesignMain');

Route::get('/web-developer-services', function () {
    return view('web-developer');
})->name('webdevelopmentMain');

Route::get('/seo-services', function () {
    return view('seo');
})->name('seoMain');

Route::get('/blog', function () {
    return view('blog.blog');
})->name('allblogs');

// Seo basics
Route::get('/blog/how-seo-works', function () {
    return view('blog.basic.intro');
})->name('seo.intro');

Route::get('/blog/xml-sitemap-generate-and-submit', function () {
    return view('blog.basic.sitemap');
})->name('seo.sitemap');

Route::get('/blog/create-and-submit-robots.txt', function () {
    return view('blog.basic.robotstxt');
})->name('seo.robotstxt');

//Backlink blogs
Route::get('/blog/how-to-create-backlinks', function () {
    return view('blog.backlink.howtocreate');
})->name('backlink.howcreate');

Route::get('/blog/competitors-backlinks-analysis', function () {
    return view('blog.backlink.competitors');
})->name('backlink.competitors');

Route::get('/blog/broken-link-building', function () {
    return view('blog.backlink.brokenlink');
})->name('backlink.brokenlinks');

// Keyword blogs
Route::get('/blog/free-keyword-research-tools', function () {
    return view('blog.keyword.freetools');
})->name('keyword.freetools');

Route::get('/blog/how-to-use-google-keyword-planner', function () {
    return view('blog.keyword.tool.googlekeywordplanner');
})->name('tool.googlekeywordplanner');

Route::get('/blog/how-to-use-keyword-tool.io', function () {
    return view('blog.keyword.tool.keyword-tool-io');
})->name('tool.keywordtoolio');

Route::get('/blog/how-to-use-keyword-everywhere', function () {
    return view('blog.keyword.tool.keywordeverywhere');
})->name('tool.keywordeverywhere');

Route::get('/blog/how-to-use-keyword-sheeter', function () {
    return view('blog.keyword.tool.keywordsheeter');
})->name('tool.keywordsheeter');

Route::get('/blog/how-to-use-keyword-surfer', function () {
    return view('blog.keyword.tool.keywordsurfer');
})->name('tool.keywordsurfer');

Route::get('/blog/how-to-do-keyword-research', function () {
    return view('blog.keyword.how-to-do-keyword-research');
})->name('keyword.researchsteps');

// Title tag and meta tags blogs
Route::get('/blog/tips-for-writing-title-tag', function () {
    return view('blog.metatags.tips-write-title');
})->name('blog.tipswritetitle');

Route::get('/blog/common-mistakes-in-title-tag', function () {
    return view('blog.metatags.common-mistake-while-writing-title-tag-seo');
})->name('blog.commonmistakeseotitle');

Route::get('/blog/meta-tags-for-seo', function () {
    return view('blog.metatags.metatags');
})->name('blog.metatags');

Route::get('/blog/meta-robots-tag', function () {
    return view('blog.metatags.robotstags');
})->name('blog.metarobotstags');

Route::get('/blog/canonical-tag-in-seo', function () {
    return view('blog.metatags.canonical');
})->name('blog.canonicaltag');

// Ranking factors blogs
Route::get('/blog/seo-ranking-factors', function () {
    return view('blog.basic.seorankingfactors');
})->name('blog.seorankingfactors');

// Crawling and indexing
Route::get('/blog/indexing-with-google', function () {
    return view('blog.basic.googleindex');
})->name('blog.seoindex');

// Seo tools blogs
Route::get('/blog/web-page-speed-test', function () {
    return view('blog.onpage.pagespeedtools');
})->name('blog.pagespeedtools');

Route::get('/blog/website-rank-checker-tools', function () {
    return view('blog.tools.websiterank');
})->name('blog.websiteranking');

// Search operators blogs
Route::get('/blog/google-search-operators', function () {
    return view('blog.basic.searchoperators');
})->name('blog.searchoperators');

// templates

Route::get('/templates/packers-movers', function () {
    return view('packers.demos');
});

Route::get('/templates/packers-movers/demo1', function () {
    return view('packers.demo1');
})->name('packer.demo1');

Route::get('/templates/packers-movers/demo2', function () {
    return view('packers.demo2');
})->name('packer.demo2');

Route::get('/templates/packers-movers/demo3', function () {
    return view('packers.demo3');
})->name('packer.demo3');

Route::get('/templates/packers-movers/demo4', function () {
    return view('packers.demo4');
})->name('packer.demo4');