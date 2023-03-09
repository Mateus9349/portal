<?php 
require_once("verificar.php");
require_once("../conexao.php");
$pag = 'oleo';


?>

<button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Novo Processo</button>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					<small>
					<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="recepcion-tab" data-toggle="tab" href="#recepcion" role="tab" aria-controls="recepcion" aria-selected="true">Recepção</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="higienizacao-tab" data-toggle="tab" href="#higienizacao" role="tab" aria-controls="higienizacao" aria-selected="false">Higienização</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="secagem-tab" data-toggle="tab" href="#secagem" role="tab" aria-controls="secagem" aria-selected="false">Secagem</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="despolpa-tab" data-toggle="tab" href="#despolpa" role="tab" aria-controls="despolpa" aria-selected="false">Despolpa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="presagem-tab" data-toggle="tab" href="#presagem" role="tab" aria-controls="presagem" aria-selected="false">Prensagem</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="filtragem-tab" data-toggle="tab" href="#filtragem" role="tab" aria-controls="filtragem" aria-selected="false">Filtragem</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="destilacao-tab" data-toggle="tab" href="#destilacao" role="tab" aria-controls="destilacao" aria-selected="false">Destilação</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="resultados-tab" data-toggle="tab" href="#resultados" role="tab" aria-controls="resultados" aria-selected="false">Resultados</a>
    </li>
  </ul>
</small>
				</h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -40px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
<form method="post" id="form-text">
	<div class="modal-body" style="margin-top: -20px">

					

					<div class="tab-content" id="myTabContent">


						<div class="tab-pane fade" id="recepcion" role="tabpanel" aria-labelledby="recepcion-tab">
							<br>
							 <h4>Recepção</h4>
							<div class="row">
								
								<hr>
								<h4>materia-prima</h4>
								<br>

								<!--<div class="col-md-3">						
									<div class="form-group"> 
										<label>Corretor*</label> 
										<select class="form-control sel2" name="corretor" id="corretor" required style="width:100%;"> 
											<?php 
											if($nivel_usu == 'Corretor'){
												$query = $pdo->query("SELECT * FROM usuarios where id = '$id_usuario' order by id asc");
											}else{
												$query = $pdo->query("SELECT * FROM usuarios where nivel = 'Corretor' or nivel = 'Administrador' order by id asc");
											}

											$res = $query->fetchAll(PDO::FETCH_ASSOC);
											for($i=0; $i < @count($res); $i++){
												foreach ($res[$i] as $key => $value){}

													?>	
												<option value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?></option>

											<?php } ?>

										</select>
									</div>					
								</div>-->

								<div class="col-md-3">
								<div class="form-group"> 
									<label>Data da Entrada</label> 
									<input type="date" class="form-control" name="data_entrada" id="data-entrada" placeholder="" > 
								</div>
							</div>


									<div class="col-md-3">
										<div class="form-group"> 
											<label>Matéria-prima</label> 
											<input type="text" class="form-control" name="materia" id="materia" placeholder="" > 
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group"> 
											<label>Produtor/Extrativista</label> 
											<input type="text" class="form-control" name="produtor" id="produtor" placeholder="" > 
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group"> 
											<label>Local de Coleta</label> 
											<input type="text" class="form-control" name="local" id="local" placeholder="" > 
										</div>
									</div>





									

							<div class="row">

															
							<div class="col-md-3">
								<div class="form-group"> 
									<label>Quantidade</label> 
									<input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="" > 
								</div>
							</div>
										<div class="col-md-3">						
										<div class="form-group"> 
											<label>Unidade de Medida</label> 
											<select class="form-control" name="medida" id="medida" required>
												<option value="Quilo">Kg</option>
												<option value="Litro">L</option>
											</select> 
										</div>						
										</div>

										<div class="col-md-3">
								<div class="form-group"> 
									<label>Valor total</label> 
									<input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="" > 
								</div>
							</div>
							

							</div>

						</div>


								<hr>
								<h4>consumo de energia</h4>
								<br>					
						<div class="row">



							<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de Energia</label> 
											<select class="form-control" name="fonte" id="fonte" required>
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>	

							<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo De Enérgia</label> 
											<select class="form-control" name="consumo" id="consumo" required>
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
												<option value="Energia Solar">kW</option>
														
											</select> 
										</div>						
									</div>		

						</div>

								<hr>
								<h4>Maquinario</h4>
								<br>	
						
						<div class="row">

									
								

									<div class="col-md-3">
										<div class="form-group"> 
											<label>Tipo de Máquina</label> 
											<input type="text" class="form-control" name="maq" id="maq" placeholder="" > 
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group"> 
											<label>Data de Aquisição</label> 
											<input type="date" class="form-control" name="data_aquisicao" id="data_aquisicao" placeholder="" > 
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label>Valor Custo</label>
											<input type="text" class="form-control" name="custo" id="custo" placeholder="">
										</div>
									</div>

									<div class="col-md-3">
												<div class="form-group">
													<label>Valor Residual</label>
													<input type="text" class="form-control" name="residual" id="residual" placeholder="">
												</div>
											</div>			
											
						</div>					

							<div class="row">

												



											<div class="col-md-3">
												<div class="form-group">
													<label>Vida Útil (anos)</label>
													<input type="text" class="form-control" name="anos" id="anos" placeholder="">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Depreciação Anual</label>
													<input type="text" class="form-control" name="depreciacao" id="depreciacao" placeholder="" >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Depreciação por dia</label>
													<input type="text" class="form-control" name="dia" id="dia" placeholder="" >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>dias utilizados</label><!--depreciaçao por dia*dias utlizados-->
													<input type="text" class="form-control" name="util" id="util" placeholder="" >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>valor total da depreciação</label>
													<input type="text" class="form-control" name="vd" id="vd" placeholder="" >
												</div>
											</div>


							</div>	

<script>
    // Adicionando evento de change nos inputs
    document.getElementById("custo").addEventListener("change", calcularDepreciacao);
    document.getElementById("residual").addEventListener("change", calcularDepreciacao);
    document.getElementById("anos").addEventListener("change", calcularDepreciacao);

    function calcularDepreciacao() {
        var valorpg = document.getElementById("custo").value;
        var residual = document.getElementById("residual").value;
        var vida = document.getElementById("anos").value;
        var depreciacaoAnual = (valorpg - residual) / vida;
        var depreciacaoDia = depreciacaoAnual / 365.25;
        document.getElementById("depreciacao").value = depreciacaoAnual;
        document.getElementById("dia").value = depreciacaoDia;
		document.getElementById("dia").value = depreciacaoDia.toFixed(2);

    }

	
</script>

<script>
	// Captura os inputs de depreciação por dia, dias utilizados e valor total da depreciação
const depreciacaoDia = document.getElementById("dia");
const diasUtilizados = document.getElementById("util");
const valorTotalDepreciacao = document.getElementById("vd");

// Adiciona um evento para detectar quando o usuário digita no input de dias utilizados
diasUtilizados.addEventListener("input", function() {
  // Converte os valores dos inputs para números
  const valorDepreciacaoDia = Number(depreciacaoDia.value);
  const valorDiasUtilizados = Number(diasUtilizados.value);
  
  // Calcula o valor total da depreciação e exibe no input correspondente
  const valorTotal = valorDepreciacaoDia * valorDiasUtilizados;
  valorTotalDepreciacao.value = valorTotal;
});


</script>

							<hr>
								<h4>Mão de obra</h4>
								<br>			


									<div class="row">

												<div class="col-md-3">
													<div class="form-group">
														<label>Custo de Mão de Obra</label>
														<input type="text" class="form-control" name="obra" id="obra" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label>Valor Hora</label>
														<input type="text" class="form-control" name="hora" id="hora" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label>Horas Trabalhadas</label>
														<input type="text" class="form-control" name="trabalho" id="trabalho" placeholder="">
													</div>
												</div>


												<div class="col-md-3">
													<div class="form-group">
														<label>Total Pago</label>
														<input type="text" class="form-control" name="pago" id="pago" placeholder="" >
													</div>
												</div>

									</div>

									<hr>
									<div align="right">
										<button type="button" id="seguinte_aba2" name="seguinte_aba2" class="btn btn-primary">Seguinte</button>
									</div>

						</div>


