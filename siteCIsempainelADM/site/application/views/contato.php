<?php $this->load->view('header'); ?>		
	<div class="linha">
		<section>
			<div class="coluna col5 sidebar">
				<h3>Localização</h3>
				<img src="<?php echo base_url('assets/img/mapa.jpg') ?>" alt="" />
				<ul class="sem-padding sem-marcador">
					<li>Praça da República, 45</li>
					<li>Centro</li>
					<li>Rio de Janeiro - RJ</li>
				</ul>
				<h3>Contato direto</h3>
				<ul class="sem-padding sem-marcador">
					<li>Fone: <strong>(21) 9999-9999</strong></li>
					<li>Email: <strong>contato@iquaresma.com</strong></li>
					
				</ul>
			</div>
			<div class="coluna col7 contato">
				<h2>Envie uma mensagem</h2>
				<?php
					if($formerror):
						echo '<p>' .$formerror. '</p>';
					endif;				
					echo form_open('pagina/contato');
					echo form_label('Seunome:', 'nome');
					echo form_input('nome');
					echo form_label('Seu email:', 'email');
					echo form_input('email');
					echo form_label('Assunto:', 'assunto');
					echo form_input('assunto');
					echo form_label('Mensagem:', 'mensagem');
					echo form_textarea('mensagem');
					echo form_submit('enviar', 'Enviar mensagem >>', array('class' => 'botao')); 
					echo form_close();
				?>

			</div>
		</section>
	</div>
	<div class="conteudo-extra">
		<div class="linha">
			<div class="coluna col7">
				<section>
					<h2>Método alternativo de contato</h2>
					<p>Caso não consiga me contatar por alguns dos meio acima, possivelmente eu estarei em uma ilha deserta em algum lugar do pacífico. Neste caso há três possibilidades:</p>
					<ol>
						<li>Enviar uma mensagem em uma garrafa</li>
						<li>Contratar um pombo correio</li>
						<li>Tentar um sinal de fumaça</li>
					</ol>
					<p>Mas sinceramente não sei se algum desses métodos será eficiente, tente por sua conta e risco :D</p>
				</section>
			</div>
			<div class="coluna col5">
				<?php require_once('noticias.php'); ?>
			</div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>