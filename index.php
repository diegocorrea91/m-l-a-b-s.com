<!--
Desenvolvido Por: mLabs
-->
<?php
$url = "http://m-l-a-b-s.com/";
$title = "mLabs";

$var = array(
        "1" => array(
                  "titulo" => "mLabs",
                  "image" => "http://mkt.alugaria.com.br/alugaria/GIF-1/1.png"
                  ),
        "2" => array(
                  "titulo" => "mLabs",
                  "image" => "http://mkt.alugaria.com.br/alugaria/GIF-1/2.png"
                  ),
        "3" => array(
                  "titulo" => "mLabs",
                  "image" => "http://mkt.alugaria.com.br/alugaria/GIF-1/3.png"
                  ),
        "4" => array(
                  "titulo" => "mLabs",
                  "image" => "http://mkt.alugaria.com.br/alugaria/GIF-1/4.png"
        );

$section = array_rand($var);

?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?php echo $var[$section]['titulo']; ?>" />
<meta property="og:url" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:type" content="video.other">

<script>
  setTimeout(function(){
    window.location='https://www.mlabs.com.br/';
  },100);
</script>
