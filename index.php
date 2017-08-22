<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title>Webdoc UFPA 60 Anos</title>
  	<meta name="description" content="#">
  	<meta name="keywords" content="webdoc ufpa, webdocumentario ufpa, webdocumentario ufpa 60 anos">

  	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
  	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css">
  	<link rel="stylesheet" href="_styles/main.css">

    <link rel="shortcut icon" href="_media/images/icon.png">

    <!-- Chrome / Firefox / Opera - Android -->

    <!-- Safari - iOS -->

    <!-- Edge / IE - Windows -->

    <!-- Google+ / Schema.org -->

    <!-- Facebook / Open Graph -->

    <!-- Twitter -->

	<script src="_scripts/load.js"></script>

	<!-- Goolge Analitycs -->

	<!-- get URL for share -->
    <?php $page_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>

</head>

<body class="home">



    <header id="header">

        <a href="" id="logo">Webdoc UFPA 60 Anos</a>

        <button data-fancybox data-src="#share-box" href="javascript:;" id="share">Compartilhar</button>

        <div id="share-box" class="share" style="display:none;">

            <h3>Compartilhe</h3>
            <!-- <h4><?php echo $page_title;?></h4> -->

            <hr>

            <a aria-label="Compartilhe por Email" href="mailto:?subject=<?php echo $page_title;?> – Webdoc UFPA 60 Anos&body=Link:%20<?php echo $page_url;?>" class="icon-email" title="Compartilhe por Email">
                <span>Email</span>
            </a>

            <a aria-label="Compartilhe no WhatsApp" href="whatsapp://send?text=<?php echo $page_title;?> – Webdoc UFPA 60 Anos <?php echo $page_url;?>" class="icon-whatsapp" title="Compartilhe no WhatsApp">
                <span>WhatsApp</span>
            </a>

            <a aria-label="Compartilhe no Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page_url;?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="icon-facebook" title="Compartilhe no Facebook">
                <span>Facebook</span>
            </a>

            <a aria-label="Compartilhe no Twitter" href="https://twitter.com/intent/tweet?url=<?php echo $page_url;?>&amp;text=<?php echo $page_title;?>&amp;via=RadioWebUFPA" onclick="window.open(this.href, 'twitter-share', 'width=550,height=280');return false;" class="icon-twitter" title="Compartilhe no Twitter">
                <span>Twitter</span>
            </a>

            <a aria-label="Compartilhe no Google Plus" href="https://plus.google.com/share?url=<?php echo $page_url;?>" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;" class="icon-googleplus" title="Compartilhe no Google+">
                <span>Google+</span>
            </a>

            <a aria-label="Compartilhe no Pinterest" href="javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());" class="icon-pinterest" title="Compartilhe no Pinterest">
                <span>Pinterest</span>
            </a>

        </div>
        
    </header>



	<div id="load"></div>


	<div id="slide" class="swiper-container">

        <div class="swiper-wrapper">



            <div class="swiper-slide" data-hash="menu">

				<section class="full-screen layer home-sliding">

					<div class="home-background"></div>

						<div class="screen-container color-orange">

				            <nav>

				                <a href="radiodocumentario" onmouseenter="playAudio()">
				                    <figure class="icon-radio"></figure>
				                    <h4>Radiodoc UFPA 60 Anos</h4>
				                </a>

				                <a href="memorias-ufpa" onmouseenter="playAudio()">
				                    <figure class="icon-galeria"></figure>
				                    <h4>Memórias UFPA</h4>
				                </a>

				                <a href="ufpa-de-todos" onmouseenter="playAudio()">
				                    <figure class="icon-video"></figure>
				                    <h4>UFPA de Todos</h4>
				                </a>

				           		<a href="eu-na-ufpa" onmouseenter="playAudio()">
				                    <figure class="icon-pessoa"></figure>
				                    <h4>#EuNaUFPA</h4>
				                </a>

				                <a href="sons-da-ufpa" onmouseenter="playAudio()">
				                    <figure class="icon-audio"></figure>
				                    <h4>Sons da UFPA</h4>
				                </a>

				                <a href="noticias" onmouseenter="playAudio()">
				                    <figure class="icon-noticias"></figure>
				                    <h4>Notícias</h4>
				                </a>

							</nav>

						</div>

				</section>
            
            </div>



            <div class="swiper-slide" data-hash="radiodoc">

	            <section class="full-screen layer img-home">

	            	<div class="screen-container color-blue">

		            	<div class="left">
							
							<a href="radiodocumentario" class="bloco" onmouseenter="playAudio()">
								<figure class="icon-radio"></figure>

			            		<p>60 anos em 6 epsódios</p>
				            	<h2>Radiodoc UFPA 60 Anos</h2>

								<p>Conheça a trajetória da mais importante instituição acadêmica e científica do Estado do Pará e principal formadora de recursos humanos de alto nível para a Amazônia.</p>
							</a>

			            </div>

		            </div>

		        </section>

            </div>




            <div class="swiper-slide" data-hash="memorias-ufpa">

	            <section class="full-screen layer img-memorias">

	            	<div class="screen-container color-green">

		            	<div class="left">
							
							<a href="memorias-ufpa" class="bloco" onmouseenter="playAudio()">
								<figure class="icon-galeria"></figure>

			            		<p>A história registrada</p>

				            	<h2>Memórias UFPA</h2>

								<p>Infográficos com fotográfias históricas e curiosidades sobre a UFPA. Os bastidores da universidade como você nunca viu.</p>
							</a>

			            </div>

		            </div>

		        </section>
            	
            </div>



            <div class="swiper-slide" data-hash="ufpa-de-todos">


            	<section class="full-screen layer img-videos">

	            	<div class="screen-container color-red">

		            	<div class="left">
							
							<a href="ufpa-de-todos" class="bloco" onmouseenter="playAudio()">
								<figure class="icon-video"></figure>

			            		<p>Desenvolvimento com inclusão</p>

				            	<h2>UFPA de Todos</h2>

								<p>As personalidades que constroem a UFPA todos os dias. Reitor, pro-reitores, professores, estudantes, técnicos administrativos, movimentos sociais, sindicatos e minorias.</p>
							</a>

			            </div>

		            </div>

		        </section>
            	
            </div>




			<div class="swiper-slide" data-hash="eu-na-ufpa">

	            <section class="full-screen layer img-galeria">

	            	<div class="screen-container color-purple">

		            	<div class="left">
							
							<a href="eu-na-ufpa" class="bloco" onmouseenter="playAudio()">
								<figure class="icon-pessoa"></figure>

			            		<p>Você também faz parte <3</p>

				            	<h2>#EuNaUFPA</h2>

								<p>Faça sua selfie ou videoselfie na universidade e publique nas redes sociais com a hashtag #EuNaUFPA. Você aparecerá aqui. Participe!</p>
							</a>

			            </div>

		            </div>

		        </section>
				
			</div>





			<div class="swiper-slide" data-hash="sons-da-ufpa">


	            <section class="full-screen layer img-sons">

	            	<div class="screen-container color-yellow">

		            	<div class="left">
							
							<a href="sons-da-ufpa" class="bloco" onmouseenter="playAudio()">
								<figure class="icon-audio"></figure>

			            		<p>Você reconhece?</p>
				            	<h2>Sons da UFPA</h2>

								<p>Uma coleção de sons que remetem aos ambientes caracteristicos da UFPA. Do canto das águas do Rio Guamá ao... Latido dos cachorros!</p>
							</a>

			            </div>

		            </div>

		        </section>
				
			</div>






        </div>

        <div class="swiper-pagination"></div>
    </div>


	<footer class="home-footer">

		<ul>
			<p><?php echo date("Y");?> &copy; Rádio Web UFPA</p>
			<li><a href="equipe">Equipe</a></li>
		</ul>

	</footer>

	<audio id="hoverID">
	  <source src="//aaronkutnick.com/ISS240/menu-click/1.mp3" type="audio/mpeg">
	</audio>

	<audio autoplay loop>
		<source src="_media/audios/trilha-sonora-ufpa-60-anos.mp3" type="audio/mpeg">
	</audio>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    direction: 'vertical',
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 0,
    mousewheelControl: true,
    /*hashnav: true,*/
    loop: true
});
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

<script>

	var audio1 = document.getElementById("hoverID");

	function playAudio() {
	  audio1.play();
	}
</script>

</body>

</html>