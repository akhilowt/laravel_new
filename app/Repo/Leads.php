<?php

namespace App\Http\Controllers;
use App\Repo;

use Illuminate\Http\Request;

class Leads extends Controller
{

    CONST CAHE_KEY = 'USERS';
    public function all($orderBy){

    }

    public function get($id){

    }

    public function getCacheKey($key){
        $key = strtoupper($key);
        return self::CAHE_KEY .".$key";
    }
}