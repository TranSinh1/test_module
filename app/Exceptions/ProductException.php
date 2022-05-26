<?php

namespace App\Exceptions;

use Exception;

class ProductException extends Exception
{
    public function report() {
        \Log::debug('Product not found');
    }
}
