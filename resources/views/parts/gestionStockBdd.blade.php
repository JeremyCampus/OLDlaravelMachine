<?php
$valide = false;
if(isset($_POST['submit'])) {
    if(isset($_POST['id']) && isset($_POST['prix']) && isset($_POST['sucrePourPHP']) && isset($_POST['monnaieMise']))
    {
        $id = $_POST['id'];
        if($id=="")
        {
            echo "<p>Erreur, aucune boisson selectionnée</p>";
        }else{
        $prix = $_POST['prix'];
        $monnaieMise = $_POST['monnaieMise'];
        $monnaieMise = $monnaieMise*100;
        if($prix<$monnaieMise && !$monnaieMise=="" && !$monnaieMise==0)
        {
            $valide = true;
            echo $valide."test";

        }else{
            echo "<p>Erreur, pas assez de monnaie rentrée</p>";
            $valide = false;
        }
        $nbSucre = $_POST['sucrePourPHP'];
        // App\Boisson::all()->toArray();
        // $bdd->query('SELECT prix
        //         FROM boissons WHERE
        //         LIMIT 1)
        //     ');
       // $reponse = App\Boisson::all();
      //
      // $bdd = App\Boisson::where("code","cal")->first();

//    $result=mysql_query("DELETE FROM users WHERE id='$id'") or die(mysql_error());

        }
    }

///////////////////////////////////////////////GESTION DES STOCKS/////////////////////////////////////////////////////////////////////////////
    if($valide){
        echo $id;
        $monID =  $id;

        // $maReponse = $bdd->query('SELECT `ig.id`, `dose`
        // FROM `recette`
        // WHERE `bCode` = (SELECT `boissons`.`code`
        //                 FROM `boissons`
        //                 WHERE ( `ref` = "'.$id.'")
        // )');

        // while ($mesDonnees = $maReponse->fetch())
        // {
        //     echo $mesDonnees["ig.id"] . $mesDonnees["dose"]."   " ;
        //     $bdd->query('UPDATE `ingredient` SET `qteStock`=`qteStock`- "'. $mesDonnees["dose"].'" WHERE `ingredient`.`id`="'.$mesDonnees["ig.id"].'"');
        // }
        // $bdd->query('UPDATE `ingredient` SET `qteStock`=`qteStock`- "'. $nbSucre.'" WHERE `ingredient`.`nom`= "Sucre"');
        //
        // $idSucre = $bdd->query('SELECT `ingredient`.id WHERE nom = "Sucre" LIMIT 1');
        // $codeBoisson = $bdd->query('SELECT `boissons`.code WHERE boissons.ref = `'.$id.'`');
        //
        //
        // $prep = $bdd->prepare('INSERT INTO `vente` (`id.Sucre`, `b.Code`, `date`, qteSucre) VALUES ("6", "cho", NOW(), "5")');
        // $prep->execute();
    }

}
?>
