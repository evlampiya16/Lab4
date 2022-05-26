<?php

include "3_create.php";

foreach (crt::$categoriesNameList as $categoryName) {
    echo "<option>" . $categoryName . "</option>";
}