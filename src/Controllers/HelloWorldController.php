<?php

namespace Darshan\Crud\Controllers;

use Illuminate\Http\Request;
use Darshan\Crud\HelloWorld;

class HelloWorldController
{
    public function __invoke(HelloWorld $helloWorld)
    {
        return $helloWorld->helloWorld();
    }
}
