<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateAndUpdate extends Model
{
    private $id;
    //
    public static function find($id)
    {
        $id = 1;
        $this->id = $id;
    }
}
