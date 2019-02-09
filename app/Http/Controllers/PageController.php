<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use File;

class PageController extends AdminController
{

    public function index(){
        $pages = Page::orderBy('title', 'asc')->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function create(){
        return view('admin.pages.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required',
        ]);

        $input = $request->except(['status', 'image_og']);

        if ($request->hasFile('image_og')) {
            $find = array(" ");
            $replace = array("_");

            $imageName = date('YmdHis').$request->image_og->getClientOriginalName();
            $input['image_og'] = str_replace($find, $replace, $imageName);
            $request->image_og->move(public_path('uploads'), str_replace($find, $replace, $imageName));
        }

        if($request->status == 1){
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }

        Page::create($input);

        session()->flash('message_green', 'Page successfully added!');
        return redirect(route('pages.index'));
    }

    public function edit(Page $page){
        return view('admin.pages.edit', compact('page'));
    }

    public function update($id, Request $request){
        $page = Page::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'url' => 'required',
        ]);

        $input = $request->except(['status', 'image_og']);

        if ($request->hasFile('image_og')) {
            $find = array(" ");
            $replace = array("_");

            $imageName = date('YmdHis').$request->image_og->getClientOriginalName();
            $request->image_og->move(public_path('uploads'), str_replace($find, $replace, $imageName));
            $input['image_og'] = str_replace($find, $replace, $imageName);
        }

        if($request->status == 1){
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }

        $page->update($input);

        session()->flash('message_green', 'Page successfully updated!');
        return redirect(route('pages.index'));
    }

    public function destroy($id){
        $page = Page::findOrFail($id);
        $page->delete();
        //File::delete(public_path('uploads/').$page->image);

        session()->flash('message_red', 'Page Deleted');
        return redirect(route('pages.index'));
    }

}