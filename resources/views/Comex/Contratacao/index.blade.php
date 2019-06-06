
@extends('adminlte::page')

@section('title', 'EsteiraComex - Solicitar Contratação')

@section('content_header')
    
    <h4 class="animated bounceInLeft">
        Esteira de Contratação | 
        <small>Contratação - Cadastro de demandas </small>
    </h4>
    
    <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Solicitar Atendimento </a></li>
            <li><a href="#"></i>Contratação</a></li>
    </ol>

@stop

@section('content')



<div class="container-fluid">

<div class="panel panel-default">

<div class="panel-body">


    <div class="page-bar">
        <h3>Contratação - Cadastro de Demanda</h3>
    </div>
<br>
    <form method="POST" action="/esteira-contratacao/backend/post_teste.php" enctype="multipart/form-data" id="formCadastroContratacao">

        <fieldset class="form-group row">
           
                <label class="col-sm-2 control-label">Tipo de Cliente:</label>
                <div class="col-sm-10">
                    <label class="radio-inline">PF</label>
                    <input class="radio-inline" name="escolheTipoPessoa" id="radioCpf" value="2" type="radio">

                    <label class="radio-inline">PJ</label>
                    <input class="radio-inline" name="escolheTipoPessoa" id="radioCnpj" value="3" type="radio" checked="checked" >
                </div>  <!--/col-->
        </fieldset>

        <div id="cpfCnpj2" class="form-group row desc" style="display: none;">
            <label class="col-sm-2 control-label">CPF:</label>
            <div class="col-sm-2">
                <input class="form-control mascaracpf" name="cpf" id="cpf" placeholder="CPF" maxlength="14" type="text">
            </div>
        </div>  <!--/cpfCnpj2-->

        <div id="cpfCnpj3" class="form-group row desc">
            <label class="col-sm-2 control-label">CNPJ:</label>
            <div class="col-sm-2">
                <input class="form-control mascaracnpj" name="cnpj" id="cnpj" placeholder="CNPJ" maxlength="18" type="text">
            </div>
        </div>  <!--/cpfCnpj3-->

        <div class="form-group row">
            <label class="col-sm-2 control-label">Nome:</label>
            <div class="col-sm-6">
                <input class="form-control" name="nomeCliente" id="nomeCliente" placeholder="Nome" type="text">
            </div>
        </div>  <!--/form-group row-->

    <hr>

        <div class="form-group row">
            <label class="col-sm-2 control-label">Tipo de Operação:</label>
            <div class="col-sm-4">
                <select class="form-control" id="tipoOperacao" placeholder="Selecione uma modalidade">
                    <option value="1">Nenhum</option>
                    <option value="2">Pronto Importação Antecipado</option>
                    <option value="3">Pronto Importação</option>
                    <option value="4">Pronto Exportação Antecipado</option>
                    <option value="5">Pronto Exportação</option>
                </select>
            </div>
        </div>  <!--/form-group row-->

        <div class="form-group row">
            <label class="col-sm-2 control-label">Tipo de Moeda:</label>
            <div class="col-sm-4">
                <select class="form-control" id="tipoMoeda" placeholder="Selecione uma moeda">
                    <option value="DKK">Coroa Dinamarquesa - DKK</option>
                    <option value="NOK">Coroa Norueguesa - NOK</option>
                    <option value="SEK">Coroa Sueca - SEK</option>
                    <option value="USD" selected="selected">Dólar Americano - USD</option>
                    <option value="AUD">Dólar Australiano - AUD</option>
                    <option value="CAD">Dólar Canadense - CAD</option>
                    <option value="NZD">Dólar Neozelandês - NZD</option>
                    <option value="EUR">Euro - EUR</option>
                    <option value="CHF">Franco Suíço - CHF</option>
                    <option value="JPY">Iene - JPY</option>
                    <option value="GBP">Libra Esterlina - GBP</option>
                    <option value="ARS">Peso Argentino - ARS</option>
                    <option value="ZAR">Rand Sul-Africano - ZAR</option>
                    <option value="BRL">Real Brasileiro - BRL</option>
                </select>
            </div>
        </div>  <!--/form-group row-->

        <div class="form-group row">
            <label class="col-sm-2 control-label">Valor em Moeda Estrangeira:</label>
            <div class="col-sm-4">
                <input class="form-control mascaradinheiro" name="valorOperacao" id="valorOperacao" placeholder="$ 0,00" maxlength="22" type="text">
            </div>
        </div>  <!--/form-group row-->

        <div class="form-group row">
            <label class="col-sm-2 control-label">Data Prevista de Embarque:</label>
            <div class="col-sm-2">
                <input class="form-control mascaradata" name="dataPrevistaEmbarque" id="dataPrevistaEmbarque" placeholder="DD/MM/AAAA" maxlength="10" type="text">
            </div>
        </div>  <!--/form-group row-->



        <hr>
        
        <div id="2" class="form-group desc3" style="display: none;"> <!---->

            <div class="form-group">
                <fieldset class="form-group row">
                   
                    <label class="col-sm-2 control-label">Os dados da conta do destinatário estão no documento enviado?</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">Sim</label>
                        <input class="radio-inline" name="temContaBeneficiarioAntecipado" id="temContaBeneficiarioAntecipadoSim" value="2" type="radio">
                        
                        <label class="radio-inline">Não</label>
                        <input class="radio-inline" name="temContaBeneficiarioAntecipado" id="temContaBeneficiarioAntecipadoNao" value="3" type="radio">
                    </div>  <!--/col-->
                </fieldset>
    
                <div id="contaBeneficiarioAntecipado3" class="form-group row desc2" style="display: none;"> <!---->
                    <label class="col-sm-2 control-label">Informe os dados bancários do beneficiário:</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="iban1" name="nomeBeneficiario" placeholder="Nome do Beneficiário" type="text">
                        <input class="form-control" id="iban2" name="nomeBanco" placeholder="Nome do Banco Beneficiário" type="text">
                        <input class="form-control" id="iban3" name="iban" placeholder="IBAN" type="text">
                        <input class="form-control" id="iban4" name="AgContaBeneficiario" placeholder="Conta" type="text">
                    </div>
                </div>  <!--/contaBeneficiarioAnt-->
            </div>  <!--/form-group-->
                   
            <div class="form-group row">
                <label class="col-sm-2 control-label">Documentação Necessária:</label>
                <div class="col-sm-3">
                    <ul class="list-group">
                        <li class="list-group-item padding17">- Invoice assinada</li>
                        <li class="list-group-item padding17">- Dados bancários</li>
                        <li class="list-group-item padding17">- Autorização SR</li>
                    </ul>
                </div>  <!--/col-->

                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item"> 
                            <div class="input-group">
                                <label class="input-group-btn">
                                    <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                        Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                    </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                            </div> 
                        </li>
                        <li class="list-group-item"> 
                            <div class="input-group">
                                <label class="input-group-btn">
                                    <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                        Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                    </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                            </div> 
                        </li>
                        <li class="list-group-item"> <div class="input-group">
                                <label class="input-group-btn">
                                    <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                        Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                    </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </li>
                    </ul>
                </div>  <!--/col-->

            </div><!--/form-group row-->
            
        </div>  <!--/#2-->

        <div id="3" class="form-group desc3" style="display: none;"> <!---->

            <div class="form-group">
                <fieldset class="form-group row">
                    
                    <label class="col-sm-2 control-label">Os dados da conta do destinatário estão no documento enviado?</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">Sim</label>
                        <input class="radio-inline" name="temContaBeneficiarioNormal" id="temContaBeneficiarioNormalSim" value="2" type="radio">

                        <label class="radio-inline">Não</label>
                        <input class="radio-inline" name="temContaBeneficiarioNormal" id="temContaBeneficiarioNormalNao" value="3" type="radio">
                    </div>  <!--/col-->
                </fieldset>
    
                <div id="contaBeneficiarioNormal3" class="form-group row desc2" style="display: none;">
                    <label class="col-sm-2 control-label">Informe os dados bancários do beneficiário:</label>
                    <div class="col-sm-6">
                    <input class="form-control" id="iban1" name="nomeBeneficiario" placeholder="Nome do Beneficiário" type="text">
                    <input class="form-control" id="iban2" name="nomeBanco" placeholder="Nome do Banco Beneficiário" type="text">
                    <input class="form-control" id="iban3" name="iban" placeholder="IBAN" type="text">
                    <input class="form-control" id="iban4" name="AgContaBeneficiario" placeholder="Conta" type="text">
                    </div>
                </div>  <!--/contaBeneficiarioNormal-->
            </div>  <!--/form-group-->                    

            <div class="form-group row">
                <label class="col-sm-2 control-label">Documentação Necessária:</label>
                <div class="col-sm-3">
                    <ul class="list-group">
                        <li class="list-group-item padding17">- Invoice</li>
                        <li class="list-group-item padding17">- Conhecimento de Embarque</li>
                        <li class="list-group-item padding17">- Declaração de Importação (DI)</li>
                        <li class="list-group-item padding17">- Dados bancários</li>
                        <li class="list-group-item padding17">- Autorização SR</li>
                    </ul>
                </div>  <!--/col-->

            <div class="col-sm-6">
                <ul class="list-group">
                    <li class="list-group-item"> 
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                    Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div> 
                    </li>
                    <li class="list-group-item"> 
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                    Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div> 
                    </li>
                    <li class="list-group-item"> <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                    Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </li>
                    <li class="list-group-item"> 
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                    Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>  
                    </li>
                    <li class="list-group-item">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                    Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div> 
                    </li>
                </ul>
            </div>  <!--/col-->

            </div><!--/form-group row-->

        </div>  <!--/#3-->

        <div id="4" class="form-group row desc3" style="display: none;"> <!---->          
            <label class="col-sm-2 control-label">Documentação Necessária:</label>
            <div class="col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item padding17">- Invoice assinada</li>
                    <li class="list-group-item padding17">- Autorização SR</li>
                </ul>
            </div>  <!--/col-->

            <div class="col-sm-6">
                <ul class="list-group">
                    <li class="list-group-item"> 
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                    Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>  
                    </li>
                    <li class="list-group-item">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                    Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div> 
                    </li>
                </ul>
            </div>  <!--/col-->

        </div>  <!--/#4-->

        <div id="5" class="form-group row desc3" style="display: none;"> <!---->          
            <label class="col-sm-2 control-label">Documentação Necessária:</label>
            <div class="col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item padding17">- Invoice</li>
                    <li class="list-group-item padding17">- Conhecimento de Embarque</li>
                    <li class="list-group-item padding17">- Declaração Única de Exportação (DU-E)</li>
                    <li class="list-group-item padding17">- Autorização SR</li>
                </ul>
            </div>  <!--/col-->

            <div class="col-sm-6">
                <ul class="list-group">
                    <li class="list-group-item"> 
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                    Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div> 
                    </li>
                    <li class="list-group-item"> <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                    Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </li>
                    <li class="list-group-item"> 
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                    Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>  
                    </li>
                    <li class="list-group-item">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"> <i class="fa fa-lg fa-cloud-upload"></i>
                                    Carregar arquivo&hellip; <input type="file" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" name="invoice_[]" id="invoiceImpAnt" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div> 
                    </li>
                </ul>
            </div>  <!--/col-->

        </div>  <!--/#5-->
            

        <input id="matricula" name="matricula" type="hidden"> 
        
        <!-- <br>
            
        <div class="file-loading">
            <input id="invoiceImpAnt" name="invoice_[]" type="file" multiple="multiple">
        </div>

        <br> -->


        <div class="form-group row">
            <div class="col-sm-2">
                <button type="submit" name="submit" id="submitBtn" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    
    </form>

