<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SegiEmpat extends Model
{
    //
    public $panjang;
    public $lebar;

    //menghitung luas segi empat
    public function luas()
    {
    	return $this->panjang * $this->lebar;
    }

    //menghitung keliling segi empat
    public function keliling()
    {
    	return 2*($this->panjang + $this->lebar);
    }
}
