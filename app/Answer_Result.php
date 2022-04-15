<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer_Result extends Model
{

    protected $table = 'answer_results';

    protected $fillable = [
        'score',
        'questions'
    ];
}
