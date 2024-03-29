<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'surname', 'b_date'];

    protected function fullName(): Attribute{
        return Attribute::make(
            get: fn () => ($this->name . " " .$this->surname),
        );
    }
}
