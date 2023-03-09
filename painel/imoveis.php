<?php 
require_once("verificar.php");
require_once("../conexao.php");
$pag = 'imoveis';


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
								

								<div class="col-md-3">						
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
									<option value="Quilo">Quilo</option>
									<option value="Litro">Litro</option>
								</select> 
							</div>						
							</div>
							<div class="col-md-3">
								<div class="form-group"> 
									<label>Data da Entrada</label> 
									<input type="date" class="form-control" name="data_entrada" id="data-entrada" placeholder="" > 
								</div>
							</div>
							
							<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de Energia</label> 
											<select class="form-control" name="fonte" id="fonte" required>
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>	
							
							


							</div>


							<div class="row">

							<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo De Enérgia</label> 
											<select class="form-control" name="consumo" id="consumo" required>
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
														
											</select> 
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
											<label>Tipo de Máquina</label> 
											<input type="text" class="form-control" name="maq" id="maq" placeholder="" > 
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label>Valor Custo</label>
											<input type="text" class="form-control" name="custo" id="custo" placeholder="">
										</div>
									</div>
											


								


							</div>	



							<div class="row">

									<div class="col-md-3">
												<div class="form-group">
													<label>Valor Residual</label>
													<input type="text" class="form-control" name="residual" id="residual" placeholder="">
												</div>
											</div>						



															<div class="col-md-3">
												<div class="form-group">
													<label>Vida Útil (anos)</label>
													<input type="text" class="form-control" name="anos" id="anos" placeholder="">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Depreciação Anual</label>
													<input type="text" class="form-control" name="depreciacao" id="depreciacao" placeholder="">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Depreciação por dia</label>
													<input type="text" class="form-control" name="dia" id="dia" placeholder="">
												</div>
											</div>


							</div>	




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
														<label>Valor Pago</label>
														<input type="text" class="form-control" name="pago" id="pago" placeholder="">
													</div>
												</div>

									</div>

									<hr>
									<div align="right">
										<button type="button" id="seguinte_aba2" name="seguinte_aba2" class="btn btn-primary">Seguinte</button>
									</div>

						</div>
					
					
						<!--</div>-->
							<!--//////Higienização e Seleção////-->




					<div class="tab-pane fade" id="higienizacao" role="tabpanel" aria-labelledby="higienizacao-tab">
							<br>
							<h4>Higienização e Seleção</h4>		
							<div class="row">

									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Tipo</label> 
											<select class="form-control" name="selecaodois" id="selecaodois" required>
												<option value="Maquina">Maquina</option>			
												<option value="Ferramenta">Ferramenta</option>
											</select> 
										</div>						
									</div>			



							
									<div class="col-md-3">
										<div class="form-group"> 
											<label>Tipo de Máquina</label> 
											<input type="text" class="form-control" name="maqdois" id="maqdois" placeholder="" > 
										</div>
										</div>

										<div class="col-md-3">						
										<div class="form-group"> 
											<label>Tipo de Ferramenta</label> 
											<input type="text" class="form-control" name="ferdois" id="ferdois" > 
										</div>						
									</div>	
									
									
									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de Energia</label> 
											<select class="form-control" name="fonte2" id="fonte2" required>
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>	



									
							</div>



							<div class="row">
											
									
									
									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo De Enérgia</label> 
											<select class="form-control" name="consumodois" id="consumodois" required>
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
														
											</select> 
										</div>						
									</div>


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

							</div>					




							<div class="row">

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
															<label>Valor Pago</label>
															<input type="text" class="form-control" name="pagodois" id="pagodois" placeholder="">
														</div>
													</div>

										</div>
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
								<div class="row">
									<div class="col-md-3">						
											<div class="form-group"> 
												<label>Tipo</label> 
												<select class="form-control" name="selecaotres" id="selecaotres" required>
													<option value="Maquina">Maquina</option>			
													<option value="Ferramenta">Ferramenta</option>
												</select> 
											</div>						
										</div>			



							
									<div class="col-md-3">
										<div class="form-group"> 
											<label>Tipo de Máquina</label> 
											<input type="text" class="form-control" name="maqtres" id="maqtres" placeholder="" > 
										</div>
										</div>

										<div class="col-md-3">						
										<div class="form-group"> 
											<label>Tipo de Ferramenta</label> 
											<input type="text" class="form-control" name="fertres" id="fertres" > 
										</div>						
									</div>	
									
									
									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de Energia</label> 
											<select class="form-control" name="fontetres" id="fontetres" required>
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>	
								</div>

								<div class="row">
											
									
									
									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo De Enérgia</label> 
											<select class="form-control" name="consumotres" id="consumotres" required>
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
														
											</select> 
										</div>						
									</div>


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

							</div>					




							<div class="row">

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
												<br>
										<h4>Refrigeração</h4>

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
											<div class="row">

												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Tipo</label> 
														<select class="form-control" name="selcaoquatro" id="selecaoquatro" required>
															<option value="Maquina">Maquina</option>			
															<option value="Ferramenta">Ferramenta</option>
														</select> 
													</div>						
												</div>			




												<div class="col-md-3">
													<div class="form-group"> 
														<label>Tipo de Máquina</label> 
														<input type="text" class="form-control" name="maqquatro" id="maqquatro" placeholder="" > 
													</div>
													</div>

													<div class="col-md-3">						
													<div class="form-group"> 
														<label>Tipo de Ferramenta</label> 
														<input type="text" class="form-control" name="ferquatro" id="ferquatro" > 
													</div>						
												</div>	


												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Fonte de Energia</label> 
														<select class="form-control" name="fontequatro" id="fontequatro" required>
														<option value="Motor Estacionário">Motor Estacionário</option>
														<option value="Rede Elétrica">Rede Elétrica</option>
															
														</select> 
													</div>						
												</div>	




												</div>



												<div class="row">
														


												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Consumo De Enérgia</label> 
														<select class="form-control" name="consumoquatro" id="consumoquatro" required>
															<option value="Diesel">Diesel</option>
															<option value="Gasolina">Gasolina</option>
															<option value="Energia Solar">Energia Solar</option>
																	
														</select> 
													</div>						
												</div>


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

												</div>					




												<div class="row">

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



													<!--//////presagem///-->


							
							<div class="tab-pane fade" id="presagem" role="tabpanel" aria-labelledby="presagem-tab">
											<br>
											<h4>Prensagem</h4>
											<div class="row">

														<div class="col-md-3">						
															<div class="form-group"> 
																<label>Tipo</label> 
																<select class="form-control" name="selecaocinco" id="selecaocinco" required>
																	<option value="Maquina">Maquina</option>			
																	<option value="Ferramenta">Ferramenta</option>
																</select> 
															</div>						
														</div>			




														<div class="col-md-3">
															<div class="form-group"> 
																<label>Tipo de Máquina</label> 
																<input type="text" class="form-control" name="maqcinco" id="maqcinco" placeholder="" > 
															</div>
															</div>

															<div class="col-md-3">						
															<div class="form-group"> 
																<label>Tipo de Ferramenta</label> 
																<input type="text" class="form-control" name="fercinco" id="fercinco" > 
															</div>						
														</div>	


														<div class="col-md-3">						
															<div class="form-group"> 
																<label>Fonte de Energia</label> 
																<select class="form-control" name="fontecinco" id="fontecinco" required>
																<option value="Motor Estacionário">Motor Estacionário</option>
																<option value="Rede Elétrica">Rede Elétrica</option>
																	
																</select> 
															</div>						
														</div>	




														</div>



												<div class="row">
														


												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Consumo De Enérgia</label> 
														<select class="form-control" name="consumocinco" id="consumocinco" required>
															<option value="Diesel">Diesel</option>
															<option value="Gasolina">Gasolina</option>
															<option value="Energia Solar">Energia Solar</option>
																	
														</select> 
													</div>						
												</div>


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

												</div>					




											<div class="row">

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


										<hr>(1)		
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
													<label>Quantidade Kg/Litro</label> 
													<select class="form-control" name="medidaum" id="medidaum" >
														<option value="Quilo">Quilo</option>
														<option value="Litro">Litro</option>
														<option value="Unidade">Unidade</option>
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


										<hr>(2)		
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
													<label>Quantidade Kg/Litro</label> 
													<select class="form-control" name="medidadois" id="medidadois" >
														<option value="Quilo">Quilo</option>
														<option value="Litro">Litro</option>
														<option value="Unidade">Unidade</option>
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
											<div class="row">

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Tipo</label> 
																	<select class="form-control" name="selecaoseis" id="selecaoseis" required>
																		<option value="Maquina">Maquina</option>			
																		<option value="Ferramenta">Ferramenta</option>
																	</select> 
																</div>						
															</div>			




															<div class="col-md-3">
																<div class="form-group"> 
																	<label>Tipo de Máquina</label> 
																	<input type="text" class="form-control" name="maqseis" id="maqseis" placeholder="" > 
																</div>
																</div>

																<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Tipo de Ferramenta</label> 
																	<input type="text" class="form-control" name="ferseis" id="ferseis" > 
																</div>						
															</div>	


															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Fonte de Energia</label> 
																	<select class="form-control" name="fonteseis" id="fonteseis">
																	<option value="Motor Estacionário">Motor Estacionário</option>
																	<option value="Rede Elétrica">Rede Elétrica</option>
																		
																	</select> 
																</div>						
															</div>	




															</div>



															<div class="row">



															<div class="col-md-3">						
															<div class="form-group"> 
															<label>Consumo De Enérgia</label> 
															<select class="form-control" name="consumoseis" id="consumoseis">
																<option value="Diesel">Diesel</option>
																<option value="Gasolina">Gasolina</option>
																<option value="Energia Solar">Energia Solar</option>
																		
															</select> 
															</div>						
															</div>


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

															</div>					




															<div class="row">

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






															<div class="row">

															<div class="col-md-3">
															<div class="form-group">
															<label>custo de mão de obra</label>
															<input type="number" class="form-control" name="obraseis" id="obraseis" placeholder="">
															</div>
															</div>

															<div class="col-md-3">
															<div class="form-group">
															<label>Valor Hora</label>
															<input type="number" class="form-control" name="horaseis" id="horaseis" placeholder="">
															</div>
															</div>


															<div class="col-md-3">
															<div class="form-group">
															<label>Valor Pago</label>
															<input type="number" class="form-control" name="pagoseis" id="pagoseis" placeholder="">
															</div>
															</div>

															</div>

															<hr>
															<br>
															<h4>Emabalagem</h4>
															
													
										<div class="row">
											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Insumos</label> 
													<input type="text" class="form-control" name="insumotres" id="insumotres"> 
												</div>
											</div>

											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Produto</label> 
													<input type="text" class="form-control" name="produtotres" id="produtotres" > 
												</div>
											</div>



											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Quantidade Kg/Litro</label> 
													<select class="form-control" name="medidatres" id="medidatres" >
														<option value="Quilo">Quilo</option>
														<option value="Litro">Litro</option>
														<option value="Unidade">Unidade</option>
													</select> 
												</div>						
											</div>

											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Data Da Embalagem</label> 
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
																<label>Local do Armazenamento</label>
																<input type="text" class="form-control" name="armazdois" id="armazdois" placeholder="">
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
											<div class="row">

												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Tipo</label> 
														<select class="form-control" name="selecaosete" id="selecaosete" required>
															<option value="Maquina">Maquina</option>			
															<option value="Ferramenta">Ferramenta</option>
														</select> 
													</div>						
												</div>			




												<div class="col-md-3">
													<div class="form-group"> 
														<label>Tipo de Máquina</label> 
														<input type="text" class="form-control" name="maqsete" id="maqsete" placeholder="" > 
													</div>
													</div>

													<div class="col-md-3">						
													<div class="form-group"> 
														<label>Tipo de Ferramenta</label> 
														<input type="text" class="form-control" name="fersete" id="fersete" > 
													</div>						
												</div>	


												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Fonte de Energia</label> 
														<select class="form-control" name="fontesete" id="fontesete" required>
														<option value="Motor Estacionário">Motor Estacionário</option>
														<option value="Rede Elétrica">Rede Elétrica</option>
															
														</select> 
													</div>						
												</div>	




												</div>



												<div class="row">
														


												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Consumo De Enérgia</label> 
														<select class="form-control" name="consumosete" id="consumosete" required>
															<option value="Diesel">Diesel</option>
															<option value="Gasolina">Gasolina</option>
															<option value="Energia Solar">Energia Solar</option>
																	
														</select> 
													</div>						
												</div>


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

												</div>					




												<div class="row">

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
																		<label>Valor Pago</label>
																		<input type="text" class="form-control" name="pagosete" id="pagosete" placeholder="">
																	</div>
																</div>

													</div>
											
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

											<div class="col-md-3">
												<div class="form-group">
													<label>custo hora homem</label>
													<input type="text" class="form-control" name="totalhora" id="totalhora" placeholder="">
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
													<label>total da produção</label>
													<input type="text" class="form-control" name="totalproducao" id="totalproducao" placeholder="">
												</div>
											</div>

											<div class="col-md-3">
												<div class="form-group">
													<label>custo total</label>
													<input type="text" class="form-control" name="totalcusto" id="totalcusto" placeholder="">
												</div>
											</div>









									</div>
									
									<hr>
									<div align="right">
											<button type="button" id="voltar_aba7" name="voltar_aba7" class="btn btn-secondary">Voltar</button>
											<!--<button type="button" id="finalizar" name="finalizar" class="btn btn-primary">Salvar</button>-->
											<button type="submit" id="salvar" name="salvar" class="btn btn-primary">Salvar</button>
									</div>
									</div>
								</div>

				 			</div>



					

								<br>
								<input type="hidden" name="id" id="id"> 
								<small><div id="mensagem" align="center" class="mt-3"></div></small>


					</div>


				



			</form>

		</div>
	</div>
