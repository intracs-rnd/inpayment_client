<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use IntracsRnd\InpaymentClient\Contracts\Auth\Signature;

final class ServicesTest extends TestCase
{
    public function testSignature()
    {
        $client_id = "SXdAqRtwdiPmDT6";
        $client_secret = "MIY-FGUvsMdnDSjCbpd9S8ZHgofLnjzsrU";
        $body = [
            "terminal_id" => "T241010997372052",
            "reference_id" => "TRX_NEKO_TEST-X050",
            "type" => "DYNAMIC",
            "amount" => 1500,
        ];

        $signature = Signature::sign($body, $client_id, $client_secret);

        $this->assertEquals("MgAb4eEbWp5IvvsjzKm4HGDmAg8ZLX6w0p/jWzX0Rhk=", $signature);
    }
}
