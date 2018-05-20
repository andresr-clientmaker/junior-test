<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Note
 * @package App\Models
 * @version May 16, 2018, 7:26 pm UTC
 *
 * @property string note
 * @property string id_kid
 */
class Note extends Model
{

    public $table = 'notes';


    public $fillable = [
        'note',
        'id_kid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'id_kid' => 'numeric'
    ];


}