<script>
// Seleciona os elementos HTML
const custoMaoDeObra = document.getElementById("obra");
const valorHora = document.getElementById("hora");
const horasTrabalhadas = document.getElementById("trabalho");
const totalPago = document.getElementById("pago");

// Cria um evento para calcular o total pago
custoMaoDeObra.addEventListener("input", calcularTotalPago);
valorHora.addEventListener("input", calcularTotalPago);
horasTrabalhadas.addEventListener("input", calcularTotalPago);

function calcularTotalPago() {
  // Converte os valores para números e calcula o total
  const custo = parseFloat(custoMaoDeObra.value) || 0;
  const valor = parseFloat(valorHora.value) || 0;
  const horas = parseFloat(horasTrabalhadas.value) || 0;
  const total = custo + valor * horas;

  // Atualiza o valor do total pago
  totalPago.value = total.toFixed(2);
}


</script>
					
					
						<!--</div>-->
							<!--//////Higienização e Seleção////-->




					<div class="tab-pane fade" id="higienizacao" role="tabpanel" aria-labelledby="higienizacao-tab">
							<br>
							<h4>Higienização e Seleção</h4>
							<hr>
							<h4>Entrada</h4>
							<div class="row">
							<div class="col-md-3">
										<div class="form-group"> 
											<label>Quantidade de entrada</label> 
											<input type="text" class="form-control" name="entradois" id="entradois" placeholder="" > 
										</div>
										</div>

										<div class="col-md-3">						
							<div class="form-group"> 
								<label>Unidade de Medida</label> 
								<select class="form-control" name="undois" id="undois" required>
									<option value="Quilo">Kg</option>
									<option value="Litro">L</option>
								</select> 
							</div>						
							</div>

							</div>

							
							<hr>
								<h4>Maquina</h4>
								<br>


							<div class="row">

							
									<div class="col-md-3">
										<div class="form-group"> 
											<label>Nome da Máquina</label> 
											<input type="text" class="form-control" name="maqdois" id="maqdois" placeholder="" > 
										</div>
										</div>

										<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de Energia</label> 
											<select class="form-control" name="maqfonte2" id="maqfonte2" required>
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>	
			

									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo De Enérgia</label> 
											<select class="form-control" name="maqconsumodois" id="maqconsumodois" required>
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
												<option value="Energia Solar">kW</option>
														
											</select> 
										</div>						
									</div>
									
									
									



									
							</div>



							<div class="row">

							<hr>
								<h4>Ferramenta</h4>
								<br>
											
			
									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Nome de Ferramenta</label> 
											<input type="text" class="form-control" name="ferdois" id="ferdois" > 
										</div>						
									</div>	

									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de Energia</label> 
											<select class="form-control" name="ferfonte2" id="ferfonte2" required>
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>	
			

									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo De Enérgia</label> 
											<select class="form-control" name="ferconsumodois" id="ferconsumodois" required>
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
												<option value="Energia Solar">kW</option>
														
											</select> 
										</div>						
									</div>

									

							</div>
									



							<div class="row">

							<hr>
								<h4>depreciação</h4>
								<br>	




								<div class="col-md-3">						
											<div class="form-group"> 
												<label>Data De Aquisição</label> 
												<input type="date" class="form-control" name="data_aquidois" id="data_aquidois" value="<?php echo date('Y-m-d') ?>"> 
											</div>						
										</div>	



									<div class="col-md-3">
										<div class="form-group">
											<label>Valor Custo</label>
											<input type="text" class="form-control" name="custodois" id="custodois" placeholder="">
										</div>
									</div>

												



								<div class="col-md-3">
											<div class="form-group">
												<label>Valor Residual</label>
												<input type="text" class="form-control" name="residualdois" id="residualdois" placeholder="">
											</div>
										</div>						



													<div class="col-md-3">
										<div class="form-group">
											<label>Vida Útil (anos)</label>
											<input type="text" class="form-control" name="anosdois" id="anosdois" placeholder="">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Depreciação Anual</label>
											<input type="text" class="form-control" name="depreciacaodois" id="depreciacaodois" placeholder="">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Depreciação por dia</label>
											<input type="text" class="form-control" name="diadois" id="diadois" placeholder="">
										</div>
									</div>


							</div>	

							<script>
    // Adicionando evento de change nos inputs
    document.getElementById("custodois").addEventListener("change", calcularDepreciacao);
    document.getElementById("residualdois").addEventListener("change", calcularDepreciacao);
    document.getElementById("anosdois").addEventListener("change", calcularDepreciacao);

    function calcularDepreciacao() {
        var valorpg = document.getElementById("custodois").value;
        var residual = document.getElementById("residualdois").value;
        var vida = document.getElementById("anosdois").value;
        var depreciacaoAnual = (valorpg - residual) / vida;
        var depreciacaoDia = depreciacaoAnual / 365.25;
        document.getElementById("depreciacaodois").value = depreciacaoAnual;
        document.getElementById("diadois").value = depreciacaoDia;
		document.getElementById("diadois").value = depreciacaoDia.toFixed(2);

    }

	
</script>




							<hr>
								<h4>Mão de obra</h4>
								<br>	

										<div class="row">

													<div class="col-md-3">
														<div class="form-group">
															<label>custo de mão de obra</label>
															<input type="text" class="form-control" name="obradois" id="obradois" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group">
															<label>Valor Hora</label>
															<input type="text" class="form-control" name="horadois" id="horadois" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
													<div class="form-group">
														<label>Horas Trabalhadas</label>
														<input type="text" class="form-control" name="trabalhodois" id="trabalhodois" placeholder="">
													</div>
												</div>


													<div class="col-md-3">
														<div class="form-group">
															<label>Valor Pago</label>
															<input type="text" class="form-control" name="pagodois" id="pagodois" placeholder="">
														</div>
													</div>

										</div>

<script>


</script>

										<hr>
										<h4>Resultado</h4>

										<div class="row">


										<div class="col-md-3">
														<div class="form-group">
															<label>Quantidade Higienizada</label>
															<input type="text" class="form-control" name="resuldois" id="resuldois" placeholder="">
														</div>
													</div>
										
													<div class="col-md-3">						
														<div class="form-group"> 
															<label>Unidade de Medida</label> 
															<select class="form-control" name="medidadois" id="medidadois" required>
																<option value="Quilo">Kg</option>
																<option value="Litro">L</option>
															</select> 
														</div>						
														</div>

														<div class="col-md-3">
														<div class="form-group">
															<label>Perda Na Higienização</label>
															<input type="text" class="form-control" name="perdadois" id="perdadois" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group">
															<label>Percentual</label><!--perda/entrada da valor em %-->
															<input type="text" class="form-control" name="percedois" id="percedois" placeholder="">
														</div>
													</div>


													
													
										</div>

<script>
// Captura os elementos HTML para manipulação
const entrada = document.getElementById("entradois");
const unidade = document.getElementById("undois");
const perda = document.getElementById("resuldois");
const unidadePerda = document.getElementById("medidadois");
const resultado = document.getElementById("perdadois");

// Função que realiza o cálculo da perda
function calcularPerda() {
  const entradaNum = parseFloat(entrada.value);
  const perdaNum = parseFloat(perda.value);

  // Verifica se os valores são válidos
  if (!isNaN(entradaNum) && !isNaN(perdaNum)) {
    // Converte a unidade de medida da perda para a mesma da entrada
    const unidadeEntrada = unidade.value.toLowerCase();
    const unidadePerdaConvertida = unidadePerda.value.toLowerCase();
    let perdaConvertida;

    if (unidadeEntrada === unidadePerdaConvertida) {
      perdaConvertida = perdaNum;
    } else if (unidadeEntrada === "kg" && unidadePerdaConvertida === "l") {
      perdaConvertida = perdaNum / 1; // 1 kg = 1 L
    } else if (unidadeEntrada === "l" && unidadePerdaConvertida === "kg") {
      perdaConvertida = perdaNum * 1; // 1 L = 1 kg
    }

    // Calcula o resultado da higienização e exibe no campo correspondente
    const resultadoNum = entradaNum - perdaConvertida;
    resultado.value = resultadoNum.toFixed(2) + " " + unidadeEntrada;
  }
}

