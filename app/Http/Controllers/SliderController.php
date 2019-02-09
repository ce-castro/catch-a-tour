<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use File;
//use DB;

class SliderController extends AdminController
{
    public function index(){
        $sliders = Slider::orderBy('order', 'asc')->get();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function create(){
        return view('admin.sliders.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'order' => 'required',
        ]);

        $input = $request->except(['status', 'image']);

        if ($request->hasFile('image')) {
            $find = array(" ");
            $replace = array("_");

            $imageName = date('YmdHis').$request->image->getClientOriginalName();
            $input['image'] = str_replace($find,$replace,$imageName);
            $input['size'] = $request->image->getClientSize();
            $request->image->move(public_path('uploads'), str_replace($find,$replace,$imageName));
        }

        if($request->status == 1){
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }

        $data = Slider::create($input);

        session()->flash('message_green', 'Image successfully added!');
        return redirect(route('sliders.index'));
        //return redirect(route('tours.edit', [$data->id, 'tab_1'] ));
    }

    public function edit(Slider $slider){
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update($id, Request $request){

        $slider = Slider::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'order' => 'required',
        ]);

        $input = $request->except(['status', 'image']);

        if ($request->hasFile('image')) {
            $find = array(" ");
            $replace = array("_");

            $imageName = date('YmdHis').$request->image->getClientOriginalName();
            $request->image->move(public_path('uploads'), str_replace($find,$replace,$imageName));
            $input['image'] = str_replace($find,$replace,$imageName);
            $input['size'] = $request->image->getClientSize();
        }

        if($request->status == 1){
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }

        $slider->update($input);

        session()->flash('message_green', 'Image successfully updated!');
        return redirect(route('sliders.index'));

    }

    public function destroy($id){
        $slider = Slider::findOrFail($id);
        //File::delete(public_path('uploads/').$slider->image);
        $slider->delete();

        session()->flash('message_red', 'Image Deleted');
        return redirect(route('sliders.index'));
    }
}
