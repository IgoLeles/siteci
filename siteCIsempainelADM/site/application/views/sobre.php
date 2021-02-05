<?php $this->load->view('header'); ?>		
	<div class="linha">
		<section>
			<div class="coluna col8">
				<h2>Sobre mim</h2>
				<p>Me chamo Igo, sim, sei o que você está pensando, não está faltando nada, meu nome é assim mesmo.</p>
				<p>Quando eu era pequeno, provavelmente estavam cobrando por letra para registrar os recém-nascidos.</p>
				<p></p>
				<p></p>
				<h2>Porque trabalho com web</h2>
				<p>Na verdade isso aqui é mais uma tentativa.</p>
				<p>Tentei fazer um projeto que abordasse os pontos do CI (Code Igniter).</p>
				<p>Com métodos, rotas, arrays, funções, acho que tá tudo aí, tem mais coisa!</p>
			</div>
			<div class="coluna col4 sidebar">
				<h3>Formação profissional</h3>
				<img src="<?php echo base_url('assets/img/formatura.jpg') ?>" alt="" />
				<ul>
					<li></li>
					<li>Especialização em jogar conteúdo</li>
				</ul>
				<h3>Áreas de conhecimento</h3>
				<ul>
					<li>HTML e CSS</li>
					<li>Javascript e jQuery</li>
					<li>PHP</li>
					<li>Wordpress</li>
					<li>Codeigniter</li>
					<li>PostgreSQL</li>
				</ul>
			</div>
		</section>
	</div>
	<div class="conteudo-extra">
		<div class="linha">
			<div class="coluna col7">
				<section>
					<h2>Curiosidade</h2>
					<p>Atuo também como fotógrafo profissional nas horas vagas.</p>
					<p>Tenho mais de 11 anos de estrada clicando.</p>
					<p>Para quem estiver curioso, www.ilqfoto.com.br .</p>
					<p>E no Instagram @ilqfoto.</p>
				</section>
			</div>
			<div class="coluna col5">
				<?php require_once('noticias.php'); ?>
			</div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>		