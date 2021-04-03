<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';

    // Mặc định là không trả về content cho nhanh
    // vì content độ dài lớn
    protected $hidden = ['content'];
}
