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
        return Git::branchList('jquery'); //'INDEX PAGE';
    }
}
