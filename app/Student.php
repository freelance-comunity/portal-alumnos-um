<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['student_id', 'name', 'last_name', 'second_lastname', 'gender', 'birthdate', 'state_birth', 'town_birth', 'phone', 'cell_phone', 'state', 'town', 'country', 'street', 'house_number', 'colony', 'post_code', 'email', 'tutor_name', 'tutor_phone', 'status', 'curp', 'sep', 'languages'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
