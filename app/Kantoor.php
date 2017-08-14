<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kantoor extends Model
{
    protected $table = 'kantoren';
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function fullAddress()
    {
        return $this->address . ', ' . $this->postalcode . ' ' . $this->city;
    }

    public function formattedPhone()
    {
        return "0" . chunk_split($this->phone, 2, ' ');
    }
}
