<?php namespace Bantenprov\ProfilKepegawaian\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\ProfilKepegawaian\Facades\ProfilKepegawaian;
use Bantenprov\ProfilKepegawaian\Models\ProfilKepegawaianModel;

/**
 * The ProfilKepegawaianController class.
 *
 * @package Bantenprov\ProfilKepegawaian
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilKepegawaianController extends Controller
{
    public function demo()
    {
        return ProfilKepegawaian::welcome();
    }
}
