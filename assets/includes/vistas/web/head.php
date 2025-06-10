<?php
    if(!empty($url_f)){
        $title_p = str_replace("-", " ", $url_f );
    }
    else{
        $title_p="Nuestros productos";
    }
    

?>

<head>    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>bink - <?php echo $title_p; ?></title>
    <meta name="twitter:title" content="ebnk">
    <meta property="og:image" content="<?php echo $ruta;?>assets/img/ebnk_favicon.png">
    <meta property="og:type" content="website">
    <meta name="twitter:image" content="<?php echo $ruta;?>assets/img/ebnk_logo.svg">
    <link rel="icon" type="image/png" sizes="201x200" href="./assets/img/ebnk_favicon.png">
    <link rel="stylesheet" href="<?php echo $ruta;?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $ruta;?>assets/css/Features-Centered-Icons-icons.css">
    <link rel="stylesheet" href="<?php echo $ruta;?>assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="<?php echo $ruta;?>assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="<?php echo $ruta;?>assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?php echo $ruta;?>assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?php echo $ruta;?>assets/css/estilos.css">
</head>