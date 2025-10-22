<?php

namespace Atlas\Events\Components;

use Atlas\Events\Models\Evento;
use Atlas\Events\Models\Categoria;

class Event extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Event',
            'description' => 'Display events.'
        ];
    }

    public function defineProperties()
    {
        return [
            'columns' => [
                'title'             => 'Columnas',
                'description'       => 'Tamanho da coluna',
                'default'           => 4,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Valor não permetido ..'
            ],
            'category' => [
                'title' => 'Category',
                'type' => 'dropdown',
                'default' => ''
            ]
        ];
    }

    public function getCategoryOptions()
    {
        $result = [];
        $result[''] = 'Sem categoria';

        $data = Categoria::get();

        foreach($data as $item) {
            $result[$item->id] = $item->title; 
        }

        return $result;
    }

    public function onRun()
    {
        $this->page['columns'] = $this->property('columns');
        $category = $this->property('category');

        if ($category != '') {
            $this->page['result'] = Evento::where('categoria_id', $category)->get();
        } else {
            $this->page['result'] = Evento::get();
        }
    }
}
