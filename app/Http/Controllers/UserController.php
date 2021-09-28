<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $user = $this->classe::query()->where('id', Auth::user()->id)->first();
        return $user;
    }
}
