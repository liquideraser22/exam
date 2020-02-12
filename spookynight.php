<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.fandango.com/movies/horror/rss/movie-list.rss");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 ?>
 <br/> <br/>
<div class="brand"> SPOOKYNIGHT </div> 
                  
<?php 
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $author = $data->getElementsByTagName("author")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;

   ?>

    <html>
    <head> <title> MOVIETASTIC | SPOOKYNIGHT </title> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:800i|Oswald|Teko:600&display=swap" rel="stylesheet">
    </head>
    <body> 
    
                   <a href="<?php echo $link;?>" target="blank"> <div class="article-title"> <?php echo $title;?> </div> </a>
                                <ul class="article-content">
                                  <div class="article-description"> <?php echo $description; ?> </div> <br/>
                                    <li> <b> Link: </b> <a href="<?php echo $link;?>" target="blank"> <?php echo $link;?>  </a> </li>
                                    <li> <b> Published Date:</b> <?php echo $pubDate ?></li>
                                    <li> <b> Author: </b> <?php echo $author; ?></li>
                                </li>
                                </ul>
                            </li>
 <?php
 }
?>

</body>
</html>
