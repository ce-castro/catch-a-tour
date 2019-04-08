<?php

namespace App\Http\Controllers;

use App\Review;
use App\Country;
use Illuminate\Http\Request;

class ReviewController extends Controller {

    public function index() {
        $reviews = Review::orderBy('name', 'asc')->get();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create(){
        $countries = Country::orderBy('name', 'asc')->get();
        return view('admin.reviews.create', compact('countries'));
    }


    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'country' => 'required',
            'stars' => 'required',
            'review' => 'required'
        ]);

        $input = $request->except(['status', 'image']);

        if ($request->hasFile('image')) {
            $imageName = urlencode($request->image->getClientOriginalName());
            $input['image'] = $imageName;
            $request->file('image')->storeAs(
                'uploads', $imageName, 'public'
            );
        }

        if($request->status == 1){
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }

        Review::create($input);

        session()->flash('message_green', 'Review successfully added!');
        return redirect(route('reviews.index'));
    }

    public function edit(Review $review) {
        $countries = Country::orderBy('name', 'asc')->get();
        return view('admin.reviews.edit', compact('review', 'countries'));
    }

    public function update($id, Request $request) {
        $review = Review::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'country' => 'required',
            'stars' => 'required',
            'review' => 'required'
        ]);

        $input = $request->except(['status', 'image']);

        if ($request->hasFile('image')) {
            $imageName = urlencode($request->image->getClientOriginalName());
            $input['image'] = $imageName;
            $request->file('image')->storeAs(
                'uploads', $imageName, 'public'
            );
        }

        if($request->status == 1){
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }

        $review->update($input);

        session()->flash('message_green', 'Review successfully updated!');
        return redirect(route('reviews.index'));
    }


    public function destroy($id) {
        $review = Page::findOrFail($id);
        $review->delete();
        File::delete(public_path('uploads/').$review->image);

        session()->flash('message_red', 'Review Deleted');
        return redirect(route('reviews.index'));
    }
}
