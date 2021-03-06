<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $posts = App\Models\Post::all();
    return view('posts', compact('posts'));
});
Route::get('{anyExceptRoot}', function() {
    return redirect('/');
 })->where('anyExceptRoot', '[^/]*');


// Route::get('/products', function () {
//     // echo json_encode($products, JSON_HEX_TAG);

//     $products = App\Models\Product::all();
//     return view('products', compact('products'));
// });

Route::get('/post/{slug}', function($slug){
	$post = App\Models\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
