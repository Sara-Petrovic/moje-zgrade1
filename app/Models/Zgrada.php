<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Stanar;

class Zgrada extends Model
{
    use HasFactory;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'zgrade';

    public function user(){ //veza 1 prema 1
        return $this->belongsTo(User::class);
    }

    public function stanari(){
        return $this->hasMany(Stanar::class);
    }
}
