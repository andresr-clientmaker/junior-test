<?php

namespace App\Models;


/**
 * Class InfoKid
 * @package App\Models
 * @version May 16, 2018, 7:26 pm UTC
 *
 * @property string name
 * @property string last_name
 * @property string id
 * @property array notes
 */
class InfoKid
{

    public $id;
    public $name;
    public $last_name;
    public $notes = array();

    /**
     * The constructor for InfoKid
     */
    public function __construct($id, $name, $last_name, $notes)
    {
        $this->id = $id;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->notes = $notes;

    }


}
