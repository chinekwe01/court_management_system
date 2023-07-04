<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourtCase extends Model
{
    use HasFactory;

    protected $fillable = [
        'suit_no', 'type', 'details', 'begins', 'ends'
    ];
    public function Judgment(){
        return $this->hasMany(Judgement::class, 'case_id');
    }
}
