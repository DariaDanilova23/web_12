<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class catalogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('catalog.index',[
            'catalog'=>Catalog::all()]);
    }

    public function product(){
        return view('catalog.product',[
            'products'=>Product::all()]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store (Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show (Catalog $catalog)
    {
       return view('catalog.product', [
            'catalog' => $catalog,
           'product' => Product::all()->where('catalog_id',$catalog['id']) //вместо 1 поставь номер id по которому перешли
        ]);
    }
}
