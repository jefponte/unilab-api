<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function listUnits(Request $request)
    {
        // Consulta agrupando por id_unidade
        $units = DB::connection('sigaa')
            ->table('vw_usuarios_catraca')
            ->select('id_unidade', 'descricao_unidade', 'sigla_unidade')
            ->groupBy('id_unidade', 'descricao_unidade', 'sigla_unidade')
            ->get();

        return response()->json($units);
    }
    public function listLogins(Request $request)
    {
        // Consulta agrupando por id_usuario
        $logins = DB::connection('sigaa')
            ->table('vw_usuarios_catraca')
            ->select('id_usuario', 'login')
            ->groupBy('id_usuario', 'login')
            ->get();

        return response()->json($logins);
    }
}
