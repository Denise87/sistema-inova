<?php

namespace App\Http\Controllers\Sistemas;

use App\Empregado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Classes\Geral\Ldap;
use App\AcessaEmpregado;

class EmpregadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empregado  $empregado
     * @return \Illuminate\Http\Response
     */
    public function show(Empregado $empregado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empregado  $empregado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empregado $empregado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empregado  $empregado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empregado $empregado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empregado  $empregado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empregado $empregado)
    {
        //
    }

    public function dadosEmpregado()
    {
        $usuario = new Ldap;
        $empregado = Empregado::find($usuario->getMatricula());
        $empregadoAcesso = DB::table('tbl_EMPREGADOS')
                            ->join('tbl_ACESSA_EMPREGADO', 'tbl_EMPREGADOS.matricula', '=', 'tbl_ACESSA_EMPREGADO.matricula')
                            ->select('tbl_EMPREGADOS.matricula','tbl_EMPREGADOS.nomeCompleto', 'tbl_EMPREGADOS.nomeFuncao', 'tbl_EMPREGADOS.codigoLotacaoAdministrativa', 'tbl_EMPREGADOS.nomeLotacaoAdministrativa', 'tbl_EMPREGADOS.codigoLotacaoFisica', 'tbl_EMPREGADOS.nomeLotacaoFisica',  'tbl_ACESSA_EMPREGADO.nivelAcesso')
                            // ->select('tbl_empregados.matricula', 'tbl_empregados.nome_completo', 'tbl_empregados.nome_funcao', 'tbl_empregados.codigo_lotacao_administrativa',  'tbl_acessa_empregado.nivel_acesso')
                            ->where('tbl_ACESSA_EMPREGADO.matricula', '=', $usuario->getMatricula())
                            ->get();
            // $empregado->acessoEmpregado()
            // ->with('empregado')
            // ->join('empregado', 'empregado.matricula', '=', 'acessaEmpregado.matricula')
            // ->get(['empregado.*', 'acessaEmpregado.nivel_acesso']);
        return json_encode($empregadoAcesso, JSON_UNESCAPED_SLASHES);
    }
}
