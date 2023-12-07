<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.imageUpload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')) {
            $image = Image::make($request->file('image'));

            /**
             * Main Image Upload on Folder Code
             */
            $imageName = time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('images/');
            $image->save($destinationPath.$imageName);

            /**
             * Generate Thumbnail Image Upload on Folder Code
             */
            $destinationPathThumbnail = public_path('images/thumbnail/');
            $image->resize(250,300);
            $image->save($destinationPathThumbnail.$imageName);

            $destinationPathDetail = public_path('images/detail/');
            $image->resize(1000,1100);
            $image->save($destinationPathDetail.$imageName);

            $destinationPathSearch = public_path('images/search/');
            $image->resize(50,50);
            $image->save($destinationPathSearch.$imageName);

            /**
             * Write Code for Image Upload Here,
             *
             * $upload = new Images();
             * $upload->file = $imageName;
             * $upload->save();
            */

            return back()
                ->with('success','Image Upload successful')
                ->with('imageName',$imageName);
        }

        return back();
    }
}
