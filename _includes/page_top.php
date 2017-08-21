<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo"$page_title"?> - Webdoc UFPA 60 Anos</title>
    <meta name="description" content="<?php echo"$page_description"?>">
    <meta name="keywords" content="<?php echo"$page_keywords"?>">

    <link rel="shortcut icon" href="../_media/images/icon.png">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/plyr/1.6.14/plyr.css">
    <link rel="stylesheet" href="../_styles/main.css">
    <link rel="stylesheet" href="../_styles/timeline.css">
    <link rel="stylesheet" href="../_styles/playlist.css">

    <script src="../_scripts/headroom.js"></script>

    <!-- Goolge Analitycs -->

    <!-- get URL for share -->
    <?php $page_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>

    <style type="text/css">
        header.scroll { background: <?php echo"$page_color"?>; }
    </style>
    
</head>

<body>

    <header id="header">

        <a href="../" class="button" id="back">Voltar</a>

        <a href="../" id="logo">Webdoc UFPA 60 Anos</a>

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