</div>



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





<!-- ModalMostrar -->
<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="tituloModal"><span id="titulo_mostrar"> </span></h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">			



				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-3">							
						<span><b>Dono: </b></span>
						<span id="dono_mostrar"></span>							
					</div>
					<div class="col-md-3">							
						<span><b>Corretor: </b></span>
						<span id="corretor_mostrar"></span>
					</div>

					<div class="col-md-3">							
						<span><b>Tipo: </b></span>
						<span id="tipo_mostrar"></span>							
					</div>
					<div class="col-md-3">							
						<span><b>Valor: </b></span>
						<span id="valor_mostrar"></span>
					</div>
				</div>


				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-3">							
						<span><b>Cidade: </b></span>
						<span id="cidade_mostrar"></span>							
					</div>
					<div class="col-md-3">							
						<span><b>Bairro: </b></span>
						<span id="bairro_mostrar"></span>
					</div>

					<div class="col-md-6">							
						<span><b>Endereço: </b></span>
						<span id="endereco_mostrar"></span>							
					</div>
				
				</div>


				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-3">							
						<span><b>Ano Imóvel: </b></span>
						<span id="ano_mostrar"></span>							
					</div>
					<div class="col-md-3">							
						<span><b>Total Visitas: </b></span>
						<span id="visitas_mostrar"></span>
					</div>

					<div class="col-md-3">							
						<span><b>Área Total: </b></span>
						<span id="area_total_mostrar"></span>							
					</div>
					<div class="col-md-3">							
						<span><b>Área Construída: </b></span>
						<span id="area_construida_mostrar"></span>
					</div>
				</div>



					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-2">							
						<span><b>Quartos: </b></span>
						<span id="quartos_mostrar"></span>							
					</div>
					<div class="col-md-2">							
						<span><b>Suítes: </b></span>
						<span id="suites_mostrar"></span>
					</div>

					<div class="col-md-2">							
						<span><b>Garagens: </b></span>
						<span id="garagens_mostrar"></span>							
					</div>
					<div class="col-md-2">							
						<span><b>Piscinas: </b></span>
						<span id="piscinas_mostrar"></span>
					</div>

					<div class="col-md-2">							
						<span><b>Banheiros: </b></span>
						<span id="banheiros_mostrar"></span>
					</div>
				</div>




				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-3">							
						<span><b>Status: </b></span>
						<span id="status_mostrar"></span>							
					</div>
					<div class="col-md-3">							
						<span><b>Condição: </b></span>
						<span id="condicao_mostrar"></span>
					</div>

					<div class="col-md-3">							
						<span><b>IPTU Mês: </b></span>
						<span id="iptu_mostrar"></span>							
					</div>
					<div class="col-md-3">							
						<span><b>Condomínio: </b></span>
						<span id="condominio_mostrar"></span>
					</div>
				</div>



				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-4">							
						<span><b>Comissão Imobiliária %: </b></span>
						<span id="comissao_imob_mostrar"></span>							
					</div>
					<div class="col-md-4">							
						<span><b>Comissão Corretor %: </b></span>
						<span id="comissao_corretor_mostrar"></span>
					</div>

					<div class="col-md-4">							
						<span><b>Castradado Em: </b></span>
						<span id="data_cad_mostrar"></span>							
					</div>
					
				</div>


				<div class="row" style="border-bottom: 1px solid #cac7c7;">
				<div class="col-md-4">							
						<span><b>Validade do Anúncio: </b></span>
						<span id="validade_mostrar"></span>
					</div>

					<div class="col-md-4">							
						<span><b>Data Inicial Anúncio: </b></span>
						<span id="data_inicio_mostrar"></span>
					</div>
					
					<div class="col-md-4">							
						<span><b>Data Final Anúncio: </b></span>
						<span id="data_final_mostrar"></span>
					</div>
				</div>




				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-12">							
						<span><b>Descrição: </b></span>
						<div id="descricao_mostrar"></div>							
					</div>
				</div>





				


				<div class="row">
					<div class="col-md-6" align="center">		
						<img  width="300px" id="target_principal_mostrar">	
					</div>

					<div class="col-md-6" align="center">		
						<img  width="300px" id="target_planta_mostrar">	
					</div>
				</div>


				<div class="row">
					<div class="col-md-12" align="center">		
							 <iframe width="100%" height="500" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="target_video_mostrar"></iframe>	
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

