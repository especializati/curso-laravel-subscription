<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if (auth()->user()->subscribed('default'))
            return redirect()->route('subscriptions.premium');

        return view('subscriptions.index', [
            'intent' => auth()->user()->createSetupIntent(),
        ]);
    }

    public function store(Request $request)
    {
        $request->user()
                ->newSubscription('default', 'price_1IdJnYDqbesnTmt0OlQBtobF')
                ->create($request->token);

        return redirect()->route('subscriptions.premium');
    }

    public function premium()
    {
        return view('subscriptions.premium');
    }
}
