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

    public $hasMany = [
        'evento' => ['Atlas\Events\Models\Evento']
    ];


    public function getDisplayNameAttribute()
    {
        return $this->title . ' - ' . $this->description;
    }

    public function getTotalEventsAttribute()
    {
        return $this->evento
                    ->where('categoria_id', $this->id)
                    ->count();
    }
}