// Adiciona um evento de mudança nos campos que influenciam o cálculo
entrada.addEventListener("change", calcularPerda);
unidade.addEventListener("change", calcularPerda);
perda.addEventListener("change", calcularPerda);
unidadePerda.addEventListener("change", calcularPerda);

// Calculando a porcentagem de perda
//let percentual = (perda / resultado) * 100;

// Exibindo o valor da porcentagem de perda
//document.getElementById("percedois").value = percentual.toFixed(2) + "%";





</script>	

<script>
	

</script>


							<hr>
							<div class="row">	
								<div align="right">
									<button type="button" id="voltar_aba1" name="voltar_aba1" class="btn btn-secondary">Voltar</button>
									<button type="button" id="seguinte_aba3" name="seguinte_aba3" class="btn btn-primary">Seguinte</button>
								</div>
							</div>
					</div>

				





											<!--//////Secagem e Refrigeração///-->




						<div class="tab-pane fade" id="secagem" role="tabpanel" aria-labelledby="secagem-tab">
						<br>
							<h4>Secagem e Refrigeração</h4>


							<hr>
								<h4>Maquina</h4>
								<br>	

								
								<div class="row">
									<div class="col-md-3">
										<div class="form-group"> 
											<label>Nome da Máquina</label> 
											<input type="text" class="form-control" name="maqtres" id="maqtres" placeholder="" > 
										</div>
									</div>

								
									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de Energia</label> 
											<select class="form-control" name="maqfontetres" id="maqfontetres" >
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>


									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo De Enérgia</label> 
											<select class="form-control" name="maqconsumotres" id="maqconsumotres" >
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
												<option value="Energia Solar">kW</option>
														
											</select> 
										</div>						
									</div>
									
									

								</div>


								<div class="row">

									<hr>
										<h4>Ferramenta</h4>
										<br>

										<div class="col-md-3">						
										<div class="form-group"> 
											<label>Nome da Ferramenta</label> 
											<input type="text" class="form-control" name="fertres" id="fertres" > 
										</div>						
									</div>
									
									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de Energia</label> 
											<select class="form-control" name="ferfontetres" id="ferfontetres" >
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>


									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo De Enérgia</label> 
											<select class="form-control" name="ferconsumotres" id="ferconsumotres" >
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
												<option value="Energia Solar">kW</option>
														
											</select> 
										</div>						
									</div>




								</div>






								<div class="row">
											
								<hr>
								<h4>depreciação</h4>
								<br>
									
									


									<div class="col-md-3">						
											<div class="form-group"> 
												<label>Data De Aquisição</label> 
												<input type="date" class="form-control" name="data_aquitres" id="data_aquitres" value="<?php echo date('Y-m-d') ?>"> 
											</div>						
										</div>	



									<div class="col-md-3">
										<div class="form-group">
											<label>Valor Custo</label>
											<input type="text" class="form-control" name="custotres" id="custotres" placeholder="">
										</div>
									</div>

									<div class="col-md-3">
											<div class="form-group">
												<label>Valor Residual</label>
												<input type="text" class="form-control" name="residualtres" id="residualtres" placeholder="">
											</div>
										</div>	
										
										<div class="col-md-3">
										<div class="form-group">
											<label>Vida Útil (anos)</label>
											<input type="text" class="form-control" name="anostres" id="anostres" placeholder="">
										</div>
									</div>

							</div>					




							<div class="row">

									
									<div class="col-md-3">
										<div class="form-group">
											<label>Depreciação Anual</label>
											<input type="text" class="form-control" name="depreciacaotres" id="depreciacaotres" placeholder="">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Depreciação por dia</label>
											<input type="text" class="form-control" name="diatres" id="diatres" placeholder="">
										</div>
									</div>


							</div>	
							<script>
    // Adicionando evento de change nos inputs
    document.getElementById("custotres").addEventListener("change", calcularDepreciacao);
    document.getElementById("residualtres").addEventListener("change", calcularDepreciacao);
    document.getElementById("anostres").addEventListener("change", calcularDepreciacao);

    function calcularDepreciacao() {
        var valorpg = document.getElementById("custotres").value;
        var residual = document.getElementById("residualtres").value;
        var vida = document.getElementById("anostres").value;
        var depreciacaoAnual = (valorpg - residual) / vida;
        var depreciacaoDia = depreciacaoAnual / 365.25;
        document.getElementById("depreciacaotres").value = depreciacaoAnual;
        document.getElementById("diatres").value = depreciacaoDia;
		document.getElementById("diatres").value = depreciacaoDia.toFixed(2);

    }

	
</script>




							<hr>
								<h4>Mão de obra</h4>
								<br>	



										<div class="row">

													<div class="col-md-3">
														<div class="form-group">
															<label>custo de mão de obra</label>
															<input type="text" class="form-control" name="obratres" id="obratres" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group">
															<label>Valor Hora</label>
															<input type="text" class="form-control" name="horatres" id="horatres" placeholder="">
														</div>
													</div>


													<div class="col-md-3">
														<div class="form-group">
															<label>Valor Pago</label>
															<input type="text" class="form-control" name="pagotres" id="pagotres" placeholder="">
														</div>
													</div>

										</div>

										<script>
// Selecionar os elementos HTML
const custoMaoObraInput = document.getElementById('obratres');
const valorHoraInput = document.getElementById('horatres');
const valorPagoInput = document.getElementById('pagotres');


// Adicionar um event listener para o input de Custo de Mão de Obra e Valor Hora
custoMaoObraInput.addEventListener('input', calcularValorPago);
valorHoraInput.addEventListener('input', calcularValorPago);


// Definir a função para somar os valores
function calcularValorPago() {
  const custoMaoObra = parseFloat(custoMaoObraInput.value) || 0;
  const valorHora = parseFloat(valorHoraInput.value) || 0;
  const valorPago = custoMaoObra + valorHora;
  // Atualizar o valor do input Valor Pago com o resultado
  valorPagoInput.value = valorPago.toFixed(2);
}


  



