<?php 
	require_once('header.php'); 
?>
<main>
	<div class="container">
		<div class="card spacing">
			  <div class="card-header">
			    Gerenciamento de campeonatos		    
			  </div>
			  <div class="row btn-action">		
				  <div class="col-sm-8"></div>
				  <div class="col-sm-4">
				  	<button type="button" class="btn btns btn-lg btn-success"><i class="fas fa-plus"></i> Novo Campeonato</button>
				  </div><!-- col-sm-4 -->	
			  </div><!-- row -->	  
			  <div class="card-body">
			    <table class="table tbl-users table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nome do Campeonato</th>
				      <th scope="col">Inicio</th>
				      <th scope="col">Valor da Inscrição</th>
				      <th scope="col">Liga ou Copa?</th>
				      <th scope="col">Inscrição</th>				      
				      <th scope="col">Opções</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Liga Cartoleirão - Trabalho Seguro TS</td>
				      <td>1º Rodada</td>
				      <td>R$50,00</td>				      
				      <td><i class="fas fa-futbol" title="Liga Clássica"></i></td>
				      <td>Aberta</td>				      
				      <td>
				      	<a href="#" title="Editar informações do campeonato"><i class="fas fa-edit icon-edit"></i></a>				      	
				      	<a href="" title="Deletar campeonato" data-toggle="modal" data-target="#remove"><i class="fas fa-trash-alt icon-delete"></i></a>
				      </td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Copa Kempes VI</td>
				      <td>4º Rodada</td>
				      <td>R$10,00</td>				      
				      <td><i class="fas fa-trophy" title="Torneio Mata Mata"></i></td>
				      <td>Fechada</td>				      
				      <td>
				      	<a href="#" title="Editar informações do campeonato"><i class="fas fa-edit icon-edit"></i></a>				      	
				      	<a href="" title="Deletar campeonato"><i class="fas fa-trash-alt icon-delete"></i></a>
				      </td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Copa Beer</td>
				      <td>9º Rodada</td>
				      <td>1 Pack de Heineken</td>				      
				      <td><i class="fas fa-trophy" title="Torneio Mata Mata"></i></td>	
				      <td>Encerrada</td>			      
				      <td>
				      	<a href="#" title="Editar informações do campeonato"><i class="fas fa-edit icon-edit"></i></a>				      	
				      	<a href="" title="Deletar campeonato"><i class="fas fa-trash-alt icon-delete"></i></a>
				      </td>
				    </tr>
				  </tbody>
				</table>
				<div class="col-sm-12 legend">
					<p><i class="fas fa-futbol" title="Liga Clássica"></i> Liga Clássica</p>
					<p><i class="fas fa-trophy" title="Torneio Mata Mata"></i> Mata Mata</p>
				</div>
			</div>
		</div>
	</div><!-- container -->

	<!-- Modal Delete -->
	<div class="modal fade" id="remove" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header modal-danger">
	        <h5 class="modal-title" id="exampleModalLabel">Dados Excluidos!</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>Os dados foram excluidos com sucesso!</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>      
	      </div>
	    </div>
	  </div>
	</div>
</main>


