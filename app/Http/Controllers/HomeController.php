<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        /*->get();//collection (Array)
        ->all();//collection (Array)
        ->find();//single object or null
        ->first();//first object or null*/
        $homeSliders = Slider::where('active','1')->orderBy('id','desc')->take(4)->get();
        $homeServices = Service::where('active','1')->orderBy('id','desc')->take(3)->get();
        
        return view('home.index',compact('homeSliders','homeServices'));
    }
    public function services()
    {
        $services = Service::where('active','1')->orderBy('id','desc')->paginate(12);
        return view('home.services',compact('services'));
    }

    
}
