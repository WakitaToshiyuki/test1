<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Users;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view ('index');
    }

    public function store(ContactRequest $request){
        $contact=$request->only(['first_name','last_name','gender','email','tel','address','building','content','detail']);
        return view('confirm',compact('contact'));
    }

    public function admin(ContactRequest $request){
        $contact=$request->only(['first_name','last_name','gender','email','tel','address','building','content','detail']);
        contact::create($contact);
        return view('thanks');
    }

}
