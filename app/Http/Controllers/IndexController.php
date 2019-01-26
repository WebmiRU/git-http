<?php

namespace App\Http\Controllers;

use App\Services\Git;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        return view('index');
        return '<a href="'.route('branch.current', ['repository' => 'jquery']).'">Список веток репозитория</a>';
    }
}
