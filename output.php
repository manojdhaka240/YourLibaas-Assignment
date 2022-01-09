<?php
$response = file_get_contents('https://7a859ffcc3961df6e1c52d6dc93cf672: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@yourlibaasuae.myshopify.com/admin/api/2021-10/products.json');

$response = json_decode(($response), JSON_PRETTY_PRINT);

$a = 1;
echo "<ul>";
foreach($response["products"] as $item) { 
    $title = $item['title'];
    echo "<tr>";
    echo "<th class='text-center text-primary' scope='row'>". $a ."</th>";
    echo "<td class='text-center'>". $title. "</td>";
    echo "</tr>";
    $a++;
}
echo "</ul>"


?>