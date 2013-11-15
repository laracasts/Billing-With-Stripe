@extends('layouts.default')

@section('content')

<h1>Buy For $10</h1>

{{ Form::open(['id' => 'billing-form']) }}
    <div class="form-row">
        <label>
            <span>Card Number:</span>
            <input type="text" data-stripe="number">
        </label>
    </div>

    <div class="form-row">
        <label>
            <span>CVC:</span>
            <input type="text" data-stripe="cvc">
        </label>
    </div>

    <div class="form-row">
        <label>
            <span>Expiration Date:</span>
            {{ Form::selectMonth(null, null, ['data-stripe' => 'exp-month']) }}
            {{ Form::selectYear(null, date('Y'), date('Y') + 10, null, ['data-stripe' => 'exp-year']) }}
        </label>
    </div>

    <div class="form-row">
        <label>
            <span>Email Address:</span>
            <input type="email" id="email" name="email">
        </label>
    </div>

    <div>
        {{ Form::submit('Buy Now') }}
    </div>

    <div class="payment-errors"></div>
{{ Form::close() }}


@stop

@section('footer')
    <script src="/js/billing.js"></script>
@stop

