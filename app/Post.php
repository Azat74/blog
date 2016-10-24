<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @property integer $id
 * @property string $title
 * @property string $head
 * @property string $body
 * @property string $author
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereHead($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereAuthor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    //
}
