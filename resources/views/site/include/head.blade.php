<?php
/**
 * Created by PhpStorm.
 * User: Luiz
 * Date: 18/11/2016
 * Time: 12:52
 */
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kyodai - Home</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="site/assets/css/site.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="site/assets/js/bootstrap.min.js"></script>

    <script>
        $(function(){

            $(window).on("scroll", function() {

                if($(window).scrollTop() > 50) {
                    $(".topo").addClass("active-header");

                } else {
                    //remove the background property so it comes transparent again (defined in your css)
                    $(".topo").removeClass("active-header");
                }
            });
        });

    </script>
</head>