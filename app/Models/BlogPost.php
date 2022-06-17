<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id', 'url','image'];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($post) {
            $post->url = $post->generateSlug($post->title);
            $post->save();
        });
    }
    private function generateSlug($title)
    {
        if (static::whereUrl($url = Str::slug($title))->exists()) {
            $max = static::whereTitle($title)->latest('id')->skip(1)->value('url');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$url}-2";
        }
        return $url;
    }  
}
