<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Superhero
 *
 * @property $id
 * @property $nombre
 * @property $alias
 * @property $foto
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Superhero extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'alias' => 'required',
		'foto' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','alias','foto','descripcion'];



}
