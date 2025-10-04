<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/RekayasaWeb/Pertemuan2/getWisata.php");
$data =  json_decode($send, TRUE);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2.A.2</title>
    <style>
        .highlight {
            background-color: yellow;
        }
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid #333;
            padding: 8px 16px;
        }
        th {
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>
    <br>
    <table>
        <tr>
            <th>KOTA</th>
            <th>LANDMARK</th>
            <th>TARIF</th>
        </tr>
        <?php
        foreach($data as $row){
            echo "<tr>";
            echo "<td>" . $row["kota"] . "</td>";
            echo "<td>" . $row["landmark"] . "</td>";
            echo "<td>" . $row["tarif"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>