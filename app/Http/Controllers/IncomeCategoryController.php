<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeCategoryController extends Controller
{
    //
    public function AddIncomeCagetory(){
        return view('admin.income.add_income_category');
    }
}
