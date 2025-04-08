<?php

namespace IntracsRnd\InpaymentClient\Facades;

use Illuminate\Support\Facades\Facade;

class Client extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'inpayment.client';
    }
}
