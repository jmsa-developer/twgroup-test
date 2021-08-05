<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class TaskController extends Controller
{

    public function index()
    {

        return view('tasks.index', [
            'data' => [
                // ...
            ],
        ]);
    }


}
