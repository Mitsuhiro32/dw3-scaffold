<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Alumno
 * @package App\Models
 * @version November 4, 2022, 10:09 pm UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property integer $edad
 * @property string $ci
 * @property string $telefono
 * @property string $direccion
 * @property string $email
 * @property string $profesion
 * @property string $genero
 * @property string $fecha_nac
 */
class Alumno extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'alumnos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'curso_id',
        'nombre',
        'apellido',
        'edad',
        'ci',
        'telefono',
        'direccion',
        'email',
        'profesion',
        'genero',
        'fecha_nac'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'edad' => 'integer',
        'ci' => 'string',
        'telefono' => 'string',
        'direccion' => 'string',
        'email' => 'string',
        'profesion' => 'string',
        'genero' => 'string',
        'fecha_nac' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'curso_id' => 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'edad' => 'required',
        'ci' => 'required',
        'telefono' => 'required',
        'direccion' => 'required',
        'email' => 'required',
        'profesion' => 'required',
        'genero' => 'required',
        'fecha_nac' => 'required'
    ];

    public function cursos()
    {
        return $this->belongsTo('App\Models\Curso', 'curso_id');
        //return $this->hasOne(Curso::class, 'id', 'curso_id');
    }

}
