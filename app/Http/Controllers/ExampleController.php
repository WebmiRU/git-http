<?php

namespace App\Http\Controllers;

use App\Services\Git;

class ExampleController extends Controller
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
        dd(Git::branchCurrent('jquery'));
    }
}
