<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalPerson extends Model
{
    protected $fillable = ['user_id', 'cnpj', 'social_reason', 'fantasy_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
