<?php

namespace App\Http\Controllers;

use App\order_list;
use Illuminate\Http\Request;

class OrderListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view_orders')->with("orders_arr", order_list::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_new_order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new order_list();

        $order->start_point = $request->input('start_point');
        $order->end_point = $request->input('end_point');
        $order->distance = $request->input('distance');
        $order->cargo_weight = $request->input('cargo_weight');

        $order->save();
        return  redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order_list  $order_list
     * @return \Illuminate\Http\Response
     */
    public function show(order_list $order_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order_list  $order_list
     * @return \Illuminate\Http\Response
     */
    public function edit(order_list $order_list, $id)
    {
        $order = order_list::find($id);
        return view('edit_order')->with('order_arr', $order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order_list  $order_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order_list $order_list, $id)
    {
        $order = order_list::find($id);

        $order->start_point = $request->input('start_point');
        $order->end_point = $request->input('end_point');
        $order->distance = $request->input('distance');
        $order->cargo_weight = $request->input('cargo_weight');

        $order->save();
        return  redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order_list  $order_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_list $order_list, $id)
    {
        $row = order_list::destroy($id);
        return  redirect('/');
    }
}
