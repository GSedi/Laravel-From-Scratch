<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mail\ProjectCreated;
use Illuminate\Support\Facades\Mail;

class Project extends Model
{

    // protected $guarded =[]; equivalent

    protected $fillable = [
        'title', 'description', 'owner_id',
    ];

    public static function boot(){

        parent::boot();

    }


    public function owner(){

        return $this->belongsTo(User::class);
        
    }

    public function tasks(){

        return $this->hasMany(Task::class);

    }

    public function addTask($validated){
        
        $this->tasks()->create($validated);

    }


}
