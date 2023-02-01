<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dasboardAdmin()
    {
        return view('pages.admin.dashboard.index');
    }
}
