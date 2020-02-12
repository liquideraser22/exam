<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
?>
<html> 
    <head>
        <title>  MOVIETASTIC </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:700i&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="wrapper">

        <div class="indexheader"> <div class="brand"> MOVIETASTIC </div> </div>
                        
                        <div class="nav">
                        <ul class="nav-menu"> 
                        <li> <a href="index.php?loadnav=home"> HOME </a> </li>
                        <li> <a href="index.php?loadnav=newmovies"> NEW MOVIES </a> </li>
                        <li> <a href="index.php?loadnav=weekenders"> WEEKENDERS  </a> </li>
                        <li> <a href="index.php?loadnav=spookynight"> SPOOKYNIGHT  </a> </li>
                        <li> <a href="index.php?loadnav=datenight"> DATE NIGHT </a> </li>
                        </ul>
                        </div>

                        <div class="content">
                        <?php 
                        switch($loadnav){
                            case 'newmovies':
                            require_once 'newmovies.php';
                            break;
                            case 'weekenders':
                            require_once 'weekenders.php';
                            break;
                            case 'spookynight':
                            require_once 'spookynight.php';
                            break;
                            case 'datenight':
                            require_once 'datenight.php';
                            break;
                            default:
                            require_once 'home.php';
                            break;
                        }
                        ?>
                        </div>

                        <div id="footer">
                    
                        <div class="indexheader"> <div class="brand"> MOVIETASTIC™ </div>
                        </div>
    </div>
    </body>
</html>
