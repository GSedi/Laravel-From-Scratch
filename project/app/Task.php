<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    
    public function project(){

        return $this->belongsTo(Project::class);

    }

    public function completeIncomplete($completed = true){

        $this->update(compact('completed'));
    }

    public function __toString()
    {
        return $this->description;
    }
}
