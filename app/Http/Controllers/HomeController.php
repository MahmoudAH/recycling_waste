<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Mail;
use Session;
use     App\Contact;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    
    public function makeorder()
    {
        return view('MAKE_ORDER');
    }
    
    public function points()
    {
        return view('POINTS');
    }

    public function getcontactus()
    {
        return view('CONTACT_US');
    }

    public function about()
    {
        return view('ABOUT');
    }

    public function profile()
    {
        return view('userprofile');
    }
    
    public function admin()
    {
        return view('admin');
    }
}
