<?php

Route::get('buy', function()
{
    return View::make('buy');
});

Route::post('buy', function()
{
    $billing = App::make('Acme\Billing\BillingInterface');

    try
    {
        $customerId = $billing->charge([
            'email' => Input::get('email'),
            'token' => Input::get('stripe-token')
        ]);

        $user = User::first();
        $user->billing_id = $customerId;
        $user->save();
    }
    catch(Exception $e)
    {
        return Redirect::refresh()->withFlashMessage($e->getMessage());
    }

    return 'Charge was successful';
});
