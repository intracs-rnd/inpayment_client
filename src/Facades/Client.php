<?php

namespace IntracsRnd\InWalletClient\Facades;

use Illuminate\Support\Facades\Facade;

class Client extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'inpayment.client';
    }
}
