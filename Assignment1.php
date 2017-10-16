<!DOCTYPE html>
<html lang="en"></html>
<?php
$sql = $db->prepare ( statement:"SELECT * FROM animals");
$sql ->execute();
$results = $sql->fetchALL (fetch_style:PDO::FETCH_ASSOC);
if ( count($results) ){
    foreach ($results as $dog){
        print_r($dog);
    }
}
?>