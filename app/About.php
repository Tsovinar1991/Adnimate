<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['meta_id', 'name_ru', 'name_am', 'name_en', 'description_ru', 'description_am', 'description_en'];
}