<main>
	<div class="container">
		<div class="card spacing">
			<div class="card-header">
				Gerenciamento de campeonatos			    
			</div>
			<div class="row btn-action">		
				<div class="col-sm-8"></div>
				<div class="col-sm-4">
					<button type="button" class="btn btns btn-lg btn-secondary"><i class="fas fa-arrow-left"></i> Voltar</button>
				</div><!-- col-sm-4 -->	
			</div><!-- row -->	  
			<div class="card-body">
				<form>
					<div class="form-row">
					    <div class="form-group col-md-1">
					      <label for="camp-id">ID</label>
					      <input type="number" class="form-control" name="camp-id" id="camp-id" disabled>
					    </div>
					    <div class="form-group col-md-6">
					      <label for="camp-nome">Nome do Campeonato</label>
					      <input type="text" class="form-control" name="camp-nome" id="camp-nome" placeholder="Informe o nome do Campeonato">
					    </div>
					    <div class="form-group col-md-2">
					      <label for="camp-valor">Valor</label>
					      <input type="number" class="form-control" name="camp-valor" id="camp-valor" placeholder="R$00,00">
					      <div class="col-sm-12 value-insc">
					      	<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
							    Outro tipo de valor
							  </label>
					      </div>
					    </div>
					    <div class="form-group col-md-3">
					      <label for="inputState">Liga ou Copa</label>
					      <select id="inputState" class="form-control">
					        <option selected>Selecione o tipo do Campeonato</option>
					        <option>Liga Clássica</option>
					        <option>Copa - Mata Mata</option>
					      </select>
					    </div>
			       	</div><!-- form-row -->
			       	<!-- espcifico para copas -->
			       	<div class="form-row">
				  		<div class="form-group col-md-2">
					      <label for="inputState">Qtd de Clubes</label>
					      <select id="inputState" class="form-control">					        
					        <option>4 Clubes</option>
					        <option>8 Clubes</option>
					        <option>12 Clubes</option>
					        <option>32 Clubes</option>
					      </select>
					    </div>
					    <!-- espcifico para copas -->
				  		<div class="form-group col-md-2">
					      <label for="inputState">Rodada Inicio</label>
					      <select id="inputState" class="form-control">					        
					        <option>1º Rodada</option>
					        <option>2º Rodada</option>
					        <option>3º Rodada</option>
					        <option>4º Rodada</option>
					        <option>5º Rodada</option>
					        <option>6º Rodada</option>
					        <option>7º Rodada</option>
					        <option>8º Rodada</option>
					        <option>9º Rodada</option>
					        <option>10º Rodada</option>
					        <option>11º Rodada</option>
					        <option>12º Rodada</option>
					        <option>13º Rodada</option>
					        <option>14º Rodada</option>
					        <option>15º Rodada</option>
					        <option>16º Rodada</option>
					        <option>17º Rodada</option>
					        <option>18º Rodada</option>
					        <option>19º Rodada</option>
					        <option>20º Rodada</option>
					        <option>21º Rodada</option>
					        <option>22º Rodada</option>
					        <option>23º Rodada</option>
					        <option>24º Rodada</option>
					        <option>25º Rodada</option>
					        <option>26º Rodada</option>
					        <option>27º Rodada</option>
					        <option>28º Rodada</option>
					        <option>29º Rodada</option>
					        <option>30º Rodada</option>
					        <option>31º Rodada</option>
					        <option>32º Rodada</option>
					        <option>33º Rodada</option>
					        <option>34º Rodada</option>
					        <option>35º Rodada</option>
					        <option>36º Rodada</option>
					        <option>37º Rodada</option>
					        <option>38º Rodada</option>
					      </select>
					    </div>
				    	<!-- especifico para liga -->
				    	<!-- a qtd vai pegar dos usuários ativados "pagos" -->
				    	<!--<div class="form-group col-md-2">
					      <label for="camp-nome">Qtd de Clubes</label> 
					      <input type="number" class="form-control" value="50" disabled>
					    </div>-->
					    <!-- especifico para liga -->
				    	<!--<div class="form-group col-md-2">
					      <label for="camp-nome">Rodada Inicio</label>
					      <input type="number" class="form-control" value="1" disabled>
					    </div>-->
					    <div class="form-group col-md-4">
					      <label for="slug">Slug da Liga</label>
					      <input type="text" class="form-control" name="slug" id="slug" placeholder="Informe o slug da liga">
					    </div>
					    <div class="form-group col-md-2">
					      <label for="inputState">Inscrições abertas?</label>
					      <select id="inputState" class="form-control">					        
					        <option class="text-success">Sim</option>
					        <option class="text-danger">Não</option>
					        <option class="text-secondary">Encerradas</option>					        
					      </select>
					    </div>
						<div class="form-group col-md-2">
					      <label for="camp-nome"><span class="badge badge-success">Sim</span><!--<span class="badge badge-danger">Não</span>--><!--<span class="badge badge-secondary">Encerradas</span>--></label>
					    </div>
					    <div class="form-group col-md-12">
					      <label for="slug">Regulamento do Campeonato</label>
					      <textarea class="form-control" id="regulamento" name="regulamento" cols="30" rows="10"></textarea>					      
					    </div>
				  	</div>				  	
				</form>
				<div class="row btn-action-2">
					<div class="col-sm-2"></div>
					  	<div class="col-sm-6">
					  		<button type="submit" class="btn btn-lg btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="far fa-save"></i> Salvar e Aguardar sorteio do Cartola FC</button>
					  	</div>
					  	<div class="col-sm-4">
					  		<button type="submit" class="btn btn-lg btn-primary"><i class="far fa-save"></i> Salvar e definir confrontos</button>
					  	</div>
					  	<!-- botão exclusivo se for liga -->
					  	<!--<div class="col-sm-4">
					  		<button type="submit" class="btn btn-lg btn-primary">Salvar Campeonato</button>
					  	</div>-->	
				  	</div>
				</div>			
		</div><!-- card -->		
	</div><!-- container -->

	<!-- Modal Confrontos via API -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Campeonato Criado com Sucesso</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>O Campeonato x foi criado com sucesso, você escolheu aguardar o sorteio do site do Cartola FC para definir os confrontos, esse processo é <strong class="text-danger">Irreversivél</strong>, deseja continuar?</p>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary">Confirmar</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>	        
	      </div>
	    </div>
	  </div>
	</div>	
</main>


