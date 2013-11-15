<?php namespace Acme\Billing;

interface BillingInterface {
    public function charge(array $data);
}
