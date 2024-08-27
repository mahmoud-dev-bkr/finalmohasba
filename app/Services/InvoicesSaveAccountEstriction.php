<?php 

namespace App\Services;

use App\Repositories\InvoicesRepository;
use App\Sales_invoices;

class InvoicesSaveAccountEstriction
{
    protected $InvoicesRepository;
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function storeFirstInvoiceAccountEstriction($invoice)
    {
        $this->InvoicesRepository = $this->getServiceInvoiceByName(get_class());
        $this->InvoicesRepository->storeFirstInvoiceAccountEstriction($invoice);
        return true;
    }

    public function storeSecoundInvoiceAccountEstriction($invoice, $index)
    {
        $this->InvoicesRepository = $this->getServiceInvoiceByName(get_class());
        $this->InvoicesRepository->storeSecoundInvoiceAccountEstriction($invoice, $index);
        return true;
    }
    
    public function getServiceInvoiceByName()
    {
        
        $classNameModel = basename(str_replace('\\', '/', get_class($this->model)));
        $className = "App\\Repositories\\AccountEstrictionRepository" . ucfirst($classNameModel);
        if (class_exists($className)) {
            return new $className(); // Instantiate the class and return the object
        }

        // Throw an exception if the class does not exist
        throw new \Exception("Class $className does not exist");
    }
    
}

