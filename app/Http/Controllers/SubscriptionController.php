<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        if (Newsletter::isSubscribed($request->email)) {
            return response()->json(['message' => 'Вы уже подписаны.'], 400);
        }

        Newsletter::subscribe($request->email);

        return response()->json(['message' => 'Спасибо за подписку!']);
    }
}