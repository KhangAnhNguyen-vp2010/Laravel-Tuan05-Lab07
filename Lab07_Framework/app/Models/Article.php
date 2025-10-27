<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'title', 'content'];

    protected static $articles = [
        1 => ['id' => 1, 'title' => 'Laravel Basics', 'content' => 'Introduction to Laravel routing...'],
        2 => ['id' => 2, 'title' => 'Eloquent ORM', 'content' => 'How to use Eloquent in Laravel...'],
        3 => ['id' => 3, 'title' => 'Blade Templates', 'content' => 'Working with Blade views...'],
    ];

    public function resolveRouteBinding($value, $field = null)
    {
        
        if (!isset(self::$articles[$value])) {
            abort(404, 'Article not found');
        }

        $article = new self;
        $article->fill(self::$articles[$value]);
        return $article;
    }
}
