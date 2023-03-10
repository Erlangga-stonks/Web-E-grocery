<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{



    public function ShowProduct()
    {
        $new = Product::latest();

        if(request('search')){
            $new->where('Name', 'like', '%' . request('search') . '%');
        }
        return view('Home',[
                "Home2" => DB::table('products')->paginate(3),
                
        ]);


    }

    public function ShowProductUser()
    {
        $new = Product::latest();

        if(request('search')){
            $new->where('Name', 'like', '%' . request('search') . '%');
        }
        return view('HomeUser',[
                "Home2" => DB::table('products')->paginate(3),
        ]);
    }

    public function ShowDetailCustomerView(){
        return view('ProductDetailCustomer',[
            "Detail" => Product::all()
        ]);
    }

    public function ShowDetailCustomer(Product $Number){
        return view('ProductDetailCustomer',[
            "Detail" => $Number
        ]);
    }
}
