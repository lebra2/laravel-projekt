<?php

namespace App\Http\Controllers;

use Cknow\Money\Money;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(session()->all());
        return Inertia::render('Cart',[
            'cart' => session()->get('cart')
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->product['id'];
        if(session()->has('cart.product' . $id)){
                $sProduct = session()->get('cart.product' . $id);
                $sProduct['qty'] += $request->qty;
                $sProduct['total'] = Money::EUR($sProduct['price']['amount'] * $sProduct['qty']);
                session()->put('cart.product' . $id, $sProduct);
        } else {     
                $request->session()->put('cart.product' . $id, [...$request->product, 'qty' => $request->qty, 'total' => Money::EUR($request->product['price']['amount'] * $request->qty)]);
        }
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $qty = $request['qty'];
        if(session()->has('cart.product' . $id)){
            $sProduct = session()->get('cart.product' . $id);
            $sProduct['total'] = Money::EUR($sProduct['price']['amount'] * $qty);
            $sProduct['qty'] = $qty;
            session()->put('cart.product' . $id, $sProduct);
        }
        return redirect()->back();
        // dd($qty, $id, $sProduct);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(session()->has('cart.product' . $id)){
            $product = session()->forget('cart.product' . $id);
        }
        return redirect()->back();
    }
}
