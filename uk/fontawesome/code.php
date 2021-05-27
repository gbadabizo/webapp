<?php
 $tabville= ["ka"=>"Kara","PY"=>"PYA"];
 if(isset($_GET["libelle"])){
     $ville = $_GET["libelle"];
    $code = array_search($ville, $tabville);
    return json_encode($code);
    }

?>