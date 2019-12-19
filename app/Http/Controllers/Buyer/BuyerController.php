<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuyerController extends Controller
{
    
    public function index()
    {
        $buyers = Buyer::has('transactions')->get();

        return response()->json(['data'=>$buyers], 200);
    }


   
}
