<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Insertion extends Model
{
    use HasFactory, Searchable;
    protected $fillable=['title', 'description', 'price','category_id', 'user_id','is_accepted'];
    //+ annunci appartengono ad una sola categoria
    public function category(){
        return $this->belongsTo(Category::class); 
    }

    public function user(){
        return $this->belongsTo(User::class); 
    }
//----------------
    public function images(){
        return $this->hasMany(Image::class);
    }
//------------------
    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount(){
        return Insertion::where('is_accepted', null)->count();
    }

    public function toSearchableArray(){
        $category = $this->category;
        $array=[
            'id'=> $this->id,
            'title'=> $this->title,
            'description'=> $this->description,
            'category'=> $category,
        ];
        return $array;
    }
}
