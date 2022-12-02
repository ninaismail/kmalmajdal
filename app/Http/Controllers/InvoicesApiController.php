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
    
    public function store()
    {
        request()->validate([
            'client_fname' => 'required',
            'client_lname' => 'required',
            'client_company' => 'required',
            'client_country' => 'required',
            'client_city' => 'required',
            'client_region' => 'required',
            'client_phone' => 'required',
            
            'payment_methode' => 'required',
            'tax' => 'required',
            'subtotal' => 'required',
            'grandtotal' => 'required',
        ]);

        return Invoice::create([
            'client_fname' => request('client_fname'),
            'client_lname' => request('client_lname'),
            'client_country' => request('client_country'),            
            'client_company' => request('client_company'),            
            'client_city' => request('client_city'),            
            'client_region' => request('client_region'),            
            'client_phone' => request('client_phone'),     
            'note' => request('note'),            
            'payment_methode' => request('payment_methode'),            
            'tax' => request('tax'),              
            'subtotal' => request('subtotal'),            
            'grandtotal' => request('grandtotal'),            
        ]);
    }

    public function update(Invoice $invoice)
    {
        request()->validate([         
            'client_fname' => 'required',
            'client_lname' => 'required',
            'client_company' => 'required',
            'client_country' => 'required',
            'client_city' => 'required',
            'client_region' => 'required',
            'client_phone' => 'required',
            
            'payment_method' => 'required',
            'tax' => 'required',
            'subtotal' => 'required',
            'grandtotal' => 'required',
        ]);

        $success = $invoice->update([
            'client_fname' => request('client_fname'),
            'client_lname' => request('client_lname'),
            'client_country' => request('client_country'),            
            'client_company' => request('client_company'),                'client_city' => request('client_city'),            
            'client_region' => request('client_region'),            
            'client_phone' => request('client_phone'),     
            'note' => request('note'),            
            'payment_methode' => request('payment_methode'),            
            'tax' => request('tax'),              
            'subtotal' => request('subtotal'),            
            'grandtotal' => request('grandtotal'),            
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Invoice $invoice)
    {
        $success = $invoice->delete();

        return [
            'success' => $success
        ];
    }

    public function getInvoice($id)
    {
        $invoice = Invoice::find($id);
        return $invoice;
    }  
}