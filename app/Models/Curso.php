<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Curso
 * @package App\Models
 * @version November 4, 2022, 11:27 pm UTC
 *
 * @property string $nombre
 * @property string $descripcion
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $estado
 */
class Curso extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cursos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'descripcion' => 'string',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required',
        'estado' => 'required'
    ];


}
