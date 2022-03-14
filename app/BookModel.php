<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookModel extends Model
{
    //
    protected $table = "book";

    public function save_data($data){
        DB::table($this->table)->insert($data);
    }
}
