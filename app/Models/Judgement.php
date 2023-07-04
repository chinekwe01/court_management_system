<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judgement extends Model
{
    use HasFactory;

    protected $fillable = [
        'facts', 'judgement'
    ];

    public function CourtCase(){
        return $this->belongsTo(CourtCase::class, 'case_id');
    }
}
