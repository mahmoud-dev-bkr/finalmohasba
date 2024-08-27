<?php 

namespace App\Repositories\Interfaces;

interface AccountEstrictionRepositorySalesInterface
{
    function storeInvoiceAccountEstriction(array $data, $account1, $account2, $account3);
    function updateInvoiceAccountEstriction(array $data,$accountestriction_id, ...$model);
}