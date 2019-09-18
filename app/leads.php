<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class leads extends Model
{
    public $table = "leads";

    public function index()
    {
        //$start = microtime(true);
        
        $res = Cache::remember('leads',20,function(){
            return DB::table('leads')->limit(1000)->get();
        });
        return $res;
        // $duration = (microtime(true) - $start) * 1000;

        // \Log::info('with cache'.$duration.' ms.');
        // return $result;
    }
}
