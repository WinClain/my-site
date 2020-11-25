<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class users extends \Eloquent implements Authenticatable
{
    use HasFactory;
    use AuthenticableTrait;

    public function getName(){
        return "{$this->name} {$this->lastname}";
    }
}
