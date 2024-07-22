<?php

namespace App\Http\Controllers;

use App\Models\Order as Order;

class OrderController extends Controller
{
    /**
     * Fonction pour montrer les différentes commandes
     */
    public function index()
    {
        $orders = Order::all();

        return $orders;
    }

}
