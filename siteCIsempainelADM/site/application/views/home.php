<?php $this->load->view('header'); ?>
<div class="linha">
		<section>
			<div class="coluna col3 sidebar">
				<h3>Clientes satisfeitos</h3>
				<ul class="sem-marcador sem-padding">
					<li><a href="">ASSEJUR</a></li>
					<li><a href="">ASSINFO</a></li>
					<li><a href="">DGAL</a></li>
					<li><a href="">DGF</a></li>
					<li><a href="">DGP</a></li>
					<li><a href="">FUNESBOM</a></li>
					<li><a href="">SUAD</a></li>
				</ul>
				<a href="<?php echo base_url('clientes'); ?>" class="botao">Ver todos &raquo;</a>
			</div>
			<div class="coluna col9">
				<h2>Último trabalho: <em>CBMERJ</em></h2>
				<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="" />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla cumque maiores, nesciunt sequi. Quam repellat odio enim, nisi facere maiores rerum! Labore quas, necessitatibus aspernatur! Voluptatibus ad nesciunt, consectetur et velit cupiditate, consequatur asperiores reiciendis tempore sequi ipsam, fugit alias error deleniti? Architecto doloribus est facere odio vel placeat ea.</p>
				<a href="<?php echo base_url('clientes'); ?>" class="botao">Ver outros trabalhos &raquo;</a>
			</div>
		</section>
	</div>
	<div class="conteudo-extra">
		<div class="linha">
			<div class="coluna col7">
				<section>
					<h2>Como um site pode ajudar sua empresa?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi labore voluptatem vel excepturi porro dolorum autem quia veniam, a, at molestiae, in ut dignissimos, natus.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi labore voluptatem vel excepturi porro dolorum autem quia veniam, a, at molestiae, in ut dignissimos, natus.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi labore voluptatem vel excepturi porro dolorum autem quia veniam, a, at molestiae, in ut dignissimos, natus.</p>
				</section>
			</div>
			<div class="coluna col5">
				<?php $this->load->view('noticias'); ?>
			</div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>

