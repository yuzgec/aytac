<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\Form;
use App\Models\Page;
use App\Models\Service;
use App\Models\Attribute;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;
use CyrildeWit\EloquentViewable\Support\Period;

class HomeController extends Controller
{

    public function index(){
        $About = Page::where('id',1)->first();
        $Gallery = Page::where('id',2)->first();
        return view('frontend.index',compact('About','Gallery'));
    }

    
    public function contact(){
        return view('frontend.contact');
    }

    public function corporatedetail($slug){
        $Detay = Page::where('slug', $slug)->firstOrFail();
        views($Detay)->cooldown(60)->record();

        return view('frontend.page.index', compact('Detay'));

    }

    public function services(){
        $All = Service::where('category', 1)->get();
        return view('frontend.service.index',compact('All'));
    }

    public function service($slug){
        $Detay = Service::where('category', 1)->where('slug', $slug)->firstOrFail();
        views($Detay)->cooldown(60)->record();

        $Format = substr($Detay->getFirstMediaUrl('cover'), -3);
        return view('frontend.service.detail', compact('Detay', 'Format'));
    }

    public function form(ContactRequest $request){
        $New = new Form;
        $New->name =  $request->name;
        $New->email =  $request->email;
        $New->phone =  $request->phone;
        $New->subject =  $request->subject;
        $New->message =  $request->message;
        $New->save();

        return redirect()->route('home');
    }

}
