<?php

namespace App\Http\Controllers;

use App\Services\Git;
use Illuminate\Http\Request;

class BranchController extends Controller
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

    public function current(Request $request) {
        $repository = $request->get('repository', null);
        return Git::branchCurrent($repository, true);
    }
}
