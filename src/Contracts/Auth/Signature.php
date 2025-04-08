<?php

namespace IntracsRnd\InpaymentClient\Contracts\Auth;

final class Signature
{
    public static function header(): string
    {
        return "Signature";
    }

    public static function sign(mixed $payload, string $client_id, string $client_secret): string
    {
        // Public key should be loaded from a secure location.
        $payload = json_encode($payload);
        $payload = "{$payload}|{$client_id}";

        // Implement HMAC SHA 256 signature here
        return base64_encode(hash_hmac("sha256", $payload, $client_secret, true));
    }
}
