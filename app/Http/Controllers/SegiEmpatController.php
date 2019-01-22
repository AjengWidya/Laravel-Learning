<?php

namespace App\Http\Controllers;

use App\models\SegiEmpat;
use App\models\Kubus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class SegiEmpatController extends Controller
{
    //memanggil form input segi empat
    public function inputSegiEmpat()
    {
    	return View::make('segi-empat.inputSegiEmpat');
    }

    //membaca hasil input segi empat
    public function hasil(Request $request)
    {
    	$segiEmpat = new SegiEmpat;
    	//aturan validasi
    	$rules = ['panjang'=>'required|numeric',
    			  'lebar'=>'required|numeric'];

    	$validator = Validator::make(Input::all(), $rules);
    	//cek validasi
    	if ($validator->fails())
    	{
    		return View::make('segi-empat.inputSegiEmpat', compact('segiEmpat'))->withErrors($validator);
    	} else {
    		$segiEmpat->panjang = Input::get('panjang');
    		$segiEmpat->lebar = Input::get('lebar');
    		return View::make('segi-empat.hasil', compact('segiEmpat'));
    	}
    }

    //memanggil form input kubus
    public function inputKubus()
    {
    	return View::make('segi-empat.inputKubus');
    }

    //membaca hasil input kubus
    public function hasilKubus(Request $request)
    {
    	$kubus = new Kubus;
    	//aturan validasi
    	$rules = ['panjang'=>'required|numeric',
    			  'lebar'=>'required|numeric',
    			  'tebal'=>'required|numeric'];

    	$validator = Validator::make(Input::all(), $rules);

    	//cek validasi
    	if ($validator->fails())
    	{
    		return View::make('segi-empat.inputKubus', compact('kubus'))->withErrors($validator);
    	} else {
    		$kubus->panjang = Input::get('panjang');
    		$kubus->lebar = Input::get('lebar');
    		$kubus->tebal = Input::get('tebal');

    		return View::make('segi-empat.hasilKubus', compact('kubus'));
    	}
    }
}
