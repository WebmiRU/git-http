<?php

namespace App\Http\Controllers;

use Faker\Provider\DateTime;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    public function show(){
        return DateTime::dateTimeInInterval('-1year', '+3 day', '-3');
    }
}
