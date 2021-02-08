<?php

namespace App\Http\Controllers;
use App\Models\Agendamento;
use App\Models\Banca;
use App\Models\Config;
use App\Models\Docente;
use Illuminate\Http\Request;
use App\Utils\ReplicadoUtils;

class EmailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //Função que exibe apenas uma view com os dados a serem copiados e enviados via e-mail para a tesouraria. Automatização desse processo será realizada mais para frente.
    public function reciboExterno(Agendamento $agendamento, Banca $banca, Request $request){
        $this->authorize('admin');
        $dados = $request;
        $agendamento->formatDataHorario($agendamento);
        $docente = Docente::where('n_usp', $banca->codpes)->first();
        $agendamento->nome_area = ReplicadoUtils::nomeAreaPrograma($agendamento->area_programa);
        $configs = Config::orderbyDesc('created_at')->first();
        return view('agendamentos.recibos.recibo_externo', compact(['agendamento','docente','dados','configs']));
    }

    //Função que exibe apenas uma view com os dados a serem copiados e enviados via e-mail para o docente. Automatização desse processo será realizada mais para frente.
    public function emailDocente(Agendamento $agendamento, Banca $banca, Request $request){
        $this->authorize('admin');
        $dados = $request;
        $agendamento->formatDataHorario($agendamento);
        $docente = Docente::where('n_usp', $banca->codpes)->first();
        $agendamento->nome_area = ReplicadoUtils::nomeAreaPrograma($agendamento->area_programa);
        $configs = Config::setConfigEmail($agendamento,$banca);
        return view('agendamentos.recibos.email', compact(['agendamento','docente','dados','configs']));
    }
}
