<?php

namespace App\Http\Controllers;
use App\Testimonial;
use Illuminate\Http\Request;
//use App\Helpers;

class TestimonialsController extends Controller
{
    public function index(){
        $testimonials = Testimonial::orderBy('created_at','desc')->paginate(10);
        return view('admin.Testimonial.index',['testimonials'=>$testimonials]);
    }
    public function create(){
        return view('admin.Testimonial.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=> 'required|string',
            'comment'=> 'required|string',
        ]);  

        $testimonials = new Testimonial;
        $testimonials->name = $request->get('name');
        $testimonials->comment = $request->get('comment'); 
        if($testimonials->save()){
            return redirect('/testimonials')->with(notify('testimonial'));
        }else{
            return redirect('/testimonials')->with(notify('error'));
        }

    }
    public function delete($id){
        $testimonial = Testimonial::findOrFail($id);
        if($testimonial->delete()){
            return redirect('/testimonials')->with(notify('testimonial'));
        }
        else
        {
            return redirect('/testimonials')->with(notify('error'));
        }
    }
}
