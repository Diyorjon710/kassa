<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function index()
    {
        $order_list = Order::with('order_details.mahsulot')->get();
        return view('admin.index', compact('order_list'));
    }

    public function getPdf()
    {
        $order = Order::with('order_details.users')->latest()->first();
        $pdf = PDF::loadView('mypdf', compact('order'));
        return $pdf->download('faylnomi.pdf');
    }
    //
}
