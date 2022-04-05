<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use PDF;

class PdfController extends Controller
{
    public function orderinvoice(){
        $deta = Order::all();
        // $pdf = PDF::loadview('admin.orderinvoice', compact('deta'));
        // return $pdf->download('order.pdf');
        return view('admin.orderinvoice');
    }
}