</script>		


												<hr>
										<h4>Refrigeração</h4>
										<br>

										<div class="row">
											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Data Do armazenamento</label> 
													<input type="date" class="form-control" name="data_arm" id="data_arm" value="<?php echo date('Y-m-d') ?>"> 
												</div>						
											</div>	

											<div class="col-md-3">
															<div class="form-group">
																<label>Armazenar</label>
																<input type="text" class="form-control" name="armaz" id="armaz" placeholder="">
															</div>
													</div>	



										</div>
							<hr>
							<div class="row">						
								<div align="right">
								<button type="button" id="voltar_aba2" name="voltar_aba2" class="btn btn-secondary">Voltar</button>
								<button type="button" id="seguinte_aba4" name="seguinte_aba4" class="btn btn-primary">Seguinte</button>
								</div>
							</div>						
						</div>



												<!--//////Despolpa///-->




							
											<div class="tab-pane fade" id="despolpa" role="tabpanel" aria-labelledby="despolpa-tab">

											<br>
											<h4>Despolpa</h4>

											<hr>
											<h4>Maquina</h4>
											<br>
											<div class="row">

												

												<div class="col-md-3">
													<div class="form-group"> 
														<label>Nome de Máquina</label> 
														<input type="text" class="form-control" name="maqquatro" id="maqquatro" placeholder="" > 
													</div>
													</div>

													


												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Fonte da Energia</label> 
														<select class="form-control" name="maqfontequatro" id="maqfontequatro" required>
														<option value="Motor Estacionário">Motor Estacionário</option>
														<option value="Rede Elétrica">Rede Elétrica</option>
															
														</select> 
													</div>						
												</div>	


												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Consumo De Enérgia</label> 
														<select class="form-control" name="maqconsumoquatro" id="maqconsumoquatro" required>
															<option value="Diesel">Diesel</option>
															<option value="Gasolina">Gasolina</option>
															<option value="Energia Solar">Energia Solar</option>
															<option value="Energia Solar">kW</option>
																	
														</select> 
													</div>						
												</div>




												</div>



											<div class="row">
												<hr>
												<h4>Ferramenta</h4>
												<br>
														
												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Nome da Ferramenta</label> 
														<input type="text" class="form-control" name="ferquatro" id="ferquatro" > 
													</div>						
												</div>	

												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Fonte da Energia</label> 
														<select class="form-control" name="ferfontequatro" id="ferfontequatro" required>
														<option value="Motor Estacionário">Motor Estacionário</option>
														<option value="Rede Elétrica">Rede Elétrica</option>
															
														</select> 
													</div>						
												</div>	


												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Consumo De Enérgia</label> 
														<select class="form-control" name="ferconsumoquatro" id="ferconsumoquatro" required>
															<option value="Diesel">Diesel</option>
															<option value="Gasolina">Gasolina</option>
															<option value="Energia Solar">Energia Solar</option>
															<option value="Energia Solar">kW</option>
																	
														</select> 
													</div>						
												</div>



												

											</div>					




												<div class="row">

												<hr>
												<h4>depreciação</h4>
												<br>


												<div class="col-md-3">						
														<div class="form-group"> 
															<label>Data De Aquisição</label> 
															<input type="date" class="form-control" name="data_aquiquatro" id="data_aquiquatro" value="<?php echo date('Y-m-d') ?>"> 
														</div>						
													</div>	



												<div class="col-md-3">
													<div class="form-group">
														<label>Valor Custo</label>
														<input type="text" class="form-control" name="custoquatro" id="custoquatro" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
														<div class="form-group">
															<label>Valor Residual</label>
															<input type="text" class="form-control" name="residualquatro" id="residualquatro" placeholder="">
														</div>
													</div>						



																<div class="col-md-3">
													<div class="form-group">
														<label>Vida Útil (anos)</label>
														<input type="text" class="form-control" name="anosquatro" id="anosquatro" placeholder="">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Depreciação Anual</label>
														<input type="text" class="form-control" name="depreciacaquatro" id="depreciacaoquatro" placeholder="">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Depreciação por dia</label>
														<input type="text" class="form-control" name="diaquatro" id="diaquatro" placeholder="">
													</div>
												</div>


												</div>	

												<script>
    // Adicionando evento de change nos inputs
    document.getElementById("custoquatro").addEventListener("change", calcularDepreciacao);
    document.getElementById("residualquatro").addEventListener("change", calcularDepreciacao);
    document.getElementById("anosquatro").addEventListener("change", calcularDepreciacao);

    function calcularDepreciacao() {
        var valorpg = document.getElementById("custoquatro").value;
        var residual = document.getElementById("residualquatro").value;
        var vida = document.getElementById("anosquatro").value;
        var depreciacaoAnual = (valorpg - residual) / vida;
        var depreciacaoDia = depreciacaoAnual / 365.25;
        document.getElementById("depreciacaoquatro").value = depreciacaoAnual;
        document.getElementById("diaquatro").value = depreciacaoDia;
		document.getElementById("diaquatro").value = depreciacaoDia.toFixed(2);

    }

	
</script>




													<hr>
														<h4>Mão de obra</h4>
														<br>	




													<div class="row">

																<div class="col-md-3">
																	<div class="form-group">
																		<label>custo de mão de obra</label>
																		<input type="text" class="form-control" name="obraquatro" id="obraquatro" placeholder="">
																	</div>
																</div>

																<div class="col-md-3">
																	<div class="form-group">
																		<label>Valor Hora</label>
																		<input type="text" class="form-control" name="horaquatro" id="horaquatro" placeholder="">
																	</div>
																</div>


																<div class="col-md-3">
																	<div class="form-group">
																		<label>Valor Pago</label>
																		<input type="text" class="form-control" name="pagoquatro" id="pagoquatro" placeholder="">
																	</div>
																</div>

													</div>
								<hr>
								<div align="right">
								<button type="button" id="voltar_aba3" name="voltar_aba3" class="btn btn-secondary">Voltar</button>
								<button type="button" id="seguinte_aba5" name="seguinte_aba5" class="btn btn-primary">Seguinte</button>
								</div>
							</div>

<script>
	// selecionar elementos HTML
const inputObra = document.getElementById('obraquatro');
const inputHora = document.getElementById('horaquatro');
const inputPago = document.getElementById('pagoquatro');

// adicionar evento de input aos elementos HTML
inputObra.addEventListener('input', calcularValorPago);
inputHora.addEventListener('input', calcularValorPago);

// função para calcular o valor pago
function calcularValorPago() {
  const custoObra = Number(inputObra.value);
  const valorHora = Number(inputHora.value);
  const valorPago = custoObra + valorHora;
  inputPago.value = valorPago.toFixed(2);
}

</script>							



													<!--//////presagem///-->


							
													<div class="tab-pane fade" id="presagem" role="tabpanel" aria-labelledby="presagem-tab">
																	<br>
																	<h4>Prensagem</h4>

																	<hr>
																<h4>Maquina</h4>
																<br>
													<div class="row">


														<div class="col-md-3">
															<div class="form-group"> 
																<label>Nome da Máquina</label> 
																<input type="text" class="form-control" name="maqcinco" id="maqcinco" placeholder="" > 
															</div>
															</div>


														<div class="col-md-3">						
															<div class="form-group"> 
																<label>Fonte de Energia</label> 
																<select class="form-control" name="maqfontecinco" id="maqfontecinco" >
																<option value="Motor Estacionário">Motor Estacionário</option>
																<option value="Rede Elétrica">Rede Elétrica</option>
																	
																</select> 
															</div>						
														</div>	

														<div class="col-md-3">						
															<div class="form-group"> 
																<label>Consumo De Enérgia</label> 
																<select class="form-control" name="maqconsumocinco" id="maqconsumocinco" >
																	<option value="Diesel">Diesel</option>
																	<option value="Gasolina">Gasolina</option>
																	<option value="Energia Solar">Energia Solar</option>
																	<option value="Energia Solar">kW</option>
																					
																		</select> 
																	</div>						
															</div>





														</div>






												<div class="row">

													<hr>
													<h4>Ferramenta</h4>
													<br>
														

												<div class="col-md-3">						
															<div class="form-group"> 
																<label>Nome de Ferramenta</label> 
																<input type="text" class="form-control" name="fercinco" id="fercinco" > 
															</div>						
														</div>	

														<div class="col-md-3">						
															<div class="form-group"> 
																<label>Fonte de Energia</label> 
																<select class="form-control" name="ferfontecinco" id="ferfontecinco" >
																<option value="Motor Estacionário">Motor Estacionário</option>
																<option value="Rede Elétrica">Rede Elétrica</option>
																	
																</select> 
															</div>						
														</div>	

														<div class="col-md-3">						
															<div class="form-group"> 
																<label>Consumo De Enérgia</label> 
																<select class="form-control" name="ferconsumocinco" id="ferconsumocinco" >
																	<option value="Diesel">Diesel</option>
																	<option value="Gasolina">Gasolina</option>
																	<option value="Energia Solar">Energia Solar</option>
																	<option value="Energia Solar">kW</option>
																					
																		</select> 
																	</div>						
															</div>



												

												
												</div>					




											<div class="row">
											<hr>
											<h4>depreciação</h4>
											<br>



											<div class="col-md-3">						
														<div class="form-group"> 
															<label>Data De Aquisição</label> 
															<input type="date" class="form-control" name="data_aquicinco" id="data_aquicinco" value="<?php echo date('Y-m-d') ?>"> 
														</div>						
													</div>	



												<div class="col-md-3">
													<div class="form-group">
														<label>Valor Custo</label>
														<input type="text" class="form-control" name="custocinco" id="custocinco" placeholder="">
													</div>
												</div>






													<div class="col-md-3">
															<div class="form-group">
																<label>Valor Residual</label>
																<input type="text" class="form-control" name="residualcinco" id="residualcinco" placeholder="">
															</div>
														</div>						



																	<div class="col-md-3">
														<div class="form-group">
															<label>Vida Útil (anos)</label>
															<input type="text" class="form-control" name="anoscinco" id="anoscinco" placeholder="">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label>Depreciação Anual</label>
															<input type="text" class="form-control" name="depreciacaocinco" id="depreciacaocinco" placeholder="">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label>Depreciação por dia</label>
															<input type="text" class="form-control" name="diacinco" id="diacinco" placeholder="">
														</div>
													</div>


											</div>	
											<script>
    // Adicionando evento de change nos inputs
    document.getElementById("custocinco").addEventListener("change", calcularDepreciacao);
    document.getElementById("residualcinco").addEventListener("change", calcularDepreciacao);
    document.getElementById("anoscinco").addEventListener("change", calcularDepreciacao);

    function calcularDepreciacao() {
        var valorpg = document.getElementById("custocinco").value;
        var residual = document.getElementById("residualcinco").value;
        var vida = document.getElementById("anoscinco").value;
        var depreciacaoAnual = (valorpg - residual) / vida;
        var depreciacaoDia = depreciacaoAnual / 365.25;
        document.getElementById("depreciacaocinco").value = depreciacaoAnual;
        document.getElementById("diacinco").value = depreciacaoDia;
		document.getElementById("diacinco").value = depreciacaoDia.toFixed(2);

    }

	
