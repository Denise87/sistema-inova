
@extends('adminlte::page')

@section('title', 'Esteira Comex')

@section('content_header')

<div class="panel-body padding015">
    <h4 class="animated bounceInLeft  pull-left">
        Introdução | 
        <small>Workflow para rotinas de comércio exterior </small>
    </h4>
    
    <ol class="breadcrumb pull-right">
            <li><a href="/esteiracomex"><i class="fa fa-map-signs"></i>     Introdução</a></li>
    </ol>
</div>

@stop


@section('content')

<div class="container-fluid">

<div class="panel panel-default">

<div class="panel-body">
    @if (session('acessoNegado'))
        <div class="box box-solid box-warning">
                <div class="box-header">
                    <h3 class="box-title"><strong>{{ session('acessoNegado') }}</strong> </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    A página requisitada não pode ser exibida.
                </div><!-- /.box-body -->
        </div>
        @endif

    <div class="page-bar">
        <h3>Mapa do site - Esteira Comex
            <br>
            <br>
            <small class="text-left">Prezado colega, seja bem vindo à Esteira Comex! Acesse o FAQ e tire suas dúvidas no link:
            <a href="https://wiki.caixa/wiki/index.php/FAQ_liquida%C3%A7%C3%A3o_Comex" class="text-left">wiki.caixa</a>.
            <br>
            Navegue pelo site através do menu lateral ou dos links abaixo:</small>
            <!-- No Menu lateral você pode encontrar os itens abaixo em destaque: -->
        </h3>
    </div>

<br>

