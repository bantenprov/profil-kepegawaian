<?php namespace Bantenprov\ProfilKepegawaian\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The ProfilKepegawaianModel class.
 *
 * @package Bantenprov\ProfilKepegawaian
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilKepegawaianModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'profil_kepegawaian';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
