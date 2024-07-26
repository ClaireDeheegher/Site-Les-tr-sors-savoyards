<?php

    namespace App\Http\Controllers\Api;


use  Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::all();
        return response()->json($carts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retourner une vue pour créer une nouvelle entrée de cart
        return view('carts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ref' => 'required|integer',
        ]);

        $cart = new Cart([
            'ref' => $request->get('ref'),
        ]);

        $cart->save();

        //return redirect('/carts')->with('success', 'Cart has been added');
        //return $cart
        return response()->json($cart);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cart = Cart::findOrFail($id);
        return response()->json($cart);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cart = Cart::findOrFail($id);
        return view('carts.edit', compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ref' => 'required|integer',
        ]);

        $cart = Cart::findOrFail($id);
        $cart->ref = $request->get('ref');
        $cart->save();

        //return redirect('/carts')->with('success', 'Cart has been updated');
        return response()->json($cart);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        //return redirect('/carts')->with('success', 'Cart has been deleted');
        return response()->json(['Message'=>'Panier supprimé avec succès']);
    }















  /*.  public function index() {
        $test = [
            'Article' => 'Article5'
        ];
        return response()->json($test);

    }*/
}
