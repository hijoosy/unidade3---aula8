<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
 <form action="" method="get">
  Tabuada do:  <input type="text" name="tab" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 <?php 
 if(isset($_GET["tab"])) {
  $tabuada = $_GET['tab'];  
  for($count=1; $count<=10; $count++)
   echo $tabuada." x ".$count." = ".($tabuada*$count)."<br />";
}
 ?>
 </body>
</html