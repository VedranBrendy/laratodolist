<?php

namespace App\Models;

use App\Http\Traits\Timestampstrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  use Timestampstrait;

  //Define the table
  protected $table = "tasks";

  public static function limit($value, $limit = 0)
  {
    if (mb_strwidth($value, 'UTF-8') <= $limit) {
      return $value;
    }

    return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')) . '...';
  }

  public function dateFormat($date)
  {
    return date('d.m.Y', strtotime($date));
  }

  public function dateFormatSQL($date)
  {
    return date('Y-m-d', strtotime($date));
  }
}
