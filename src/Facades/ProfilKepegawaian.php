<?php namespace Bantenprov\ProfilKepegawaian\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The ProfilKepegawaian facade.
 *
 * @package Bantenprov\ProfilKepegawaian
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilKepegawaian extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'profil-kepegawaian';
    }
}
