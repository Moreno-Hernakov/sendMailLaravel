<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formSendMail as form;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;

class FormSendMailController extends Controller
{
    public function index(){
        return view('sendMail');
    }
    
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required|min:5',
        ]);

        // form::create($data);
        // return $request->only('email', 'name', 'message');
        Mail::to("tpihindo5@gmail.com")->send(new sendMail($request->only('email', 'name', 'message')));
        
        return redirect()->back();
    }


}
