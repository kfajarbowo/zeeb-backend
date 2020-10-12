<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index(){
        $incomes = Transaction::where('transaction_status','Success')->sum('transaction_total');
        $sales = Transaction::count();
        $items =Transaction::with('details')->orderBy('id','DESC')->take(5)->get();
        $pie =[
            'pending' => Transaction::where('transaction_status','Pending'),
            'failed' => Transaction::where('transaction_status','Failed'),
            'success' => Transaction::where('transaction_status','Success')
        ];
        return view('pages.dashboard')->with([
            'incomes' => $incomes,
            'sales' => $sales,
            'items' => $items,
            'pie' => $pie
        ]);
    }

}
