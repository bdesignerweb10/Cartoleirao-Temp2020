<?php 
	require_once('header.php'); 
?>
<main>
	<div class="container">
		<div class="card spacing">
		  <div class="card-header">
		    Configurações gerais do sistema
		  </div>
		  <div class="card-body">
		  	<div class="row">
			    <div class="col-sm-3">
			    	<span>Status da temporada</span>
			    	<h5>Temp. Aberta</h5>
			    </div><!-- col-sm-3 -->	
			    <div class="col-sm-3">
			    	<span>Status do Mercado</span>
			    	<h5>Merc. Fechado</h5>
			    </div><!-- col-sm-3 -->				    
			    <div class="col-sm-3">
			    	<span>Rodada/Temporada Atual</span>
			    	<h5>1/2019</h5>
			    </div><!-- col-sm-3 -->
			    <div class="col-sm-3">
			    	<span>Status da Inscrição</span>
			    	<h5>Insc. Aberta</h5>
			    </div><!-- col-sm-3 -->				    
			</div><!-- row -->
			<div class="row btns">
				<div class="col-sm-4">
			    	<button type="button" class="btn btn-lg btn-danger"><i class="far fa-calendar-times"></i> Encerrar Temporada</button>
			    </div><!-- col-sm-4 -->	
			    <div class="col-sm-4">
			    	<button type="button" class="btn btn-lg btn-info"><i class="fas fa-shopping-cart"></i> Abrir Mercado</button>
			    </div><!-- col-sm-4 -->	
			    <div class="col-sm-4">
			    	<button type="button" class="btn btn-lg btn-warning"><i class="fas fa-edit"></i> Abrir Inscrição</button>
			    </div><!-- col-sm-4 -->	
			</div>
			<div class="row btns">
				<div class="col-sm-12">
					<form>
						<div class="form-row">
						    <div class="form-group col-md-3">
						      <label for="inicio">Inicio Temp.</label>
						      <input type="date" class="form-control" name="inicio" id="inicio" placeholder="Data Inicio">
						    </div>
						    <div class="form-group col-md-5">
						      <label for="email">E-mail Pagseguro</label>
						      <input type="email" class="form-control" name="email" id="email" placeholder="Informe o E-mail">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="token">Token Pagseguro</label>
						      <input type="number" class="form-control" name="token" id="token" placeholder="Informe o E-mail">
						    </div>					
					  	</div>
					  	<div class="form-group form-check">
					    	<input type="checkbox" class="form-check-input" id="exampleCheck1">
					    	<label class="form-check-label" for="exampleCheck1">Comunicação via API do Cartola, pegando dados diretamente do sistema está ativada?</label>
					  	</div>			  
					  <button type="submit" class="btn btn-lg btn-primary"><i class="fas fa-save"></i> Salvar Dados</button>
					</form>
				</div><!-- col-sm-12 -->
			</div>
		  </div>
		</div>
	</div><!-- container -->
</main>
<?php 
	require_once('footer.php'); 
?>