<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::where(
            [
                'contactLastName' => 'Brown',
                'city' => 'San Francisco'
            ])->get();
//        dd($customers);

        return view('customers.index', ['customers' => $customers]);
    }
}
