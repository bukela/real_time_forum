<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected static function boot()//slug je odradjen preko boot funkcije iz model.php
    {
        parent::boot();

        static::creating(function ($question) {
            $question->slug = str_slug($question->title);//slug je odradjen preko boot funkcije iz model.php
        });
    }

    protected $fillable = [
        'title','slug','body','category_id','user_id'
    ];

    // protected $guarded = []; // umesto $fillable ignorise mass assignment

    public function getRouteKeyName() {
        return 'slug';
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function replies() {
        return $this->hasMany(Reply::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function getPathAttribute() {
        // return asset("api/question/$this->slug"); //za slug kroz questonresource
        return "/question/$this->slug"; //za slug kroz questonresource(obrisan api iz url)
    }
}