</script>




							<hr>
								<h4>Mão de obra</h4>
								<br>	
											




									<div class="row">

												<div class="col-md-3">
													<div class="form-group">
														<label>custo de mão de obra</label>
														<input type="text" class="form-control" name="obracinco" id="obracinco" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label>Valor Hora</label>
														<input type="text" class="form-control" name="horacinco" id="horacinco" placeholder="">
													</div>
												</div>


												<div class="col-md-3">
													<div class="form-group">
														<label>Valor Pago</label>
														<input type="text" class="form-control" name="pagocinco" id="pagocinco" placeholder="">
													</div>
												</div>

									</div>

<script>
	const obra = document.getElementById('obracinco');
const hora = document.getElementById('horacinco');
const pago = document.getElementById('pagocinco');
obra.addEventListener('input', calcularValorPago);
hora.addEventListener('input', calcularValorPago);

function calcularValorPago() {
  const custoObra = parseFloat(obra.value);
  const valorHora = parseFloat(hora.value);

  const valorTotal = custoObra + valorHora;

  pago.value = valorTotal.toFixed(2);
}


</script>



									<hr>
								<h4>armazenamento de Insumos</h4>
								<br>
										<div class="row">
											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Insumos</label> 
													<input type="text" class="form-control" name="insumoum" id="insumoum"> 
												</div>
											</div>

											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Produto</label> 
													<input type="text" class="form-control" name="produtoum" id="produtoum" > 
												</div>
											</div>



											<div class="col-md-3">						
											<div class="form-group"> 
												<label>Unidade de Medida</label> 
												<select class="form-control" name="medida" id="medida" required>
													<option value="Quilo">Kg</option>
													<option value="Litro">L</option>
													<option value="Litro">UN</option>
												</select> 
											</div>						
											</div>

											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Data Da Embalagem</label> 
													<input type="date" class="form-control" name="data_emum" id="data_emum"> 
												</div>						
											</div>	





										</div>


										<hr>		
										<div class="row">
											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Insumos</label> 
													<input type="text" class="form-control" name="insumosdois" id="insumoddois"> 
												</div>
											</div>

											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Produto</label> 
													<input type="text" class="form-control" name="prdoutodois" id="produtodois" > 
												</div>
											</div>



											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Unidade de Medida</label> 
													<select class="form-control" name="medida" id="medida" required>
														<option value="Quilo">Kg</option>
														<option value="Litro">L</option>
														<option value="Litro">UN</option>
													</select> 
												</div>						
												</div>

											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Data Da Embalagem</label> 
													<input type="date" class="form-control" name="data_emdois" id="data_emdois"> 
												</div>						
											</div>	





										</div>



								<hr>
								<div align="right">
								<button type="button" id="voltar_aba4" name="voltar_aba4" class="btn btn-secondary">Voltar</button>
								<button type="button" id="seguinte_aba6" name="seguinte_aba6" class="btn btn-primary">Seguinte</button>
								</div>
							</div>

												<!--//////filtragem///-->

							<div class="tab-pane fade" id="filtragem" role="tabpanel" aria-labelledby="filtragem-tab">
											<br>
											<h4>Filtragem/Embalagem/Armazenamento</h4>

											<hr>
											<h4>Maquina</h4>
											<br>
											<div class="row">

															

															<div class="col-md-3">
																<div class="form-group"> 
																	<label>Nome da Máquina</label> 
																	<input type="text" class="form-control" name="maqseis" id="maqseis" placeholder="" > 
																</div>
																</div>


															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Fonte de Energia</label> 
																	<select class="form-control" name="maqfonteseis" id="maqfonteseis">
																	<option value="Motor Estacionário">Motor Estacionário</option>
																	<option value="Rede Elétrica">Rede Elétrica</option>
																		
																	</select> 
																</div>						
															</div>	

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Consumo De Enérgia</label> 
																	<select class="form-control" name="maqconsumoseis" id="maqconsumoseis">
																		<option value="Diesel">Diesel</option>
																		<option value="Gasolina">Gasolina</option>
																		<option value="Energia Solar">Energia Solar</option>
																		<option value="Energia Solar">kW</option>
																		v
																				
																	</select> 
																</div>						
															</div>




													</div>



														<div class="row">

														<hr>
														<h4>Ferramenta</h4>
														<br>

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Nome da Ferramenta</label> 
																	<input type="text" class="form-control" name="ferseis" id="ferseis" > 
																</div>						
															</div>		

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Fonte de Energia</label> 
																	<select class="form-control" name="ferfonteseis" id="ferfonteseis">
																	<option value="Motor Estacionário">Motor Estacionário</option>
																	<option value="Rede Elétrica">Rede Elétrica</option>
																		
																	</select> 
																</div>						
															</div>	

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Consumo De Enérgia</label> 
																	<select class="form-control" name="ferconsumoseis" id="ferconsumoseis">
																		<option value="Diesel">Diesel</option>
																		<option value="Gasolina">Gasolina</option>
																		<option value="Energia Solar">Energia Solar</option>
																		<option value="Energia Solar">kW</option>
																				
																	</select> 
																</div>						
															</div>


															

														</div>					




															<div class="row">
															<hr>
															<h4>depreciação</h4>
															<br>



															<div class="col-md-3">						
															<div class="form-group"> 
																<label>Data De Aquisição</label> 
																<input type="date" class="form-control" name="data_aquiseis" id="data_aquiseis" value="<?php echo date('Y-m-d') ?>"> 
															</div>						
															</div>	



															<div class="col-md-3">
															<div class="form-group">
															<label>Valor Custo</label>
															<input type="text" class="form-control" name="custoseis" id="custoseis" placeholder="">
															</div>
															</div>

															<div class="col-md-3">
																<div class="form-group">
																	<label>Valor Residual</label>
																	<input type="text" class="form-control" name="residualseis" id="residualseis" placeholder="">
																</div>
															</div>						



																		<div class="col-md-3">
															<div class="form-group">
																<label>Vida Útil (anos)</label>
																<input type="text" class="form-control" name="anosseis" id="anosseis" placeholder="">
															</div>
															</div>
															<div class="col-md-3">
															<div class="form-group">
																<label>Depreciação Anual</label>
																<input type="text" class="form-control" name="depreciacaoseis" id="depreciacaoseis" placeholder="">
															</div>
															</div>
															<div class="col-md-3">
															<div class="form-group">
																<label>Depreciação por dia</label>
																<input type="text" class="form-control" name="diaseis" id="diaseis" placeholder="">
															</div>
															</div>


															</div>	
															<script>
    // Adicionando evento de change nos inputs
    document.getElementById("custoseis").addEventListener("change", calcularDepreciacao);
    document.getElementById("residualseis").addEventListener("change", calcularDepreciacao);
    document.getElementById("anosseis").addEventListener("change", calcularDepreciacao);

    function calcularDepreciacao() {
        var valorpg = document.getElementById("custoseis").value;
        var residual = document.getElementById("residualseis").value;
        var vida = document.getElementById("anosseis").value;
        var depreciacaoAnual = (valorpg - residual) / vida;
        var depreciacaoDia = depreciacaoAnual / 365.25;
        document.getElementById("depreciacaoseis").value = depreciacaoAnual;
        document.getElementById("diaseis").value = depreciacaoDia;
		document.getElementById("diaseis").value = depreciacaoDia.toFixed(2);

    }

	
