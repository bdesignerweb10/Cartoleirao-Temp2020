<?php
	require_once('header.php');
?>
<main>
	<div class="container">
		<div class="row select-club">
			<div class="col-sm-8">
				<p>Selecione o clube que deseja conhecer a história</p>
			</div>
			<div class="col-sm-4" id="escudos-container">
				<select class="form-control escudos">
				  <!--<option>Boleanos FC</option>
				  <option>Hasdrubal FC</option>
				  <option>Palestrino 84 FC</option>
				  <option>Não jogo! dou aula!</option>-->
				</select>
			</div>
		</div>
		<div class="row club">			
			<div class="col-sm-4">
				<div class="card" style="width: 18rem;">
				  <img src="" class="card-img-top brasao" alt="...">
				  <div class="card-body">
				  	<h5 class="headline"><strong class="nome nome_time"></strong></h5>
				    <p class="card-text">Presidente: <span class="nome nome_presidente"></span><br />
				    Ano de fundação: <span class="nome ano_fundacao"></span></p>
				    <p>Último Titulo: <span>Copa Kempes - 2017</span></p>
				  </div>
				</div>
			</div><!-- col-sm-4-->
			<div class="col-sm-8">
				<div class="card club-info">
				  <div class="card-header">
				    História de <span class="nome nome_time"></span>
				  </div>
				  <div class="card-body" id="historia">
				    <blockquote class="blockquote mb-0">
				      <p class="text-hitoria"></p>
				      <footer class="blockquote-footer">Presidente do Clube: <cite title="Source Title" class="nome nome_presidente"></cite></footer>
				    </blockquote>
				  </div>
				</div>
			</div><!-- col-sm-8-->
			<div class="col-sm-4">
				<div class="card trophy-gallery" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Galeria de Troféus</h5>				    
				    <p class="card-text"><i class="fas fa-trophy"></i> Copa Kempes 2017 <br />
				    <i class="fas fa-trophy"></i> Copa Beer 2016</p>				    
				  </div>
				</div>
			</div><!-- col-sm-4-->
			<div class="col-sm-8">
				<div class="card club-championships">
				  <div class="card-header">
				    Desempenho de <span class="nome nome_time"></span> em outras temporadas
				  </div>
				  <div class="card-body">
				  	<ul class="nav nav-pills nav-temporada mb-3" id="pills-tab" role="tablist">
					  <li class="nav-item">					    
					  </li>					  
					</ul>
					<div class="tab-content" id="pills-tabContent">
					  <!--<div class="tab-pane fade show active" id="a1" role="tabpanel" aria-labelledby="pills1">2015</div>
					  <div class="tab-pane fade" id="a2" role="tabpanel" aria-labelledby="pills2">2016</div>
					  <div class="tab-pane fade" id="a3" role="tabpanel" aria-labelledby="pills3">2017</div>-->
					</div>					    								    
				  </div>
				</div>
			</div><!-- col-sm-8-->
		</div><!-- row -- >
	</div><!-- container -->
</main>
<?php
	require_once('footer.php');
?>