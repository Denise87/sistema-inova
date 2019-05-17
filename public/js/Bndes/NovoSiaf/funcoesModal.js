//carrega as informações do contrato para visulaizar
function visualizaDemanda(json){ //Dê, eu alterei o nome dessa função pois ela estava dando conflito com a de visualizar dados do contrato para cadastro de demanda
       
    $.get( '../api/bndes/v2/siaf_amortizacoes/' + json, function(dados) {

            var dados = JSON.parse(dados);
            // console.log(dados);
            for(i = 0; i < dados.consultaSaldo.length; i++){
                linha = montaLinhaTabelaSaldo(dados.consultaSaldo[i]);
                
                $('#tabHistoricoSaldo>tbody').append(linha);
               
                 //pinta a linha de acordo com o status do historico do saldo
                 if(dados.consultaSaldo[i].statusSaldo == "Saldo Ok"){
                    $('.linhaConsulta'+[i]).addClass('corEfeitoSaldoOk');
                }
                else{
                    $('.linhaConsulta'+[i]).addClass('corEfeitoSemSaldo');
                }
            
            }              
            function montaLinhaTabelaSaldo(dadosSaldo)
            {
                bDestroy= true;

                linha = '<tr>' +
                            // '<td hidden>' + dadosSaldo.codigoConsultaSaldo + '</td>' +
                            '<td>' + dadosSaldo.dataConsultaSaldo + '</td>' +
                            '<td class="linhaConsulta'+[i]+'">' + dadosSaldo.statusSaldo + '</td>' +
                            '<td>' + dadosSaldo.saldoDisponivel + '</td>' +
                            '<td>' + dadosSaldo.saldoBloqueado + '</td>' +
                            '<td>' + dadosSaldo.LimiteChequeAzul + '</td>' +
                            '<td>' + dadosSaldo.LimiteGim + '</td>' +
                            '<td class="linhaConsulta'+[i]+'">' + dadosSaldo.saldoTotal + '</td>' +
                        '</tr>';
                return linha;

           
            }
             
            for(i = 0; i < dados.historicoContrato.length; i++){
                linha = montaLinhaTabelaHistorico(dados.historicoContrato[i]);
                
                $('#tabHistoricoContrato>tbody').append(linha);
                $('#obs_modal').html(dados.historicoContrato[i].observacaoHistorico);

              
            }              
            function montaLinhaTabelaHistorico(dadosHistorico)
            {
                bDestroy= true;
                linha = '<tr>' +
                            '<td>' + dadosHistorico.codigoHistorico + '</td>' +
                            '<td>' + dadosHistorico.dataHistorico + '</td>' +
                            '<td>' + dadosHistorico.statusHistorico + '</td>' +
                            '<td>' + dadosHistorico.observacaoHistorico + '</td>' +
                            '<td>' + dadosHistorico.matriculaResponsavel + '</td>' +
                            '<td>' + dadosHistorico.unidadeResponsavel + '</td>' +
                           
                        '</tr>';
                return linha;
             
            }
              
            $('#nome_cliente_modal').html(dados.nomeCliente);
            $('#cnpj_cliente_modal').html(dados.cnpj.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, "$1.$2.$3/$4-$5"));
            $('#status_modal').val(dados.status);
            $('#contrato_caixa_modal').val(dados.contratoCaixa);
            $('#contrato_bndes_modal').val(dados.contratoBndes);
            $('#conta_corrente_modal').val(dados.contaDebito);
            $('#tipo_modal').val(dados.tipoOperacao);
            $('#valor_modal').val(dados.valorOperacao);
            $('#pv_modal').val(dados.codigoPa);
            $('#sr_modal').val(dados.codigoSr);
            $('#gigad_modal').val(dados.codigoGigad);
            $('#gigad_modal').val(dados.codigoGigad);

     
jQuery('#visualizarcontrato').on('hidden.bs.modal', function (e) {
jQuery(this).removeData('#tabHistoricoSaldo>tbody');
jQuery(this).find('#tabHistoricoSaldo>tbody').empty();
jQuery(this).removeData('#tabHistoricoContrato>tbody');
jQuery(this).find('#tabHistoricoContrato>tbody').empty();
})
});  



