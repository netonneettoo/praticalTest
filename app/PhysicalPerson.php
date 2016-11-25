<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhysicalPerson extends Model
{
    protected $fillable = ['user_id', 'cpf'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
