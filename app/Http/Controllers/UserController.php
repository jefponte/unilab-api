<?php
namespace App\Http\Controllers;

use App\Models\Bond;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends BaseController
{
    public function __construct()
    {
        $this->classe = User::class;
    }
    /**
     * Busca usuário autenticado.
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $user = $this->classe::query()->where('id_usuario', Auth::user()->id_usuario)->first();
        return $user;

    }
    public function bond(Request $request){
        $idUsuario = Auth::user()->id_usuario;
        $sql = "SELECT * FROM vw_usuarios_catraca
        WHERE id_usuario = $idUsuario
        LIMIT 100";
        $retorno = DB::connection('sigaa')->select($sql);
        return $retorno;
    }
}
