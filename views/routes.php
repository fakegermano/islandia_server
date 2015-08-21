<?php

/*
 * Route for displaying the home page
 */
Route::get('/', ['uses' => 'HomeController@showHome', 'as' => 'home']);
Route::get('home', ['uses' => 'HomeController@showHome']);

/*
 * Route for creating and storing posts
 */
//Route::get('post/create', ['uses' => 'ByLawController@create']);
//Route::post('post/create', ['uses' => 'ByLawController@store']);

/*
 * Route for listing posts and showing a specific post
 */
Route::get('post/{id}', ['uses' => 'ByLawController@show', 'as' => 'post.show']);
Route::get('list', ['uses' => 'ByLawController@index', 'as' => 'list']);

/*
 * Routes for administration
 */

Route::get('login', ['uses' => 'AdminController@showLogin', 'as' => 'login']);
Route::post('login', ['uses' => 'AdminController@doLogin']);
Route::get('logout', ['uses' => 'AdminController@doLogout']);
Route::get('admin', ['uses' => 'AdminController@index']);
//Route::get('admin', ['uses' => 'AdminController@index']);
Route::get('admin/block/{id}', ['uses' => 'AdminController@listRepliesForBlock']);
Route::get('admin/block/reply/{id}', ['uses' => 'AdminController@blockReply']);
Route::get('admin/block/comment/{id}', ['uses' => 'AdminController@blockComment']);
Route::get('admin/relatorio/{id}', ['uses' => 'AdminController@createReport']);
Route::get('admin/verrelatorio/{id}', ['uses' => 'AdminController@viewReport']);

/*
 * Routes for replies
 */
//Route::get('reply/verify/id/{id}', ['uses' => 'ReplyController@verify']);
//Route::post('reply/store', ['uses' => 'ReplyController@store', 'as' => 'reply.store']);
//Route::get('reply/wait', ['uses' => 'ReplyController@wait']);

/*Route::get('load', function()
    {
        $files = File::files('../data');
        foreach($files as $file)
        {
            Post::create([
                'novo' => file_get_contents($file),
                'velho' => file_get_contents($file),
                'user' => User::first()->id
            ]);
        }

    });
*/
