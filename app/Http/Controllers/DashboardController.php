<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Employee;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){   
        $title = "Dashboard";
        
        $total_purchases = Purchase::count();
        $total_categories = Category::count();
        $total_suppliers = Supplier::count();
        $total_employees = Employee::count();

    
              
                
        
       
        return view('dashboard',compact(
            'title','total_purchases','total_suppliers','total_categories', 'total_employees'
        ));
    }
}
