<?php 

$page_title = "Sons da UFPA";
$page_description = "xxx";
$page_keywords = "xxx";
$page_color= "rgb(255, 71, 0)";

include '../_includes/page_top.php'

?>

<main class="img-page img-barco">
    

    <div class="auto-screen layer page">

        <div class="screen-container color-yellow">

            <div class="left">

    	    	<h1>Sons da UFPA</h1>
                <hr>
                <p>Cachorros latindo, passarinhos cantando, gente conversando, o ar condicionado funcionando, sapos coaxando, a chuva caindo, o popo passando no rio e o rio balançando. Na UFPA, esses sons fazem parte da rotina de quem frequenta diariamente o campus, localizado às margens do rio Guamá.</p>

            </div>


    <section class="auto-screen">

        <div class="screen-container page-container">

        <div class="tile-container">

            <div class="tile tile-sons tile-large">
                <figure class="img-vestibular"></figure>
                <a href="javascript:;" onmouseover="playAudio('som-pinduca-vestibular.mp3')">
                    <div>
                        <h3>Vestibular</h3>
                    </div>
                </a>
            </div>

            <div class="tile tile-sons tile-large">
                <figure class="img-cachorro"></figure>
                <a href="javascript:;" onmouseover="playAudio('som-cachorro.mp3')">
                    <div>
                        <h3>Cachorros</h3>
                    </div>
                </a>
            </div>

            <div class="tile tile-sons tile-large">
                <figure class="img-popopo"></figure>
                <a href="javascript:;" onmouseenter="playAudio('som-embarcacao.mp3')">
                    <div>
                        <h3>Popopô</h3>
                    </div>
                </a>
            </div>

            <div class="tile tile-sons tile-large">
                <figure class="img-chuva"></figure>
                <a href="javascript:;" onmouseenter="playAudio('som-chuva.mp3')">
                    <div>
                        <h3>Chuva</h3>
                    </div>
                </a>
            </div>

            <div class="tile tile-sons tile-large">
                <figure class="img-burburinho"></figure>
                <a href="javascript:;" onmouseenter="playAudio('som-burburinho.mp3')">
                    <div>
                        <h3>Burburinho</h3>
                    </div>
                </a>
            </div>

            <div class="tile tile-sons tile-large">
                <figure class="img-passarinho"></figure>
                <a href="javascript:;" onmouseenter="playAudio('som-passaros.mp3')">
                    <div>
                        <h3>Pasarinhos</h3>
                    </div>
                </a>
            </div>

            <div class="tile tile-sons tile-large">
                <figure class="img-rio"></figure>
                <a href="javascript:;" onmouseenter="playAudio('som-rio.mp3')">
                    <div>
                        <h3>Rio Guamá</h3>
                    </div>
                </a>
            </div>

            <div class="tile tile-sons tile-large">
                <figure class="img-sapo"></figure>
                <a href="javascript:;" onmouseenter="playAudio('som-sapo.mp3')">
                    <div>
                        <h3>Sapos</h3>
                    </div>
                </a>
            </div>

            <div class="tile tile-sons tile-large">
                <figure class="img-ar"></figure>
                <a href="javascript:;" onmouseenter="playAudio('som-ar-condicionado.mp3')">
                    <div>
                        <h3>Central de Ar</h3>
                    </div>
                </a>
            </div>

        </div> 

        </div>

    </section>


        </div>

    </div>

</main>

<?php include '../_includes/page_bottom.php' ?>

<audio id="player" src="#" type="audio/mp3" autoplay></audio>

<script>
    
    function playAudio(file) {
        let audio = file;
        if (audio !== '') {
            document.getElementById("player").src = "../_media/audios/" + audio;
        }
        else {
            alert("Audio file not found");

        }
    }

    function changeImage(a) {
        document.getElementById("img-vestibular").style.backgroundImage = "url('../_media/images/sons/cachorro.jpg')";
        return document.getElementById("img-vestibular").style.backgroundImage = "url('../_media/images/sons/vestibular-1.png')";
    }

</script>

</body>

</html>