</script>




														<hr>
															<h4>Mão de obra</h4>
															<br>	





															<div class="row">

															<div class="col-md-3">
															<div class="form-group">
															<label>custo de mão de obra</label>
															<input type="text" class="form-control" name="obraseis" id="obraseis" placeholder="">
															</div>
															</div>

															<div class="col-md-3">
															<div class="form-group">
															<label>Valor Hora</label>
															<input type="text" class="form-control" name="horaseis" id="horaseis" placeholder="">
															</div>
															</div>


															<div class="col-md-3">
															<div class="form-group">
															<label>Valor Pago</label>
															<input type="text" class="form-control" name="pagoseis" id="pagoseis" placeholder="">
															</div>
															</div>

															</div>

<script>
	// Atribui os elementos HTML a variáveis em JavaScript
const campoCustoObra = document.getElementById("obraseis");
const campoValorHora = document.getElementById("horaseis");
const campoValorPago = document.getElementById("pagoseis");

// Adiciona um "escutador" de eventos no campo de "Custo de Mão de Obra" e no campo de "Valor Hora"
campoCustoObra.addEventListener("input", calcularValorPago);
campoValorHora.addEventListener("input", calcularValorPago);

// Função que realiza o cálculo e exibe o resultado no campo "Valor Pago"
function calcularValorPago() {
  const custoObra = parseFloat(campoCustoObra.value) || 0;
  const valorHora = parseFloat(campoValorHora.value) || 0;
  const valorPago = custoObra + valorHora;
  campoValorPago.value = valorPago.toFixed(2);
}

</script>															

															<hr>
															<br>
															<h4>Embalagem/Envase</h4>
															<br>
														
															
													
										<div class="row">
											

											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Produto</label> 
													<input type="text" class="form-control" name="produtotres" id="produtotres" placeholder="o.e breu,óleo copaíba.." > 
												</div>
											</div>

											<div class="col-md-2">
															<div class="form-group">
																<label>Quantidade </label>
																<input type="text" class="form-control" name="armazdois" id="armazdois" placeholder="">
															</div>
													</div>	



											<div class="col-md-3">						
											<div class="form-group"> 
												<label>Unidade de Medida</label> 
												<select class="form-control" name="medida" id="medida" required>
													<option value="Quilo">Kg</option>
													<option value="Litro">L</option>
													<option value="Litro">UN</option>
												</select> 
											</div>						
											</div>

											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Data da Embalagem</label> 
													<input type="date" class="form-control" name="data_emtres" id="data_emtres"> 
												</div>						
											</div>	

										</div>
										<hr>
										<br>
										<h4>
											Armazenamento
										</h4>
										<div class="row">
										<div class="col-md-3">
															<div class="form-group">
																<label>Quantidade Armazenada</label>
																<input type="text" class="form-control" name="armazdois" id="armazdois" placeholder="">
															</div>
													</div>	

													<div class="col-md-3">
															<div class="form-group">
																<label>Unidade de medida</label>
																<input type="text" class="form-control" name="armazdois" id="armazdois" placeholder="">
															</div>
													</div>	



													<div class="col-md-3">
															<div class="form-group">
																<label>Forma Armazenamento</label>
																<input type="text" class="form-control" name="armazdois" id="armazdois" placeholder="saco,balde..">
															</div>
													</div>	

										</div>



								<hr>
								<div align="right">
								<button type="button" id="voltar_aba5" name="voltar_aba5" class="btn btn-secondary">Voltar</button>
								<button type="button" id="seguinte_aba7" name="seguinte_aba7" class="btn btn-primary">Seguinte</button>
								</div>
							</div>

												<!--//////destilacao///-->

							<div class="tab-pane fade" id="destilacao" role="tabpanel" aria-labelledby="destilacao-tab">
											<br>
											<h4>Destilação</h4>
											<hr>
							<h4>Peso</h4>
							<div class="row">
							<div class="col-md-3">
										<div class="form-group"> 
											<label>Quantidade de entrada</label> 
											<input type="text" class="form-control" name="entrasete" id="entrasete" placeholder="" > 
										</div>
										</div>

										<div class="col-md-3">						
							<div class="form-group"> 
								<label>Unidade de Medida</label> 
								<select class="form-control" name="unsete" id="unsete" required>
									<option value="Quilo">Kg</option>
									<option value="Litro">L</option>
								</select> 
							</div>						
							</div>

							</div>


											<hr>
											<h4>Máquina</h4>
											<br>
											<div class="row">

											

												<div class="col-md-3">
													<div class="form-group"> 
														<label>Nome da Máquina</label> 
														<input type="text" class="form-control" name="maqsete" id="maqsete" placeholder="" > 
													</div>
													</div>


												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Fonte de Energia</label> 
														<select class="form-control" name="maqfontesete" id="maqfontesete" required>
														<option value="Motor Estacionário">Motor Estacionário</option>
														<option value="Rede Elétrica">Rede Elétrica</option>
															
														</select> 
													</div>						
												</div>	

												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Consumo De Enérgia</label> 
														<select class="form-control" name="maqconsumosete" id="maqconsumosete" required>
															<option value="Diesel">Diesel</option>
															<option value="Gasolina">Gasolina</option>
															<option value="Energia Solar">Energia Solar</option>
															<option value="Energia Solar">kW</option>
																	
														</select> 
													</div>						
												</div>




												</div>



												<div class="row">

												<hr>
												<h4>Ferramenta</h4>
												<br>

												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Nome da Ferramenta</label> 
														<input type="text" class="form-control" name="fersete" id="fersete" > 
													</div>						
												</div>	

												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Fonte de Energia</label> 
														<select class="form-control" name="ferfontesete" id="ferfontesete" required>
														<option value="Motor Estacionário">Motor Estacionário</option>
														<option value="Rede Elétrica">Rede Elétrica</option>
															
														</select> 
													</div>						
												</div>	

												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Consumo De Enérgia</label> 
														<select class="form-control" name="ferconsumosete" id="ferconsumosete" required>
															<option value="Diesel">Diesel</option>
															<option value="Gasolina">Gasolina</option>
															<option value="Energia Solar">Energia Solar</option>
															<option value="Energia Solar">kW</option>
																	
														</select> 
													</div>						
												</div>



												


												

												</div>					




												<div class="row">
												<hr>
												<h4>depreciação</h4>
												<br>


												<div class="col-md-3">						
														<div class="form-group"> 
															<label>Data De Aquisição</label> 
															<input type="date" class="form-control" name="data_aquisete" id="data_aquisete" value="<?php echo date('Y-m-d') ?>"> 
														</div>						
													</div>	



												<div class="col-md-3">
													<div class="form-group">
														<label>Valor Custo</label>
														<input type="text" class="form-control" name="custosete" id="custosete" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
														<div class="form-group">
															<label>Valor Residual</label>
															<input type="text" class="form-control" name="residualsete" id="residualsete" placeholder="">
														</div>
													</div>						



																<div class="col-md-3">
													<div class="form-group">
														<label>Vida Útil (anos)</label>
														<input type="text" class="form-control" name="anossete" id="anossete" placeholder="">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Depreciação Anual</label>
														<input type="text" class="form-control" name="depreciacaosete" id="depreciacaosete" placeholder="">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Depreciação por dia</label>
														<input type="text" class="form-control" name="diasete" id="diasete" placeholder="">
													</div>
												</div>


												</div>
												<script>
    // Adicionando evento de change nos inputs
    document.getElementById("custosete").addEventListener("change", calcularDepreciacao);
    document.getElementById("residualsete").addEventListener("change", calcularDepreciacao);
    document.getElementById("anossete").addEventListener("change", calcularDepreciacao);

    function calcularDepreciacao() {
        var valorpg = document.getElementById("custosete").value;
        var residual = document.getElementById("residualsete").value;
        var vida = document.getElementById("anossete").value;
        var depreciacaoAnual = (valorpg - residual) / vida;
        var depreciacaoDia = depreciacaoAnual / 365.25;
        document.getElementById("depreciacaosete").value = depreciacaoAnual;
        document.getElementById("diasete").value = depreciacaoDia;
		document.getElementById("diasete").value = depreciacaoDia.toFixed(2);

    }

	
