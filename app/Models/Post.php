<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $appends = ['created_at_diff','created_at_date','posturl'];

    public function getCreatedAtDiffAttribute()
    { 
        return $this->created_at->diffForHumans(); 
    }

    public function getCreatedAtDateAttribute()
    {
        return $this->created_at->format('F d, Y'); 
    }

    public function getPosturlAttribute()
    { 
        return url('/'.$this->type,$this->slug); 
    }

    public function meta()
    {
        return $this->hasMany(Postmeta::class);
    }

    public function shortDescription()
    {
        return $this->hasOne(Postmeta::class)->where('key', 'short_description');
    }
}
