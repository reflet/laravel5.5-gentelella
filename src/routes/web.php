<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('index'); });
Route::get('/index.html', function () { return view('index'); });
Route::get('/index2.html', function () { return view('index2'); });
Route::get('/index3.html', function () { return view('index3'); });
Route::get('/calendar.html', function () { return view('calendar'); });
Route::get('/chartjs.html', function () { return view('chartjs'); });
Route::get('/chartjs2.html', function () { return view('chartjs2'); });
Route::get('/contacts.html', function () { return view('contacts'); });
Route::get('/e_commerce.html', function () { return view('e_commerce'); });
Route::get('/echarts.html', function () { return view('echarts'); });
Route::get('/fixed_footer.html', function () { return view('fixed_footer'); });
Route::get('/fixed_sidebar.html', function () { return view('fixed_sidebar'); });
Route::get('/form.html', function () { return view('form'); });
Route::get('/form_advanced.html', function () { return view('form_advanced'); });
Route::get('/form_buttons.html', function () { return view('form_buttons'); });
Route::get('/form_upload.html', function () { return view('form_upload'); });
Route::get('/form_validation.html', function () { return view('form_validation'); });
Route::get('/form_wizards.html', function () { return view('form_wizards'); });
Route::get('/general_elements.html', function () { return view('general_elements'); });
Route::get('/glyphicons.html', function () { return view('glyphicons'); });
Route::get('/icons.html', function () { return view('icons'); });
Route::get('/inbox.html', function () { return view('inbox'); });
Route::get('/invoice.html', function () { return view('invoice'); });
Route::get('/level2.html', function () { return view('level2'); });
Route::get('/login.html', function () { return view('login'); });
Route::get('/map.html', function () { return view('map'); });
Route::get('/media_gallery.html', function () { return view('media_gallery'); });
Route::get('/morisjs.html', function () { return view('morisjs'); });
Route::get('/other_charts.html', function () { return view('other_charts'); });
Route::get('/page_403.html', function () { return view('page_403'); });
Route::get('/page_404.html', function () { return view('page_404'); });
Route::get('/page_500.html', function () { return view('page_500'); });
Route::get('/plain_page.html', function () { return view('plain_page'); });
Route::get('/pricing_tables.html', function () { return view('pricing_tables'); });
Route::get('/profile.html', function () { return view('profile'); });
Route::get('/project_detail.html', function () { return view('project_detail'); });
Route::get('/projects.html', function () { return view('projects'); });
Route::get('/tables.html', function () { return view('tables'); });
Route::get('/tables_dynamic.html', function () { return view('tables_dynamic'); });
Route::get('/typography.html', function () { return view('typography'); });
Route::get('/widgets.html', function () { return view('widgets'); });
Route::get('/xx.html', function () { return view('xx'); });