</script>



															<hr>
															<h4>Mão de obra</h4>
															<br>	

													<div class="row">

																<div class="col-md-3">
																	<div class="form-group">
																		<label>custo de mão de obra</label>
																		<input type="text" class="form-control" name="obrasete" id="obrasete" placeholder="">
																	</div>
																</div>

																<div class="col-md-3">
																	<div class="form-group">
																		<label>Valor Hora</label>
																		<input type="text" class="form-control" name="horasete" id="horasete" placeholder="">
																	</div>
																</div>

																<div class="col-md-3">
																	<div class="form-group">
																		<label>Horas Trabalhadas</label>
																		<input type="text" class="form-control" name="trabalhosete" id="trabalhosete" placeholder="">
																	</div>
																</div>


																<div class="col-md-3">
																	<div class="form-group">
																		<label>Valor Pago</label>
																		<input type="text" class="form-control" name="pagosete" id="pagosete" placeholder="">
																	</div>
																</div>

													</div>

													<script>
// Selecionar os elementos HTML
// Seleciona os elementos HTML
const custoMaoDeObrasete = document.getElementById("obrasete");
const valorHorasete = document.getElementById("horasete");
const horasTrabalhadassete = document.getElementById("trabalhosete");
const totalPagosete = document.getElementById("pagosete");

// Cria um evento para calcular o total pago
custoMaoDeObrasete.addEventListener("input", calcularTotalPagosete);
valorHorasete.addEventListener("input", calcularTotalPagosete);
horasTrabalhadassete.addEventListener("input", calcularTotalPagosete);

function calcularTotalPagosete() {
  // Converte os valores para números e calcula o total
  const custo = parseFloat(custoMaoDeObrasete.value) || 0;
  const valor = parseFloat(valorHorasete.value) || 0;
  const horas = parseFloat(horasTrabalhadassete.value) || 0;
  const total = custo + valor * horas;

  // Atualiza o valor do total pago
  totalPagosete.value = total.toFixed(2);
}


</script>
										<hr>
										<h4>Resultado</h4>

										<div class="row">
										<div class="col-md-3">
														<div class="form-group">
															<label>Perda Na Higienização</label>
															<input type="text" class="form-control" name="perdasete" id="perdasete" placeholder="">
														</div>
													</div>
													<div class="col-md-3">						
														<div class="form-group"> 
															<label>Unidade de Medida</label> 
															<select class="form-control" name="medidasete" id="medidasete" required>
																<option value="Quilo">Kg</option>
																<option value="Litro">L</option>
															</select> 
														</div>						
														</div>


													<div class="col-md-3">
														<div class="form-group">
															<label>Resultado Higienização</label>
															<input type="text" class="form-control" name="resulsete" id="resulsete" placeholder="">
														</div>
													</div>
													
										</div>	
<script>
	// Captura os elementos HTML para manipulação
	const entradasete = document.getElementById("entrasete");
const unidadesete = document.getElementById("unsete");
const perdasete = document.getElementById("perdasete");
const unidadePerdasete = document.getElementById("medidasete");
const resultadosete = document.getElementById("resulsete");

// Função que realiza o cálculo da perda
function calcularPerda() {
  const entradaNum = parseFloat(entradasete.value);
  const perdaNum = parseFloat(perdasete.value);

  // Verifica se os valores são válidos
  if (!isNaN(entradaNum) && !isNaN(perdaNum)) {
    // Converte a unidade de medida da perda para a mesma da entrada
    const unidadeEntrada = unidadesete.value.toLowerCase();
    const unidadePerdaConvertida = unidadePerdasete.value.toLowerCase();
    let perdaConvertida;

    if (unidadeEntrada === unidadePerdaConvertida) {
      perdaConvertida = perdaNum;
    } else if (unidadeEntrada === "kg" && unidadePerdaConvertida === "l") {
      perdaConvertida = perdaNum / 1; // 1 kg = 1 L
    } else if (unidadeEntrada === "l" && unidadePerdaConvertida === "kg") {
      perdaConvertida = perdaNum * 1; // 1 L = 1 kg
    }

    // Calcula o resultado da higienização e exibe no campo correspondente
    const resultadoNum = entradaNum - perdaConvertida;
    resultadosete.value = resultadoNum.toFixed(2) + " " + unidadeEntrada;
  }
}

// Adiciona um evento de mudança nos campos que influenciam o cálculo
entradasete.addEventListener("change", calcularPerda);
unidadesete.addEventListener("change", calcularPerda);
perdasete.addEventListener("change", calcularPerda);
unidadePerdasete.addEventListener("change", calcularPerda);	
</script>																				
											
											<hr>
											<div align="right">
												<button type="button" id="voltar_aba6" name="voltar_aba6" class="btn btn-secondary">Voltar</button>
												<button type="button" id="seguinte_aba8" name="seguinte_aba8" class="btn btn-primary">Seguinte</button>
											</div>
							</div>
					


												<!--//////resultados///-->

								<div class="tab-pane fade" id="resultados" role="tabpanel" aria-labelledby="resultados-tab">
											<br>
											<h4>resultados</h4>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label>custo materia prima</label>
													<input type="text" class="form-control" name="totalmateria" id="totalmateria" placeholder="">
												</div>
											</div>

											<div class="col-md-3">
												<div class="form-group">
													<label>depreciação total</label>
													<input type="text" class="form-control" name="totaldepre" id="totaldepre" placeholder="">
												</div>
											</div>

											<div class="col-md-3">
												<div class="form-group">
													<label>redimento produtivo</label>
													<input type="text" class="form-control" name="totalrend" id="totalrend" placeholder="">
												</div>
											</div>

											

										</div>


									<div class="row">
										<div class="col-md-3">
												<div class="form-group">
													<label>custo total de mão de obra</label>
													<input type="text" class="form-control" name="totalobra" id="totalobra" placeholder="">
												</div>
											</div>

											<div class="col-md-3">
												<div class="form-group">
													<label>Resultado da produção</label>
													<input type="text" class="form-control" name="totalproducao" id="totalproducao" placeholder="">
												</div>
											</div>

												<!--custo / produção-->

											<div class="col-md-3">
												<div class="form-group">
													<label>custo total</label>
													<input type="text" class="form-control" name="totalcusto" id="totalcusto" placeholder="">
												</div>
											</div>

											<div class="col-md-3">
												<div class="form-group">
													<label>custo unidade</label>
													<input type="text" class="form-control" name="totalcusto" id="totalcusto" placeholder="">
												</div>
											</div>












									</div>
												
					



				<div class="modal-footer">
				<button type="button" id="voltar_aba7" name="voltar_aba7" class="btn btn-secondary">Voltar</button>
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>



			</form>

		</div>
	</div>
</div>

<script>
// Captura os inputs de depreciação e o input de total depreciação
const depreciacaoUm = document.getElementById("depreciacao");
const depreciacaoDois = document.getElementById("depreciacaodois");
const depreciacaoTres = document.getElementById("depreciacaotres");
const depreciacaoQuatro = document.getElementById("depreciacaoquatro");
const depreciacaoCinco = document.getElementById("depreciacaocinco");
const depreciacaoSeis = document.getElementById("depreciacaoseis");
const depreciacaoSete = document.getElementById("depreciacaosete");
const totalDepre = document.getElementById("totaldepre");

// Converte o valor dos inputs para número e calcula a soma
const somaDepreciacao = Number(depreciacaoUm.value || 0) + Number(depreciacaoDois.value || 0) + Number(depreciacaoTres.value || 0) + Number(depreciacaoQuatro.value || 0) + Number(depreciacaoCinco.value || 0) + Number(depreciacaoSeis.value || 0) + Number(depreciacaoSete.value || 0);

// Exibe o resultado da soma no input de total depreciação
totalDepre.value = somaDepreciacao;



</script>