</div>  <!--panel-body-->

</div>  <!--panel panel-default-->

</div>  <!--container-fluid-->


@stop






@section('css')
    <link href="{{ asset('css/contratacao/cadastro.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <!-- 
    <link href="{{ asset('public/js/plugins/kartik-v-bootstrap-fileinput-226d7e0/css/fileinput.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/js/plugins/kartik-v-bootstrap-fileinput-226d7e0/themes/explorer/theme.css') }}" rel="stylesheet"/>
     -->


@stop

@section('js')
    <script src="{{ asset('js/plugins/jquery/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/plugins/numeral/numeral.min.js') }}"></script>

<!-- 
    <script src="{{ asset('public/js/plugins/kartik-v-bootstrap-fileinput-226d7e0/js/plugins/piexif.min.js') }}"></script>
    <script src="{{ asset('public/js/plugins/kartik-v-bootstrap-fileinput-226d7e0/js/plugins/sortable.min.js') }}"></script>
    <script src="{{ asset('public/js/plugins/kartik-v-bootstrap-fileinput-226d7e0/js/fileinput.min.js') }}"></script>
    <script src="{{ asset('public/js/plugins/kartik-v-bootstrap-fileinput-226d7e0/js/locales/pt-BR.js') }}"></script>
    <script src="{{ asset('public/js/plugins/kartik-v-bootstrap-fileinput-226d7e0/themes/fa/theme.js') }}"></script>
    <script src="{{ asset('public/js/plugins/kartik-v-bootstrap-fileinput-226d7e0/themes/fas/theme.js') }}"></script>
    <script src="{{ asset('public/js/plugins/kartik-v-bootstrap-fileinput-226d7e0/themes/explorer/theme.js') }}"></script>
 -->

    <script src="{{ asset('js/plugins/masks/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/contratacao/funcoes_cadastro.js') }}"></script>
    <script src="{{ asset('js/contratacao/post_cadastro.js') }}"></script>


    <!-- <script src="carrega_json_matricula_hidden.js"></script> -->
    <!-- <script src="assets/js/shared/site.js"></script> -->





@stop