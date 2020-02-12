<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.fandango.com/rss/top10boxoffice.rss");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
?>
    <br/> <br/>
   <div class="brand"> OUR TOP 10 MOVIES FOR THE WEEK </div>

<?php 
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $author = $data->getElementsByTagName("author")->item(0)->nodeValue;
   
   ?>

    <html>
    <head> <title> MOVIETASTIC|TOP 10 PICKS FOR THE WEEK </title> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <body> 
    
                   <a href="<?php echo $link;?>" target="blank"> <div class="article-title"> <?php echo $title;?> </div>  </a>
                                <ul class="article-content">
                                  <div class="article-description"> <?php echo $description; ?> </div> <br/>
                                    <li> <b> Link: </b> <a href="<?php echo $link;?>" target="blank"> <?php echo $link;?>  </a> </li>
                                    <li> <b> Author: </b> <?php echo $author; ?></li>
                                </li>
                                </ul>
                            </li>
 <?php
 }
?>

</body>
</html>

