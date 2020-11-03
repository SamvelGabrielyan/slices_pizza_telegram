<?php

namespace App\Http\Controllers;

use App\Order;
use App\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Telegram\Bot\Api;

class MenuController extends Controller
{

    public function getAllPizzas()
    {
        $pizzas = Pizza::all();

        return response()->json(['pizzas' => $pizzas]);
    }

    public function order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:200',
            'name' => 'required|string|max:200',
            'comment' => 'required|string|max:300'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $telegram = new Api('1426944698:AAHH8-5iGrC5PAd9-Tinoi8s-3D-wt3c5u4');

        $telegram->sendMessage([
            'chat_id' => '@slicespizzashop',
            'text' => $request['products']
        ]);


        return Order::create([
            'email' => $request['email'],
            'name' => $request['name'],
            'comment' => $request['comment'],
            'sum' => $request['sum'],
        ]);
    }
}
