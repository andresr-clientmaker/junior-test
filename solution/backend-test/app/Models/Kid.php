<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Kid
 * @package App\Models
 * @version May 16, 2018, 7:26 pm UTC
 *
 * @property string name
 * @property string last_name
 */
class Kid extends Model
{

    public $table = 'kids';


    public $fillable = [
        'name',
        'last_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'last_name' => 'string'
    ];


}
