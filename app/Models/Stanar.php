<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zgrada;

class Stanar extends Model
{
    use HasFactory;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'stanari';

    public function zgrada(){ 
        return $this->belongsTo(Zgrada::class);
    }
}
