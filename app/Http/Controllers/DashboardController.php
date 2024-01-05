<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function AdminDashboard() {
        return view('dashboard.admin.admin-dashboard');
    }

    public function SupervisorDashboard() {
        return view('dashboard.supervisor.supervisor-dashboard');
    }
}
