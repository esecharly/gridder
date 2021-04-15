<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google imagenes</title>
    <?php
        require_once 'dependencias.php';
        require_once 'contenido.php';
        $datos = contenido();
    ?>
</head>
<body class="bg-dark text-white">
    <div class="container">
        <h1>Presentacion de imagenes tipo Google</h1>
        <h2>Bestias mitologicas</h2>
        <!-- <ul class="gridder">
            <li class="gridder-list" data-griddercontent="#gridder-content-0">
                <img src="img/manticora.jpg" alt="">
            </li>
        </ul>
        <div id="gridder-content-0" class="gridder-content">
            <div class="row">
                <div class="col-sm-6 bg-dark">
                    <img src="img/manticora.jpg" alt="" class="img-fluid">  img-responsive fue sustituido por img-fluid en bootstrap 4
                </div>
                <div class="col-sm-6 bg-dark">
                    <h2>Manticora</h2>
                    <p>La mant�cora es una legendaria criatura persa similar a la esfinge egipcia. Tiene el cuerpo de un le�n, una cabeza humana con tres filas de dientes afilados y a veces alas de murci�lago. Otros aspectos de la criatura var�an de una historia a otra.</p>
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col">
                <ul class="gridder">
                    <?php
                        for ($i=0; $i < count($datos); $i++) :
                            $d = explode("||",$datos[$i]);
                    ?>
                    <li class="gridder-list" data-griddercontent="<?php echo '#gridder-content-'.$i ?>">
                            <img src="<?php echo $d[0] ?>" alt="" class="img-fluid">
                    </li>
                    <?php
                        endfor;
                    ?>
                </ul>

                <?php
                    for ($i=0; $i < count($datos); $i++) :
                        $d = explode("||",$datos[$i]);
                ?>
                <div id="<?php echo 'gridder-content-'.$i?>" class="gridder-content">
                        <div class="row">
                            <div class="col-sm-6 bg-dark">
                                <img src="<?php echo $d[0] ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-6 bg-dark">
                                <h2><?php echo $d[1]; ?></h2>
                                <p><?php echo $d[2]; ?></p>
                            </div>
                        </div>
                </div>
                <?php
                    endfor;
                ?>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    $(document).ready(function(){
        $('.gridder').gridderExpander({
            scroll: true,
            scrollOffset: 60,
                scrollTo: "listitem",
                animationSpedd: 100,
                animationEasing: "easeInOutExpo",
                showNav: true,
                nextText: "<i class=\"fa fa-arrow-right\"></i>",
                prevText: "<i class=\"fa fa-arrow-left\"></i>",
                closeText: "<i class=\"fa fa-times\"></i>",
                onStart: function() {
                    console.log("Gridder Initialized");
                },
                onContent: function() {
                    console.log("Gridder Content Loaded");
                    $('.carousel').carousel();
                },
                onClosed: function() {
                    console.log("Gridder Closed");
                }
        });
    });
</script>