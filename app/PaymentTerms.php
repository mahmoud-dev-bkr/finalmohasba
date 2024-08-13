<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentTerms extends Model
{
    protected $table = 'payment_terms';
    protected $fillable = [
        'Payment_terms','number_days','description'

    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
