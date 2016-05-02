<?php

namespace Gym;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Page extends Model
{
    use SearchableTrait;

    protected $fillable = ['name', 'text'];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'name' => 10,
            'text' => 10,
        ],
    ];
}
