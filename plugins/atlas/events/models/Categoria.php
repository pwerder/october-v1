<?php namespace Atlas\Events\Models;

use Model;

/**
 * Model
 */
class Categoria extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'atlas_events_categorias';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function getDisplayNameAttribute()
    {
        return $this->title . ' - ' . $this->description;
    }
}
