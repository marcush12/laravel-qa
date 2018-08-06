<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value) //mutator
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getUrlAttribute() //assessor
    {
        return route("questions.show", $this->id);
    }

    public function getCreatedDateAttribute() //assessor
    {
        return $this->created_at->diffForHumans();
    }

}