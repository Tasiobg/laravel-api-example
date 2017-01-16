<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Indicates primary key to Eloquent, if not set Eloquent will also assume that each table has a primary key column named id
     *
     * @var string
     */
    protected $primaryKey = 'emp_no';
}