 <?php

require_once("function.php");

 if($_POST) {

 $mdp= $_POST["fmdp"];
 $mdpValid=longueurMotdePasse($mdp);
 if($mdpValid["estvalid"]){
 $selMdp=AjouterSel($mdp);
 $encryptMdp=EncoderMdp($selMdp);
 }
 }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<div >
  
    <h4> <?php echo $mdpValid["msg"];  ?></h4>
    <?php if ($mdpValid["estvalid"]){
      echo '<label for="" style="color: red">Mot de passe: </label>';echo $mdp ;
      echo '<br>';
      echo '<label for="" style="color: red">Mot de passe avec de sel: </label>'; echo $selMdp ;
      echo '<br>';
      echo '<label for="" style="color: red ">Mot de passe encrypter: </label>';echo $encryptMdp ;
    }
    ?>
    <br>
    <a href="index.php">Cliquer pour retourner </a>
    </div>
</div>
<div>
</div>
</body>
</html>
