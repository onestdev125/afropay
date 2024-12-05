<?php 

namespace Pranta\AfropayPaymentGateway\Facades;

use Illuminate\Support\Facades\Facade;

class Afropay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'afropay';
    }
}
