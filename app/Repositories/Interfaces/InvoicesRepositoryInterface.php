<?php 

namespace App\Repositories\Interfaces;
Interface  InvoicesRepositoryInterface
{
    function storeInvoice(array $data, $type = NULL, $model);
    function allInvoice ();
    function findAndUpdateInvoice($id, array $data, $type = NULL);
    function returnsInvoice($id);
    function showInvoice($id);
    function printInvoice($id);
    function pdfInvoice($id);
    function copystoreInvoice(array $data, $type = NULL);
    function paymentPostInvoice($id);
    function filtter($request);
    function saveAccountEstrictionsInvoice(...$data);
    function InvoiceDetails ($data);
}
