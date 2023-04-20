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

Route::get('/blog', function () {
    return view('blog.blog');
})->name('allblogs');

// Seo basics
Route::get('/blog/how-seo-works', function () {
    return view('blog.basic.intro');
})->name('seo.intro');

//Backlink blogs
Route::get('/blog/how-to-create-backlinks', function () {
    return view('blog.backlink.howtocreate');
})->name('backlink.howcreate');

Route::get('/blog/competitors-backlinks-analysis', function () {
    return view('blog.backlink.competitors');
})->name('backlink.competitors');

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
    return view('blog.onpage.tips-write-title');
})->name('blog.tipswritetitle');

Route::get('/blog/common-mistakes-in-title-tag', function () {
    return view('blog.onpage.common-mistake-while-writing-title-tag-seo');
})->name('blog.commonmistakeseotitle');

Route::get('/blog/meta-tags-for-seo', function () {
    return view('blog.metatags.metatags');
})->name('blog.metatags');

Route::get('/blog/meta-robots-tag', function () {
    return view('blog.metatags.robotstags');
})->name('blog.metarobotstags');

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

// Search operators blogs
Route::get('/blog/google-search-operators', function () {
    return view('blog.basic.searchoperators');
})->name('blog.searchoperators');