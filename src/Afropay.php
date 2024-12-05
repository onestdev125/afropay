<?php 

namespace Pranta\AfropayPaymentGateway;

use Illuminate\Support\Facades\Http;

class Afropay
{
    protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiUrl = config('afropay.api_url');
        $this->apiKey = config('afropay.api_public_key');
    }

    public function initiatePayment($data)
    {
        $response = Http::withToken($this->apiKey)->post("{$this->apiUrl}/payment/checkout", $data);
        return $response->json();
    }
}
