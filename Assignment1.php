<?php

$table = "<table>";

for($rows=0; $rows <= 9; $rows++){
    $table .= "\t<tr>";
    for ($cols = 0; $cols<=9; $cols++){

        $randNumString = "";
        for ($hex=0; $hex <6; $hex++) {

            $randNumString .= dechex(rand(0,15));

        }
        $table .= "<td style='background-color:#$randNumString; '>".$randNumString."<br> <span style='color:white; '>$randNumString</span></td>";

    }
    $table .= "</tr>\n";
}
$table .="</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alberto Perez Garcia Color Grid </title>
</head>
<body>


<?php echo $table?>
</body>
</html>
