<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory;
use Auth;
use Illuminate\Support\Carbon;

class IncomeCategoryController extends Controller
{
    //
    public function AddIncomeCagetory(){
        return view('admin.income.add_income_category');
    }

    public function StoreIncomeCagetory(Request $request){
        $request->validate([
            'name' => 'required|unique:income_categories|max:255'
        ]);

        IncomeCategory::insert([
            'name' => $request->name,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('all.income.category')->with('message', 'Income Category added successfully!');
    }

    public function AllIncomeCagetory(){
        $categories =  IncomeCategory::latest()->get();
        return view('admin.income.all_income_category', compact('categories'));
    }

}
