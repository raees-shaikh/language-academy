<?php

namespace App\Http\Controllers;

use Auth;
use App\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('course');
    }
    public function validateStoragePath()
    {
        // if (!file_exists(public_path('storage'))) {
        //     \Artisan::call('storage:link');
        // }

        $series_thumbnail_path     = storage_path('app/public/images/courses/thumbnail/');
        $series_og_path  = storage_path('app/public/images/courses/bannerImg/');
        $galleryPath  = storage_path('app/public/images/gallery/');
        $flagPath  = storage_path('app/public/images/courses/flag/');

        if (!file_exists($series_thumbnail_path)) {
            dump(mkdir($series_thumbnail_path, 0777, true));
        }
        if (!file_exists($series_og_path)) {
            dump(mkdir($series_og_path, 0777, true));
        }
        if (!file_exists($galleryPath)) {
            dump(mkdir($galleryPath, 0777, true));
        }
        if (!file_exists($flagPath)) {
            dump(mkdir($flagPath, 0777, true));
        }
    }


    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }
    public function submitCareer(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|alpha',
                'email' => 'required|email',
                'number' => 'required|numeric|digits:10',
                'subject' => 'required|string',
                'residence' => 'required|string',
                'country' => 'required|string',
                'mode' => 'required',
                'uploadCV' => 'required|mimes:pdf|max:2048',
            ],
            [
                'uploadCV.max' => 'Maximum Size 2 MB',
            ]
        );
        $career = new Career;
        $career->name = $request->name;
        $career->email = $request->email;
        $career->number = $request->number;
        $career->subject = $request->subject;
        $career->residence = $request->residence;
        $career->country = $request->country;
        $career->mode = $request->mode;

        //thumbnail image
        // $path = 'app/public/images/CV/';
        // $fileWithExt = $request->file('uploadCV');
        // $filename = time() . "" . $fileWithExt->getClientOriginalName();
        // Image::make($fileWithExt)->save(storage_path($path) . $filename, 60);
        // $career->CV = $request->file('uploadCV')->getClientOriginalName(); 
        $career->cv = $request->file('uploadCV')->store('public/cv');
        $career->save();
        $data = array(
            'email' => $request->email,
            'career' => $career->toArray(),
        );
        $data = (object) $data;

        // dd($data);
        Mail::send('emails.careers', ['data' => (array) $data->career], function ($message) use ($data) {
            $message->from($data->email, $data->career['name']);
            $message->to(env('MAIL_TO_ADDRESS'));
            $message->subject('Career request from website');
            $message->replyTo($data->email, $data->career['name']);
            $message->attach(storage_path('app/' . $data->career['cv']));
        });
        if (Mail::failures()) {
            $notification = array(
                'message' => 'Something went wrong.',
                'alert-type' => 'error'
            );
        } else {
            $notification = array(
                'message' => 'Message sent successfully!',
                'alert-type' => 'success'
            );
        }
        Storage::delete($career->cv);
        return redirect()->back()->with($notification);
    }
}
