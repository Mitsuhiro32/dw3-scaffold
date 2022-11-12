<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Test
 * @package App\Models
 * @version November 11, 2022, 11:28 pm UTC
 *
 * @property string $test
 */
class Test extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tests';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'test'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'test' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'test' => 'required'
    ];


}