</div>







<div class="modal" id="modalImagens" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Demais Imagens do Imóvel - <span id="nome-imagens"> </span></h5>
                <button type="button" class="close"  data-dismiss="modal" aria-label="Close" style="margin-top: -15px">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-fotos" method="POST" enctype="multipart/form-data" >
                    <div class="row">
                        <div class="col-md-5">
                            <div class="col-md-12 form-group">
                                <label>Imagens do Imóvel</label>
                                <input type="file" class="form-control-file" id="imgimovel" name="imgimovel" onchange="carregarImgImovel();">

                            </div>

                            <div class="col-md-12 mb-2">
                                <img src="images/detalhes-imoveis/sem-foto.png" alt="Carregue sua Imagem" id="targetImovel" width="100%">
                            </div>

                        </div>

                        <div class="col-md-7" id="listar-imagens">

                        </div>




                    </div>

                    <div class="col-md-12" align="right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-fotos">Cancelar</button>
                        
                       <input type="hidden" class="form-control" name="id-imagens"  id="id-imagens">

                        <button type="submit" id="btn-fotos" name="btn-fotos" class="btn btn-primary">Salvar</button>

                    </div>

                    <hr>


                    <small>  
                        <div align="center" id="mensagem_fotos" class="">

                        </div>
                    </small>   
                </form>
            </div>

        </div>
    </div>
