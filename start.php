<?php
use Illuminate\Database\Capsule\Manager as Capsule;

if (!Capsule::schema()->hasTable('users')){
    Capsule::schema()->create('users', function ($table) {
        $table->increments('id');
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->string('userimage')->nullable();
        $table->string('api_key')->nullable()->unique();
        $table->rememberToken();
        $table->timestamps();
    });
}

// if (!Capsule::schema()->hasTable('projects')){
//     Capsule::schema()->create('projects', function ($table) {
//         $table->increments('id');
//         $table->string('title');
//         $table->string('description');
//         $table->boolean('status');
//         $table->string('image')->nullable();
//         $table->integer('user_id')->unsigned();
//         $table->timestamps();
//         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//     });
// }

// if (!Capsule::schema()->hasTable('tasks')){
//     Capsule::schema()->create('tasks', function ($table) {
//         $table->increments('id');
//         $table->increments('id');
//         $table->string('title');
//         $table->string('description');
//         $table->boolean('status');
//         $table->string('image')->nullable();
//         $table->integer('user_id')->unsigned();
//         $table->integer('project_id')->unsigned();
//         $table->timestamps();
//         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//         $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
//     });
// }