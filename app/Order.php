<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function isConfirm()
    {
    	if($this->confirm == 1)
    		return true;
    }
}
