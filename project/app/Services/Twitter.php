<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class Twitter extends Model
{
    protected $apiKey;

    public function __construct($apiKey){
        $this->apiKey = $apiKey;
    }
}
