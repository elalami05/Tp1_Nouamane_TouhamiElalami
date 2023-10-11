
<?php
function longueurMotdePasse($mdp){
    $longeur=strlen($mdp);
   if ($longeur >= 6 and $longeur <= 10 ) {
      $longeurValid=['estvalid'=>true,'msg'=>'Mot de passe valide.'];
      }
      elseif ($longeur < 6 ){
      $longeurValid=['estvalid'=>false,'msg'=>'Mot de passe court.']; 
      }
      else{
         $longeurValid=['estvalid'=>false,'msg'=>'Mot de passe long.'];
      }
      return $longeurValid;
   }

 function AjouterSel($mdpSel){
    $sel='P@ssword!';
    $mdpAvecSel=$sel.$mdpSel.$sel;
    return $mdpAvecSel;
 }

 function EncoderMdp($mdpSeler) {
    $mdpEncoder=sha1($mdpSeler);
    return $mdpEncoder;
 }

?>