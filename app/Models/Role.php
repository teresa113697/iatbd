<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = "roles";

    public function allUsers() {
        return $this->hasMany(User::class, "role", "role");
    }

    public function allAanvragenUser() {
        return $this->hasMany(Aanvraag::class, "id", "oppas_id");
    }

}
