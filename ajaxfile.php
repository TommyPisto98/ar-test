<?php

// Includo lo script php che contiene il collegamento al backend.
include "config.php";

$request = 2;
// Leggo il parametro passato nell'url della pagina, il parametro si deve chiamare "val".
$id = $_GET["val"];

if (gettype($id) == "integer") {
    $sql = "SELECT video, nft1, nft2, nft3 FROM cards_postcard WHERE id = ".$id;
    $result = pg_query($con, $sql);

    $response = array();
    while ($val = pg_fetch_all($result)) {
        // Mi vado a salvare in un array i dati degli url a video e nft recuperati con la query.
        $response[] = array(
            "video" => $val["video"],
            "nft1" => $val["nft1"],
            "nft2" => $val["nft2"],
            "nft3" => $val["nft3"]
        );
    }
}
else {
    // Se l'utente cerca di modificare il valore passando un dato che non sia un'intero visualizzo un messaggio di errore.
    $id = NULL;


}

?>