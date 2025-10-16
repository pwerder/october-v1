<?php namespace Atlas\Events\Models;

use Model;

/**
 * Model
 */
class Evento extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'atlas_events_events';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
