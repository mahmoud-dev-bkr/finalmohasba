<?php

namespace App\Repositories\Interfaces;

interface AccountEstrictionRepositorySalesInterface
{
    function storeFirstInvoiceAccountEstriction (array $data);
    function storeSecoundInvoiceAccountEstriction(array $data, array $index);
}
