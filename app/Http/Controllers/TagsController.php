<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TagsController extends Controller
{
    public function listPage(){

        $tags = Tags::all();

        return view('tags.list',compact('tags'));
    }

    public function newTagPage(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('tags.new_tag',[
            'route'         => route('tags.store'),
        ]);
    }

    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $tag = Tags::query()->findOrFail($id);

        return view('tags.edit', compact('tag'));
    }

    public function store (Request $request): \Illuminate\Http\RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name'  => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Tags::create([
            'name' => $request->get('name')
        ]);

        return redirect(route('tags.list'));
    }

    public function updatePage($id)
    {
        $tag = Tags::findOrFail($id);

        return view('tags.update_page', [
            'route'         => route('tags.update', $id),
            'tag'           => $tag,
        ]);
    }

    public function update($id, Request $request): \Illuminate\Http\RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name'  => ['required', 'string'],
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = Tags::findOrFail($id);

        $product->update($request->all());

        return redirect(route('tags.list'));
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $product = Tags::findOrFail($id);

        $product->delete();

        return redirect(route('tags.list'));
    }
}
