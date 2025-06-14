<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.gallery.index', ['galleries' => $galleries]);
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg|max:2048|dimensions:max_width=2000,max_height=1500|image',
        ]);

        $gallery = new Gallery;
        $path = 'app/public/images/gallery/';
        $fileWithExt = $request->file('image');
        $filename = time() . "" . $fileWithExt->getClientOriginalName();
        list($width, $height) = getimagesize($fileWithExt);
        if ($width <= 800 && $height <= 600) {
            $gallery->name = $filename;
            Image::make($fileWithExt)->save(storage_path($path) . $filename, 60);
        } else {
            $gallery->name = $filename;

            Image::make($fileWithExt)->resize(800, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save(storage_path($path) . $filename, 60);
        }


        if ($gallery->save()) {
            return redirect('/gallery')->with(notify('image'));
        } else {
            return redirect('/gallery')->with(notify('error'));
        }
    }
    public function delete($id)
    {
        $gallery = Gallery::findOrFail($id);
        //dd(Storage::delete('public/images/gallery/').$gallery->name));
        if (Storage::delete('public/images/gallery/' . $gallery->name) && $gallery->delete()) {
            return redirect('/gallery')->with(notify('image'));
        } else {
            return redirect('/gallery')->with(notify('error'));
        }
    }
    public function displayGallery()
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->paginate(12);
        return view('gallery', ['gallery' => $gallery]);
    }
}
