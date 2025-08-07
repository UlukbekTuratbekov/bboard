<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index() {
        $bbs = Bb::latest()->get();
        return view('index',compact('bbs'));
    }

    public function detail(Bb $bb) {
        return view('detail',compact('bb'));

    }
}
