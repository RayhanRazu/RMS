<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class PrintController extends Controller
{
    public function orderinvoice($id){

        $data = Order::find($id);
        return view('admin.print.orderpreview', compact('data'));
    }
}
