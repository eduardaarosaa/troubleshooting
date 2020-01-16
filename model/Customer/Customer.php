<?php

namespace Model\Customer;

use Illuminate\Database\Eloquent\Model;



class Customer extends Model {

    protected $table = 'customer';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;


    public function contract()
    {
        return $this->hasMany('Model\Contract\contract', 'customer_id', 'customer_id');
    }
}
