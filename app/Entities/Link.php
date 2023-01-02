<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'links';

    protected $fillable = [
        'url',
        'code'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
