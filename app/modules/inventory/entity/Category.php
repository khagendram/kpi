<?php

namespace App\Modules\Inventory\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $code
 * 
 * 
 * 
 * 
 * 
 */

class category extends Model
{
// provide table name create database table
protected $table ="inv_category";
}
