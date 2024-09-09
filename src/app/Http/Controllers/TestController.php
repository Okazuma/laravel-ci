<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $tests = new Test;
        $tests->name = $request->input('name');
        $tests->age = $request->input('age');
        $tests->address = $request->input('address');
        $tests->tel = $request->input('tel');
        $tests -> save();
        return redirect()->route('detail')->with('message','データが追加されました');
    }


    public function detail()
    {
        $tests = Test::all();
        return view('detail',compact('tests'));
    }
}
