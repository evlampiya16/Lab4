<?php

include "3_create.php";
foreach (crt::$adsDict as $categoryName => $categoryData) {
    foreach ($categoryData as $titleEmailText) {
        echo "<tr>";
        echo "<td>" . $categoryName . "</td>";
        echo "<td>" . $titleEmailText['title'] . "</td>";
        echo "<td>" . $titleEmailText['email'] . "</td>";
        echo "<td>" . $titleEmailText['text'] . "</td>";
        echo "</tr>";
    }