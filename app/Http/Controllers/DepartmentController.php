<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class DepartmentController extends Controller
{
    public function index()
    {
        // sleep(2);
        //need to test mailpit from local
        return Inertia::render('Department');
    }
}
