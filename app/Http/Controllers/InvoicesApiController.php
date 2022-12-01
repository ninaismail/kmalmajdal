<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoicesApiController extends Controller
{
    public function index()
    {
        return Invoice::all();
    }
    public function getInvoice($id)
    {
        $invoice = Invoice::find($id);
        return $invoice;
    }  
}