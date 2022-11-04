<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wish;

class WishController extends Controller
{
    public function wish(){
        return view("wish");
    }

    public function store(Request $request){
        $this->validate($request, [
            "name" => "required",
            "email" => "email|required",
            "message" => "required"
        ]);

        Wish::create([
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message
        ]);
        return redirect()->back()->with("success", "Wish Sent Successfully");
    }


    public function messages(){
        $data = Wish::all();
        return view("messages", compact("data"));
    }
}
