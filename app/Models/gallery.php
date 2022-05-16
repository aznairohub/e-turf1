<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class gallery extends Model
{
    use HasFactory;
    public function insert($table,$data)
    {
      DB::table($table)->insert($data); 
    }
    public function updates($table,$data,$id)
    {
      return DB::table($table)->where('id',$id)->update($data);
    }
}
