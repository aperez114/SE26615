<?php
function getDogsAsTable($db)
{
    try {
        $sql = $db->prepare(statement:"SELECT * FROM animals");
$sql->execute();
$results = $sql->fetchALL(fetch_style:PDO::FETCH_ASSOC);
if ($sql->rowCount() > 0) {
    $table = "<table>" . PHP_EOL;
    foreach ($dog as $dog) {
        $table .= "<tr><td>" . $dog['name'];
        $table .= "</td><td>" . $dog['gender'];
        $table .= "</td><td>" . $dog['fixed'];
        $table .= "</td></tr>";
    }

}
}
}