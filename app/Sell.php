<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    public function Drink()
    {
        return $this->hasOne('Drink');
    }
}
