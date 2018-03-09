<?php

Route::get('', 'HomesController@index')->name('admins.index');

// 博客后台
Route::resource('posts', 'PostsController', [
    'names'  => 'admins.posts',
    'except' => ['show'],
]);

// 技能分类管理
Route::resource('skills', 'SkillsController', [
    'names'  => 'admins.skills',
    'except' => ['show'],
]);

// 评论管理
Route::resource('comments', 'CommentsController', [
    'names'  => 'admins.comments',
    'except' => ['show', 'create', 'store'],
]);