$('#visualizarcontrato').modal('show');

}   

//carrega as informações do contrato para editar
function editarContrato(json){
    
$.get( '../api/bndes/v2/siaf_amortizacoes/' + json, function(dados) {

    var dados = JSON.parse(dados);
    // console.log(dados);
    for(i = 0; i < dados.consultaSaldo.length; i++){
        linha = montaLinhaTabelaSaldo(dados.consultaSaldo[i]);
        
   
        $('#tabConsultaSaldoEditar>tbody').append(linha);
    }              
    function montaLinhaTabelaSaldo(dadosSaldo)
    {
        bDestroy= true;

        linha = '<tr>' +
                    '<td hidden>' + dadosSaldo.codigoConsultaSaldo + '</td>' +
                    '<td>' + dadosSaldo.dataConsultaSaldo + '</td>' +
                    '<td>' + dadosSaldo.statusSaldo + '</td>' +
                    '<td>' + dadosSaldo.saldoDisponivel + '</td>' +
                    '<td>' + dadosSaldo.saldoBloqueado + '</td>' +
                    '<td>' + dadosSaldo.LimiteChequeAzul + '</td>' +
                    '<td>' + dadosSaldo.LimiteGim + '</td>' +
                    '<td>' + dadosSaldo.saldoTotal + '</td>' +
                '</tr>';
        return linha;

   
    }
     
    for(i = 0; i < dados.historicoContrato.length; i++){
        linha = montaLinhaTabelaHistorico(dados.historicoContrato[i]);
        
        $('#tabConsultaHistoricoEditar>tbody').append(linha);
    }              
    function montaLinhaTabelaHistorico(dadosHistorico)
    {
        bDestroy= true;
        linha = '<tr>' +
                    '<td>' + dadosHistorico.codigoHistorico + '</td>' +
                    '<td>' + dadosHistorico.dataHistorico + '</td>' +
                    '<td>' + dadosHistorico.statusHistorico + '</td>' +
                    '<td>' + dadosHistorico.observacaoHistorico + '</td>' +
                    '<td>' + dadosHistorico.matriculaResponsavel + '</td>' +
                    '<td>' + dadosHistorico.unidadeResponsavel + '</td>' +
                   
                '</tr>';
        return linha;
     
    }
      

    $('#codDemanda').val(dados.codigoDemanda);
    $('#nome_cliente_editar').html(dados.nomeCliente);
    $('#cnpj_cliente_editar').html(dados.cnpj.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, "$1.$2.$3/$4-$5"));
    $('#status_editar').val(dados.status);
    $('#contrato_caixa_editar').val(dados.contratoCaixa);
    $('#contrato_bndes_editar').val(dados.contratoBndes);
    $('#conta_corrente_editar').val(dados.contaDebito);
    $('#tipo_editar').val(dados.tipoOperacao);
    $('#valor_editar').val(dados.valorOperacao);
    $('#pv_editar').val(dados.codigoPa);
    $('#sr_editar').val(dados.codigoSr);
    $('#gigad_editar').val(dados.codigoGigad);
    $('#lote').val(dados.loteDataTable);


        jQuery('#editarcontrato').on('hidden.bs.modal', function (e) {
        jQuery(this).removeData('#tabConsultaSaldoEditar>tbody');
        jQuery(this).find('#tabConsultaSaldoEditar>tbody').empty();
        jQuery(this).removeData('#tabConsultaHistoricoEditar>tbody');
        jQuery(this).find('#tabConsultaHistoricoEditar>tbody').empty();
        jQuery(this).find('textarea#observacaoContrato').val('');
        })
    });  



$('#editarcontrato').modal('show');

}   
