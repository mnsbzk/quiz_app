<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Choice extends Model
{
    use SoftDeletes;

    protected $table = 'choices';

    protected $fillable = [
        'question_id',
        'choice_text',
        'is_correct'
    ];
}
