<html>
 <head>
  <title>questao7</title>
 </head>
 <body>
 <form action="" method="get">
  Tabuada do:  <input type="text" name="tab" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 <?php 
 if(isset($_GET["tab"])) {
  $tabuada = $_GET['tab'];
  $i=1;
  
  while($i<=10){
   echo $tabuada." x ".$i." = ".($tabuada*$i)."<br />";
   $i++;
}
  }
 ?>
 </body>
</html>