<?php

namespace IntracsRnd\InpaymentClient\Support;

use Illuminate\Support\Facades\Config;

final class Api
{
    private $_baseUrl = 'https://api.inpayment.com/v1';

    public function __construct()
    {
        $$this->withOptions([
            'base_url' => $this->_baseUrl,
            'timeout' => Config::get('inpayment_client.timeout', 30),
            'connect_timeout' => Config::get('inpayment_client.timeout', 5),
        ]);
    }
}
