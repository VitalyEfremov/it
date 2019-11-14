<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributors extends Model
{
    protected $table = 'distributors';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'phone', 'site', 'author_id'
    ];
}
