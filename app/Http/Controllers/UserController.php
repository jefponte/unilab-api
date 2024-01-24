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

        if (env('APP_ENV') != "production") {
            $user->email = "dadosofuscados@unilab.edu.br";
            $user->passaporter = null;
            $user->cpf_cnpj = null;
            $user->passaporte = null;
            $user->siape = 0;
        }

        return $user;
    }
    public function bond(Request $request)
    {
        $idUsuario = Auth::user()->id_usuario;
        $sql = "SELECT * FROM vw_usuarios_catraca
        WHERE id_usuario = $idUsuario
        LIMIT 100";
        $retorno = DB::connection('sigaa')->select($sql);
        if (env('APP_ENV') != "production") {
            foreach ($retorno as $item) {
                $item->email = "dadosofuscados@unilab.edu.br";
                $item->identidade = null;
                $item->cpf_cnpj = null;
                $item->passaporte = null;
                $item->senha = null;
                $item->matricula_disc = null;
                $item->nivel_discente = null;
                $item->id_status_discente = null;
                $item->status_discente = null;
                $item->id_curso = null;
                $item->nome_curso = null;
                $item->id_turno = null;
                $item->turno = null;
                $item->id_servidor = null;
                $item->siape = 0;

                $item->id_unidade = null;
                $item->descricao_unidade = null;
                $item->sigla_unidade = null;
                $item->data_nascimento = null;
                $item->genero = null;
                $item->ingresso = null;
                $item->codigo_area_nacional_telefone_fixo = null;
                $item->telefone_fixo = null;
                $item->codigo_area_nacional_telefone_celular = null;
                $item->telefone_celular = null;
                $item->nacionalidade = null;
            }
        }
        // if (env('APP_ENV') != "production") {
        //     $ofuscado = [];
        //     foreach ($retorno as $item) {
        //         $ofuscado[] = [
        //             'id_pessoa' => $item->id_pessoa,
        //             'id_usuario' => $item->id_usuario,
        //             'nome' => $item->nome,
        //             'email' => "dadosofuscados@unilab.edu.br",
        //             'login' => $item->login,
        //             'id_servidor' => $item->id_servidor,
        //             'siape' => 0,
        //             'tipo_usuario' => $item->tipo_usuario,
        //             'categoria' => $item->categoria,
        //             'status_sistema' => $item->status_sistema,
        //             'descricao_unidade' => $item->descricao_unidade,
        //             'sigla_unidade' => $item->sigla_unidade,
        //             'data_nascimento' => null,
        //             'genero' => null,
        //             'nacionalidade' => $item->nacionalidade
        //             // Adicione mais campos não sensíveis conforme necessário
        //         ];
        //     }
        //     $retorno = $ofuscado;
        // }


        return $retorno;
    }
}
