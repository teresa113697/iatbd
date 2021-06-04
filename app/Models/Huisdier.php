<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huisdier extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "huisdieren";

    public function Eigenaar() {
        return $this->belongsTo('\App\Models\User', 'user_id', 'id');
    }

    public function Soort() {
        return $this->belongsTo(Soort::class, 'soort', 'soort');
    }

    public function Aanvraag() {
        return $this->hasOne(Aanvraag::class);
    }
}