</div>   



<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>


<script type="text/javascript">
	$(document).ready(function() {

		$('#myTab a[href="#recepcion"]').tab('show');

		//$('.sel2').select2({
			//dropdownParent: $('#modalForm')
		//});


		
	});
</script>


<script type="text/javascript">
	$("#seguinte_aba2").click(function () {
	$('#myTab a[href="#higienizacao"]').tab('show');
			
		
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







<script type="text/javascript">
	function carregarImgPrincipal() {
		var target = document.getElementById('target-principal');
		var file = document.querySelector("#foto-principal").files[0];

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
	function carregarImgPlanta() {
		var target = document.getElementById('target-planta');
		var file = document.querySelector("#foto-planta").files[0];

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
	function carregarImgBanner() {
		var target = document.getElementById('target-banner');
		var file = document.querySelector("#foto-banner").files[0];

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
	function carregarImgImovel() {

        var target = document.getElementById('targetImovel');
        var file = document.querySelector("input[id=imgimovel]").files[0];
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
	function carregarVideo() {		
		$('#target-video').attr('src', $('#video').val());
	}
</script>






<!--AJAX PARA LISTAR OS DADOS DAS IMAGENS DOS IMÓVEIS NA MODAL -->
<script type="text/javascript">
			function listarImagens(){
				var id = $('#id-imagens').val();	
				$.ajax({
					url: pag + "/listar-imagens.php",
					method: 'POST',
					data: {id},
					dataType: "text",

					success:function(result){
						$("#listar-imagens").html(result);
					}
				});
			}

		</script>





<!--AJAX PARA EXECUTAR A INSERÇÃO DAS DEMAIS FOTOS DO IMÓVEL -->
<script type="text/javascript">


    $("#form-fotos").submit(function () {

        var pag = "<?=$pag?>";
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: pag + "/inserir-fotos.php",
            type: 'POST',
            data: formData,

            success: function (mensagem) {

                $('#mensagem_fotos').removeClass()

                if (mensagem.trim() == "Inserido com Sucesso") {
                    $('#mensagem_fotos').addClass('text-success');
                    //$('#nome').val('');
                    //$('#cpf').val('');
                    //$('#btn-cancelar-fotos').click();
                    listarImagens();

                } else {

                    $('#mensagem_fotos').addClass('text-danger')

                }

                $('#mensagem_fotos').text(mensagem)

            },

            cache: false,
            contentType: false,
            processData: false,
            xhr: function () {  // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                    myXhr.upload.addEventListener('progress', function () {
                        /* faz alguma coisa durante o progresso do upload */
                    }, false);
                }
                return myXhr;
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




<script type="text/javascript">
	function listarBairros(){
		var cidade = $('#cidade').val();
    $.ajax({
        url: pag + "/listar-bairros.php",
        method: 'POST',
        data: {cidade},
        dataType: "text",

        success:function(result){
            $("#listar-bairros").html(result);
        },

    });
}
</script>

<script>

$("#form-text").submit(function () {
	event.preventDefault();
    nicEditors.findEditor('area').saveContent();
	var formData = new FormData(this);

	$.ajax({
		url: pag + "/inserir.php",
		type: 'POST',
		data: formData,

		success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {                    
                    $('#btn-fechar').click();
                    listar();
                } else {
                	$('#mensagem').addClass('text-danger')
                    $('#mensagem').text(mensagem)
                }

            },

            cache: false,
            contentType: false,
            processData: false,
            
        });

});

</script>


<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

