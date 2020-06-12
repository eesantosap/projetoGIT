<?php require_once("header.php"); ?>

<!--*************SEÇÃO 01**************-->

      <div class="col-sm">
        <div class="form-group">
          <label for="form1">Número de CPF</label>
          <input type="text" class="form-control" id="form1" placeholder="023.345.092-03" disabled>
        </div>
        <div class="form-group">
          <label for="form2">Nome Completo</label>
          <input type="text" class="form-control" id="form2" placeholder="FULANO DE TAL" disabled>
        </div>
        <div class="form-group">
          <label for="form3">Número do Registro Geral</label>
          <input type="text" class="form-control" id="form3" placeholder="Digite...">
        </div>
        <div><label class="form-group">Dados do RG</label></div>
        <div class="form-inline">
          <div class="form-group mr-4">
            <label class="mr-2" for="seleciona1">Emissor</label>
            <select class="custom-select" id="seleciona1">
              <option value="1" selected="1">SSP</option>
              <option value="2">POC</option>
            </select>
          </div>
          <div class="form-group">
            <label class="mr-2" for="seleciona2">UF</label>
            <select class="custom-select" id="seleciona2">
              <option value="1">AC</option>
              <option value="2">AL</option>
              <option value="3" selected="3">AP</option>
              <option value="4">AM</option>
              <option value="5">BA</option>
              <option value="6">CE</option>
              <option value="7">ES</option>
              <option value="8">GO</option>
              <option value="9">MA</option>
              <option value="10">MT</option>
              <option value="11">MS</option>
              <option value="12">MG</option>
              <option value="14">PA</option>
              <option value="15">PB</option>
              <option value="16">PR</option>
              <option value="17">PE</option>
              <option value="18">PI</option>
              <option value="19">RJ</option>
              <option value="20">RN</option>
              <option value="21">RS</option>
              <option value="22">RO</option>
              <option value="23">RR</option>
              <option value="24">SC</option>
              <option value="25">SP</option>
              <option value="26">SE</option>
              <option value="27">TO</option>
              <option value="28">DF</option>
            </select>
          </div>
        </div>
        <div class="form-group mt-2">
          <label for="form5">Data de emissão do RG</label>
          <input type="date" class="form-control" id="form4">
        </div>
      </div>

<!--*************SEÇÃO 02**************-->
  
      <div class="col-sm">
        <div class="form-group">
          <label for="seleciona3">CARGO</label>
          <select class="custom-select" id="seleciona3">
            <option value="1" selected="1">Professor</option>
            <option value="2">Pedagogo</option>
            <option value="3">Secretário Escolar</option>
            <option value="4">Especialista em Educação</option>
            <option value="5">Assistente Administrativo</option>
            <option value="6">Auxiliar Administrativo</option>
            <option value="7">Analista Administrativo</option>
          </select>
        </div>
        <div class="form-group">
          <label for="form6">Matrícula/SIAFE</label>
          <input type="text" class="form-control" id="form6" placeholder="00235467-4-01" disabled>
        </div>
        <div><label class="form-group mb-1 p-1">Classificação</label></div>
        <div class="form-inline">
          <div class="form-group mr-1">
            <label class="mr-2" for="form6">Nível</label>
            <input type="text" class="form-control" id="form6" size="4" maxlength="4" placeholder="M4E" disabled>
          </div>
          <div class="form-group">
            <label class="mr-2" for="form7">Referência</label>
            <input type="text" class="form-control" id="form7" size="2" maxlength="2" placeholder="17" disabled>
          </div>
        </div>
        <div>
          <label class="mt-3" for="seleciona4">VÍNCULO</label>
          <select class="custom-select" id="seleciona4">
            <option value="1" selected="1">Efetivo Estadual</option>
            <option value="2">Efetivo Federal</option>
            <option value="3">Efetivo Federal com DE</option>
            <option value="4">Efetivo Estadual Indígena</option>
            <option value="5">Efetivo com abono de Permanência</option>
          </select>
        </div> 
        <div class="form-group mt-2"><label>Possui cargo comissionado?</label></div>
        <div class="form-inline">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="comissionado" id="gridRadios1"
          value="1" checked>
          <label class="form-check-label mr-2" for="gridRadios1">
            Sim
          </label>
        </div>
        <div class="form-check mr-4">
          <input class="form-check-input" type="radio" name="comissionado" id="gridRadios2" 
          value="2">
          <label class="form-check-label mr-2" for="gridRadios2">
            Não
          </label>
        </div>
        </div>
      </div>
  
<!--*************SEÇÃO 03**************-->

      <div class="col-sm">
        <div class="form-group">
          <label for="form8">Qual cargo comissionado?</label>
          <input type="text" class="form-control" id="form8" placeholder="Digite...">
        </div>
        <div class="mb-3">
          <label for="seleciona5">Qual grafificação?</label>
          <select class="custom-select" id="seleciona5">
            <option value="1" selected="1">CDS-1</option>
            <option value="2">CDS-2</option>
            <option value="3">CDS-3</option>
            <option value="4">CDS-4</option>
            <option value="5">CDS-5</option>
            <option value="2">CDI-1</option>
            <option value="3">CDI-2</option>
            <option value="4">CDI-3</option>
          </select>
        </div> 
        <div class="form-group">
          <label for="form9">e-Email</label>
          <input type="email" class="form-control" id="form9" placeholder="Digite...">
        </div>
        <div class="form-group">
          <label for="form10">Nome da Mãe</label>
          <input type="email" class="form-control" id="form10" placeholder="Digite...">
        </div>
        <div class="form-group">
          <label for="form11">Nome do Pai</label>
          <input type="email" class="form-control" id="form11" placeholder="Digite...">
        </div>
      </div>

<!--*************FIM DAS SEÇÕES**************-->
<?php require_once("footer.php"); ?>
<div class="botaoright">
<a href="pagina2.php" class="btn btn-secondary btn-sm active" 
role="button" aria-pressed="true">Avançar(2)</a>
</div>