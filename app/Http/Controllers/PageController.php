<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view ('index');
    }

    public function admin() {
        return view ('admin');
    }

    public function advertise() {
        return view ('advertise');
    }

    public function privacy() {
        return view ('privacy');
    }

    public function tos() {
        return view ('tos');
    }

     public function faq() {
        return view ('faq');
    }

    public function help() {
        return view ('help');
    }

    public function proofs() {
        return view ('proofs');
    }

    public function contact() {
        return view ('contact');
    }
}
