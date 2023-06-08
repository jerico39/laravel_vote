<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master extends Model
{
    use HasFactory;

    $result = new Result;
    $result->id = $id;
    $result->no = $key;

    $result->answer = $question[$key]['answer'][$array_key];
    $result->tex_id = null;

    $result->created_at = $cur;
    $result->updated_at = $cur;

    $result->save();
}
