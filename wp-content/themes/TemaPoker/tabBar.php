<div class="tab-bar-main">
	<a href="<?php bloginfo('url'); ?>"><div id="dLogo" class="dLogo"></div></a>
	<div id="nav-toggle" class="nav-toggle">
		<input id="abrir-cerrar" name="abrir-cerrar" type="checkbox" value="" />
		<label for="abrir-cerrar" class="toggle-button"></label>
	</div>
	<div id="dMenuResp" class="dMenuResp">
	<div id="dBusca" class="dBusca">
		<div id="BtnBusca" class="cBtnBusca"></div>
		<?php get_search_form(); ?>
	</div>
	<div id="nav" class="nav-collapse nav-collapse-0 closed" style="transition: max-height 284ms ease 0s;" aria-hidden="true">
		<ul>
			<li><a href="<?php bloginfo('url'); ?>?cat=<?php echo get_cat_ID('nacional');?>">Nacional</a></li>
			<li><a href="<?php bloginfo('url'); ?>?cat=<?php echo get_cat_ID('internacional');?>">Internacional</a></li>
			<li><a href="<?php bloginfo('url'); ?>?cat=<?php echo get_cat_ID('politica');?>">Política</a></li>
			<li><a href="<?php bloginfo('url'); ?>?cat=<?php echo get_cat_ID('deportes');?>">Deportes</a></li>
			<li><a href="<?php bloginfo('url'); ?>?cat=<?php echo get_cat_ID('turismo');?>">Turismo</a></li>
			<li><a href="<?php bloginfo('url'); ?>?cat=<?php echo get_cat_ID('entretenimiento');?>">Entretenimiento</a></li>
			<li><a href="<?php bloginfo('url'); ?>?cat=<?php echo get_cat_ID('cultura');?>">Cultura</a></li>
			<li>
				<div class="cRedes">
					<div id="cRedSoc" class="cRedSoc1"><a href="https://www.facebook.com/PokerPoliticoMexico"></a></div>
					<div id="cRedSoc" class="cRedSoc2"><a href="https://www.instagram.com/pokerpolitico/?hl=es-la"></a></div>
					<div id="cRedSoc" class="cRedSoc3"><a href="https://twitter.com/PokerPolitico"></a></div>
				</div>
			</li>
		</ul>
	</div>
	</div>
	<script>
		document.getElementById("BtnBusca").addEventListener("click", function( event ) {
			var oBusca = document.getElementById("searchform")
			if(oBusca.className=="searchform"){
				oBusca.className += " Active";
				document.getElementById("BtnBusca").style.background = "url('<?php bloginfo('template_url'); ?>/imagen/Tache.png') no-repeat center/contain";
			}else{
				oBusca.className = "searchform";
				document.getElementById("BtnBusca").style.background = "url('<?php bloginfo('template_url'); ?>/imagen/lupa.png') no-repeat center/contain";
			}
		}, false);
		
		document.getElementById("abrir-cerrar").addEventListener("click", function( event ) {
			var oBusca = document.getElementById("dMenuResp")
			if(oBusca.className=="dMenuResp"){
				oBusca.className += " Active";
			}else{
				oBusca.className = "dMenuResp";
			}
		}, false);
	</script>
</div>