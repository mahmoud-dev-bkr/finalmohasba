<?php

namespace App\Repositories;

use App\PurchaseInvoiceDetails;
use App\Repositories\Interfaces\InvoicesRepositoryInterface;

class InvoicesRepository implements InvoicesRepositoryInterface
{
    protected $model;
    protected $InvoiceDetails;
    public function __construct($model)
    {
        $this->model = $model;
        $this->InvoiceDetails = new PurchaseInvoiceDetails;
    }

    public function storeInvoice(array $data, $type = NULL, $model) {

        return $this->model->create($data);
    }
    public function allInvoice() {

    }
    public function findAndUpdateInvoice($id, array $data, $type = NULL) {
        return $this->model->find($id)->update($data);
    }
    public function returnsInvoice($id) {

    }
    public function showInvoice($id) {

    }
    public function printInvoice($id) {

    }
    public function pdfInvoice($id) {

    }
    public function copystoreInvoice(array $data, $type = NULL) {

    }
    public function paymentPostInvoice($id) {

    }
    public function filtter($request) {

    }
    public function saveAccountEstrictionsInvoice(...$data) {

    }

    public function InvoiceDetails($data)
    {
        $InvoiceDetails  = $this->InvoiceDetails->create($data);
        return $InvoiceDetails;
    }
}
