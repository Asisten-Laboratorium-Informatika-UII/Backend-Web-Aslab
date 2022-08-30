<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //get tags
    //     $tags = Tag::when(request()->q, function($tags) {
    //         $tags = $tags->where('name', 'like', '%'. request()->q . '%');
    //     })->latest()->paginate(5);

    //     //return inertia
    //     return Inertia::render('Apps/tags/Index', [
    //         'tags' => $tags,
    //     ]);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return Inertia::render('Apps/tags/Create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     /**
    //      * validate
    //      */
    //     $this->validate($request, [
    //         'image'         => 'required|image|mimes:jpeg,jpg,png|max:2000',
    //         'name'          => 'required|unique:tags',
    //         'description'   => 'required'
    //     ]);

    //     //upload image
    //     $image = $request->file('image');
    //     $image->storeAs('public/tags', $image->hashName());

    //     //create tag
    //     Category::create([
    //         'image'         => $image->hashName(),
    //         'name'          => $request->name,
    //         'description'   => $request->description
    //     ]);

    //     //redirect
    //     return redirect()->route('apps.tags.index');
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Category $tag)
    // {
    //     return Inertia::render('Apps/tags/Edit', [
    //         'tag' => $tag,
    //     ]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Category $tag)
    // {
    //     /**
    //      * validate
    //      */
    //     $this->validate($request, [
    //         'name'          => 'required|unique:tags,name,'.$tag->id,
    //         'description'   => 'required'
    //     ]);

    //     //check image update
    //     if ($request->file('image')) {

    //         //remove old image
    //         Storage::disk('local')->delete('public/tags/'.basename($tag->image));

    //         //upload new image
    //         $image = $request->file('image');
    //         $image->storeAs('public/tags', $image->hashName());

    //         //update tag with new image
    //         $tag->update([
    //             'image'=> $image->hashName(),
    //             'name' => $request->name,
    //             'description'   => $request->description
    //         ]);

    //     }

    //     //update tag without image
    //     $tag->update([
    //         'name'          => $request->name,
    //         'description'   => $request->description
    //     ]);

    //     //redirect
    //     return redirect()->route('apps.tags.index');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //find by ID
    //     $tag = Category::findOrFail($id);

    //     //remove image
    //     Storage::disk('local')->delete('public/tags/'.basename($tag->image));

    //     //delete
    //     $tag->delete();

    //     //redirect
    //     return redirect()->route('apps.tags.index');
    // }
}
