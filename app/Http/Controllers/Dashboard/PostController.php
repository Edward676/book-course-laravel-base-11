<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response('Hello Taxi Center', 200)
        ->header('Content-Type', 'text/plain');
        return response()->json([
            'name' => 'MANUEL G',
            'state' => 'C.G.',
        ]);

        $post =Post::find(1);
        $category =Category::find(1);
        //$post = Post::find(1)->delete();
        dd($caategory->posts[1]->title);
       

        //$post = $post->update(
            //[
                //'title' => 'test title new',
                //'slug' => 'test slug',
                //'test' => 'test test',
                //'category_id' => 1,
                //'description' => 'test description',
                //'posted' => 'not',
                //'image,' => 'test image',
            //]
        //);

        //dd($post->title);

        // Post::create(
        //     [
        //         'title' => 'test title',
        //         'slug' => 'test slug',
        //         'test' => 'test test',
        //         'category_id' => 1,
        //         'description' => 'test description',
        //         'posted' => 'not',
        //         'image,' => 'test image',
        //     ]
        // );

        return'Hello Taxi Center';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