<main>
	<div class="container">
		<div class="card spacing">
			<div class="card-header">
				Gerenciamento de campeonatos			    
			</div>
			<div class="row btn-action">		
				<div class="col-sm-8"></div>
				<div class="col-sm-4">
					<button type="button" class="btn btns btn-lg btn-secondary"><i class="fas fa-arrow-left"></i> Voltar</button>
				</div><!-- col-sm-4 -->	
			</div><!-- row -->	  
			<div class="card-body">
				<div class="row">
					<div class="col-sm-6 cup-vs">
						<div class="card">
						  <div class="card-header">
						    Chave 1
						  </div>
						  <div class="card-body">
						    <div class="form-row">
						  		<div class="form-group col-md-5">							      
							      <select id="inputState" class="form-control">					        
							        <option>Hasdrubal FC</option>
							        <option>Boleanos FC</option>
							        <option>Palestrino FC</option>
							        <option>Jumentus RC</option>
							      </select>
							    </div>
							    <span>x</span>	
							    <div class="form-group col-md-5">							      
							      <select id="inputState" class="form-control">					        
							        <option>Não jogo! Dou Aula!</option>
							        <option>Boleanos FC</option>
							        <option>Palestrino FC</option>
							        <option>Jumentus RC</option>
							      </select>
							    </div>				    
						  	</div><!-- row -->
						  </div>
						</div>
					</div>

					<div class="col-sm-6 cup-vs">
						<div class="card">
						  <div class="card-header">
						    Chave 2
						  </div>
						  <div class="card-body">
						    <div class="form-row">
						  		<div class="form-group col-md-5">							      
							      <select id="inputState" class="form-control">					        
							        <option>Hasdrubal FC</option>
							        <option>Boleanos FC</option>
							        <option>Palestrino FC</option>
							        <option>Jumentus RC</option>
							      </select>
							    </div>
							    <span>x</span>	
							    <div class="form-group col-md-5">							      
							      <select id="inputState" class="form-control">					        
							        <option>Não jogo! Dou Aula!</option>
							        <option>Boleanos FC</option>
							        <option>Palestrino FC</option>
							        <option>Jumentus RC</option>
							      </select>
							    </div>				    
						  	</div><!-- row -->
						  </div>
						</div>
					</div><!--col-sm-6 -->

					<div class="col-sm-6 cup-vs">
						<div class="card">
						  <div class="card-header">
						    Chave 3
						  </div>
						  <div class="card-body">
						    <div class="form-row">
						  		<div class="form-group col-md-5">							      
							      <select id="inputState" class="form-control">					        
							        <option>Hasdrubal FC</option>
							        <option>Boleanos FC</option>
							        <option>Palestrino FC</option>
							        <option>Jumentus RC</option>
							      </select>
							    </div>
							    <span>x</span>	
							    <div class="form-group col-md-5">							      
							      <select id="inputState" class="form-control">					        
							        <option>Não jogo! Dou Aula!</option>
							        <option>Boleanos FC</option>
							        <option>Palestrino FC</option>
							        <option>Jumentus RC</option>
							      </select>
							    </div>				    
						  	</div><!-- row -->
						  </div>
						</div>
					</div><!--col-sm-6 -->

					<div class="col-sm-6 cup-vs">
						<div class="card">
						  <div class="card-header">
						    Chave 4
						  </div>
						  <div class="card-body">
						    <div class="form-row">
						  		<div class="form-group col-md-5">							      
							      <select id="inputState" class="form-control">					        
							        <option>Hasdrubal FC</option>
							        <option>Boleanos FC</option>
							        <option>Palestrino FC</option>
							        <option>Jumentus RC</option>
							      </select>
							    </div>
							    <span>x</span>	
							    <div class="form-group col-md-5">							      
							      <select id="inputState" class="form-control">					        
							        <option>Não jogo! Dou Aula!</option>
							        <option>Boleanos FC</option>
							        <option>Palestrino FC</option>
							        <option>Jumentus RC</option>
							      </select>
							    </div>				    
						  	</div><!-- row -->
						  </div>
						</div>
					</div><!--col-sm-6 -->
				</div><!-- row -->
				<div class="row btn-action-2">
					<div class="col-sm-8"></div>
					  	<div class="col-sm-4">
					  		<button type="submit" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#confrontosmata"><i class="far fa-save"></i> Salvar confrontos</button>
					  	</div>
				  	</div>
				</div>
			</div>							
		</div><!-- card -->		
	</div><!-- container -->

	<!-- Modal confrontos copa manual -->
	<div class="modal fade" id="confrontosmata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Confrontos Definidos!</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>Os Confrontos foram definidos, a disputa será exibida na tela de mata mata do site.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>	        
	      </div>
	    </div>
	  </div>
	</div>		
</main>
<?php 
	require_once('footer.php'); 
?>