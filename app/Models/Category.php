<?php

namespace App\Models;


use App\Models\Insertion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    //una categoria ha + annunci
    public function insertions(){
        return $this->hasMany(Insertion::class);
    }
}
