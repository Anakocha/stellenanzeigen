<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        $data = Job::all(); // SQL befehle eingeben

        return view('jobs', compact("data"));
    }

    public function create(){
        return view("create");
    }

    public function store(){

        $data = request()->validate([
            "title" => "required|string|min:1|max:128",
            "description" => "required|string|min:1|max:4094"
        ]);

        Job::create($data);

        

        return redirect("/jobs")->with("msg","New Job Created!");
    }

    
}