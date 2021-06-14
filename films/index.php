<?php
    include 'films/functions/main-functions.php';

    $pages = scandir('films/pages/');
    if(isset($_GET['page']) && !empty($_GET['page'])){
        if(in_array($_GET['page'].'.php',$pages)){
            $page = $_GET['page'];
        }else{
            $page = "error";
        }
    }else{
        $page = "home";
    }

    $pages_functions = scandir('films/functions/');
    if(in_array($page.'.func.php',$pages_functions)){
        include 'films/functions/'.$page.'.func.php';
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="films/css/materialize.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        
        <div class="container">
            <?php
                include 'films/pages/'.$page.'.php';
            ?>
        </div>


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="films/js/materialize.js"></script>
        <script type="text/javascript" src="films/js/script.js"></script>
        <?php
            $pages_js = scandir('films/js/');
            if(in_array($page.'.func.js',$pages_js)){
                ?>
                    <script type="text/javascript" src="films/js/<?= $page ?>.func.js"></script>
                <?php
            }

        ?>

    </body>
</html>