<script>
	$(document).ready(function() {
  // Ao clicar no botão "Seguinte" da primeira aba, vá para a próxima aba
  $('#seguinte_aba2').click(function() {
    $('#myTab a[href="#higienizacao"]').tab('show');
  });

  // Ao clicar no botão "Seguinte" da segunda aba, vá para a próxima aba
  $('#seguinte_aba3').click(function() {
    $('#myTab a[href="#secagem"]').tab('show');
  });

  // Ao clicar no botão "Seguinte" da terceira aba, vá para a próxima aba
  $('#seguinte_aba4').click(function() {
    $('#myTab a[href="#despolpa"]').tab('show');
  });

  $('#seguinte_aba5').click(function() {
    $('#myTab a[href="#presagem"]').tab('show');
  });

  $('#seguinte_aba6').click(function() {
    $('#myTab a[href="#filtragem"]').tab('show');
  });

  $('#seguinte_aba7').click(function() {
    $('#myTab a[href="#destilacao"]').tab('show');
  });

  $('#seguinte_aba8').click(function() {
    $('#myTab a[href="#resultados"]').tab('show');
  });

///////////////////////////////////////
  // Ao clicar no botão "Anterior" para primeira aba, volte para a aba anterior
  $('#voltar_aba1').click(function() {
    $('#myTab a[href="#recepcion"]').tab('show');
  });
  // Ao clicar no botão "Anterior" da segunda aba, volte para a aba anterior
  $('#voltar_aba2').click(function() {
    $('#myTab a[href="#higienizacao"]').tab('show');
  });

  // Ao clicar no botão "Anterior" da segunda aba, volte para a aba anterior
  $('#voltar_aba3').click(function() {
    $('#myTab a[href="#secagem"]').tab('show');
  });

  $('#voltar_aba4').click(function() {
    $('#myTab a[href="#despolpa"]').tab('show');
  });

  $('#voltar_aba5').click(function() {
    $('#myTab a[href="#presagem"]').tab('show');
  });

  $('#voltar_aba6').click(function() {
    $('#myTab a[href="#filtragem"]').tab('show');
  });

  $('#voltar_aba7').click(function() {
    $('#myTab a[href="#destilacao"]').tab('show');
  });

});


</script>

<script type="text/javascript">
	$(document).ready(function() {

		$('#myTab a[href="#recepcion"]').tab('show');

		//$('.sel2').select2({
			//dropdownParent: $('#modalForm')
		//});


		
	});
</script>


<!-- ModalMostrar -->
<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id=""><span id="#"> </span> <small><span class="ml-4"><span id="#"> </span></span> </small>Produção - Lote Criado</h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<div class="modal-body">			
					


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Produto: </b></span>
							<span id="produto_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Produtor: </b></span>
							<span id="produtor_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Avaliação da Coleta: </b></span>
							<span id="avaliacao_mostrar"></span>							
						</div>
						
						<div class="col-md-6">							
							<span><b>Locais  de Coleta: </b></span>
							<span id="local_mostrar"></span>							
						</div>

						
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Peso bruto (kg): </b></span>
							<span id="bruto_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Peso Liquido (kg): </b></span>
							<span id="liquido_mostrar"></span>							
						</div>
						
					</div>



					<div class="row" style="border-bottom: 1px solid #cac7c7;">
				
					

						<div class="col-md-6">							
							<span><b>Reprovado (kg): </b></span>
							<span id="reprovado_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor por kg(R$): </b></span>
							<span id="valor_mostrar"></span>							
						</div>				


					</div>					


					


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Valor a Pagar(R$): </b></span>
							<span id="pagar_mostrar"></span>							
						</div>
							
						<div class="col-md-6">							
							<span><b>Data de Cadastro: </b></span>
							<span id="data_cad_mostrar"></span>
						</div>			
						
					</div>		

										
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					

						<div class="col-md-6">							
							<span><b>Responsavel: </b></span>
							<span id="corretor_mostrar"></span>
						</div>					

					</div>						
					

					


					<div class="row">
						<div class="col-md-12" align="center">		
							<img  width="200px" id="target_mostrar">	
						</div>
					</div>
					
								

				</div>


		</div>
	</div>
</div>





	<!-- Modal Arquivos -->
	<div class="modal fade" id="modalArquivos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="tituloModal">Gestão de Arquivos - <span id="nome-arquivo"> </span></h4>
					<button id="btn-fechar-arquivos" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="form-arquivos" method="post">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-8">						
								<div class="form-group"> 
									<label>Arquivo</label> 
									<input type="file" name="arquivo_conta" onChange="carregarImgArquivos();" id="arquivo_conta">
								</div>	
							</div>
							<div class="col-md-4" style="margin-top:-10px">	
								<div id="divImgArquivos">
									<img src="images/arquivos/sem-foto.png"  width="60px" id="target-arquivos">									
								</div>					
							</div>




						</div>

						<div class="row" style="margin-top:-40px">
							<div class="col-md-8">
								<input type="text" class="form-control" name="nome-arq"  id="nome-arq" placeholder="Nome do Arquivo * " required>
							</div>

							<div class="col-md-4">										 
								<button type="submit" class="btn btn-primary">Inserir</button>
							</div>
						</div>

						<hr>

						<small><div id="listar-arquivos"></div></small>

						<br>
						<small><div align="center" id="mensagem-arquivo"></div></small>

						<input type="hidden" class="form-control" name="id-arquivo"  id="id-arquivo">


					</div>
				</form>
			</div>
		</div>





<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$('.sel2').select2({
			dropdownParent: $('#modalForm')
		});
	});
</script>





<script type="text/javascript">
	function carregarImg() {
		var target = document.getElementById('target');
		var file = document.querySelector("#foto").files[0];

		var reader = new FileReader();

		reader.onloadend = function () {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>



<script>
	$(document).ready(function() {
		$('#doc').mask('000.000.000-00');
		$('#doc').attr('placeholder','CPF');

		$('#pessoa').change(function(){
			if($(this).val() == 'Física'){
				$('#doc').mask('000.000.000-00');
				$('#doc').attr('placeholder','CPF');
				
			}else{
				$('#doc').mask('00.000.000/0000-00');
				$('#doc').attr('placeholder','CNPJ');
				
				
			}
		});


	});

</script>



		<script type="text/javascript">
			function carregarImgArquivos() {
				var target = document.getElementById('target-arquivos');
				var file = document.querySelector("#arquivo_conta").files[0];

				var arquivo = file['name'];
				resultado = arquivo.split(".", 2);

				if(resultado[1] === 'pdf'){
					$('#target-arquivos').attr('src', "images/pdf.png");
					return;
				}

				if(resultado[1] === 'rar' || resultado[1] === 'zip'){
					$('#target-arquivos').attr('src', "images/rar.png");
					return;
				}

				if(resultado[1] === 'doc' || resultado[1] === 'docx' || resultado[1] === 'txt'){
					$('#target-arquivos').attr('src', "images/word.png");
					return;
				}


				if(resultado[1] === 'xlsx' || resultado[1] === 'xlsm' || resultado[1] === 'xls'){
					$('#target-arquivos').attr('src', "images/excel.png");
					return;
				}


				if(resultado[1] === 'xml'){
					$('#target-arquivos').attr('src', "images/xml.png");
					return;
				}




				var reader = new FileReader();

				reader.onloadend = function () {
					target.src = reader.result;
				};

				if (file) {
					reader.readAsDataURL(file);

				} else {
					target.src = "";
				}
			}
		</script>




<script type="text/javascript">
			$("#form-arquivos").submit(function () {
				event.preventDefault();
				var formData = new FormData(this);

				$.ajax({
					url: pag + "/arquivos.php",
					type: 'POST',
					data: formData,

					success: function (mensagem) {
						$('#mensagem-arquivo').text('');
						$('#mensagem-arquivo').removeClass()
						if (mensagem.trim() == "Inserido com Sucesso") {                    
						//$('#btn-fechar-arquivos').click();
						$('#nome-arq').val('');
						$('#arquivo_conta').val('');
						$('#target-arquivos').attr('src','images/arquivos/sem-foto.png');
						listarArquivos();
					} else {
						$('#mensagem-arquivo').addClass('text-danger')
						$('#mensagem-arquivo').text(mensagem)
					}

				},

				cache: false,
				contentType: false,
				processData: false,

			});

			});
		</script>



		<script type="text/javascript">
			function listarArquivos(){
				var id = $('#id-arquivo').val();	
				$.ajax({
					url: pag + "/listar-arquivos.php",
					method: 'POST',
					data: {id},
					dataType: "text",

					success:function(result){
						$("#listar-arquivos").html(result);
					}
				});
			}

		</script>