<div class="row">

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4> 
                    <i class="fa fa-sign-in"> </i> Solicitar Atendimento
                    <br>
                    <small>Cadastrar novas demandas dos serviços abaixo:</small>
                </h4>
            </div>
            <div class="panel-body">
                <h4> 
                    <a href="/esteiracomex/solicitacoes/cadastraemailop"><i  class="fa fa-at"></i>     Atualizar e-mail cliente</a>
                    <br>
                    <small>Aviso automático de chegada de Ordem de Pagamento diretamente para o cliente. </small>
                </h4> 
                <hr class="pontilhado">
                <h4> 
                    <a href="http://www.geopc.mz.caixa/esteiracomex/lista_contratos.php"><i  class="fa fa-fast-forward"></i>     Conformidade Antecipados</a> 
                    <br>
                    <small>Envio de comprovação de embarque de contrato antecipado. </small>
                </h4>
                <hr class="pontilhado">
                <h4> 
                    <a href="/esteiracomex/contratacao"><i  class="fa fa-file"></i>     Contratação - Pronto</a> 
                    <span class="pull-right-container"><small class="label pull-right bg-green padding7">NOVO</small></span>
                    <br>
                    <small>Cadastrar nova contratação de câmbio pronto. </small>
                </h4> 
                <hr class="pontilhado">
                <h4> 
                    <a href="http://www.geopc.mz.caixa/esteiracomex/lista_acc.php"><i  class="fa fa-ship"></i>     Liquidação ACC/ACE</a> 
                    <span class="pull-right-container"><small class="label pull-right bg-orange padding7"><i  class="fa fa-exclamation-triangle"></i> Saldo devedor dos contratos <br> atualizado em 18/06/2019</small></span>
                    <br>
                    <small>Solicitar liquidação de contrato. </small>
                </h4> 
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4> 
                    <i class="fa fa-bar-chart"> </i> Indicadores
                    <br>
                    <small>Acompanhar os índices da CEOPC abaixo:</small>
                </h4>
            </div>
            <div class="panel-body">
                <h4> 
                    <a href="http://www.geopc.mz.caixa/esteiracomex/indicadores_pronto_impexp.php"><i  class="fa fa-bar-chart"></i>     Antecipados</a>
                    <br>
                    <small>Acompanhamento dos resultados dos contratos antecipados. </small>
                </h4> 
                <hr class="pontilhado">
                <h4> 
                    <a href="/esteiracomex/indicadores/comex"><i  class="fa fa-bar-chart"></i>     COMEX</a> 
                    <br>
                    <small>Dados e Estatísticas dos prazos para análise. </small>
                </h4> 
                <hr class="pontilhado">
                <h4> 
                    <a href="http://conquiste.caixa/2019/index.html#/unidade/5459/201906"><i  class="fa fa-bar-chart"></i>     Conquiste</a> 
                    <br>
                    <small>Avaliação da CEOPC. </small>
                </h4> 
                <hr class="pontilhado">
                <h4> 
                    <a href="/esteiracomex/indicadores/middle"><i  class="fa fa-bar-chart"></i>     Middle Office</a> 
                    <br>
                    <small>Dados e Estatísticas dos prazos de análise. </small>
                </h4>
            </div>
        </div>
    </div>



    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4> 
                    <i class="fa fa-files-o"></i> Acompanhamentos
                    <br>
                    <small>Consultar o andamento dos serviços abaixo:</small>
                </h4>
            </div>
            <div class="panel-body">
                <h4> 
                    <a href="http://www.geopc.mz.caixa/esteiracomex/acompanha_acc.php"><i  class="fa fa-ship"></i>     ACC/ACE</a> 
                    <br>
                    <small>Acompanhar as liquidações de cambiais. </small>
                </h4> 
                <hr class="pontilhado">
                <h4> 
                    <a href="http://www.geopc.mz.caixa/esteiracomex/finalizadas.php"><i  class="fa fa-ship"></i>     ACC/ACE - Liquidadas</a> 
                    <br>
                    <small>Consultar as cambiais liquidadas. </small>
                </h4> 
                <hr class="pontilhado">
                <h4> 
                    <a href="/esteiracomex/contratacao/demandas"><i  class="fa fa-file"></i>     Contratação - Pronto</a> 
                    <span class="pull-right-container"><small class="label pull-right bg-green padding7">NOVO</small></span>
                    <br>
                    <small>Acompanhar as demandas de contratação de câmbio pronto. </small>
                </h4> 
                <hr class="pontilhado">
                <h4> 
                    <a href="/esteiracomex/distribuir/demandas"><i  class="fa fa-envelope"></i>     Minhas Demandas</a> 
                    <br>
                    <small>Consultar demandas de todos os serviços abertas pela sua unidade. </small>
                </h4> 
                <hr class="pontilhado">
                <h4> 
                    <a href="http://www.geopc.mz.caixa/esteiracomex/acompanha_conformidade.php"><i  class="fa fa-fast-forward"></i>     Operações Antecipadas</a> 
                    <br>
                    <small>Acompanhar status de comprovação de embarque ou alteração de data prevista de embarque. </small>
                </h4> 
                <hr class="pontilhado">
                <h4> 
                    <a href="http://www.geopc.mz.caixa/esteiracomex/opes_enviadas.php"><i  class="fa fa-money"></i>     Ordens de Pagamento</a> 
                    <br>
                    <small>Consultar ordens de pagamento do exterior. </small>
                </h4> 
                <hr class="pontilhado">
                <h4>
                    <a href="http://www.geopc.mz.caixa/esteiracomex/gerencial_gecam.php"><i  class="fa fa-gavel"></i>     GECAM</a> 
                    <br>
                    <small>Acompanhar contratos com status de Cliente Suspenso ou Bloqueados. </small>
                </h4> 
            </div>
        </div>
    </div>  

</div>  <!--row-->

 
<!-- <div class="page-bar">

        <h3>Acesse o FAQ e tire suas dúvidas no link:
            <a href="http://wiki.caixa" class="text-left">wiki.caixa</a>
        </h3>

</div>  -->
 





</div>  <!--panel-body-->

</div>  <!--panel panel-default-->

</div>  <!--container-fluid-->

@stop


@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
    <link href="{{ asset('css/contratacao/cadastro.css') }}" rel="stylesheet">
@stop


@section('js')

@stop