
<?php

function generateCleanURL($title) {
    $title = strtolower($title);
    $cleanTitle = "";
    for ($i = 0; $i < strlen($title); $i++) {
        $char = $title[$i];
        if (($char >= 'a' && $char <= 'z') || ($char >= '0' && $char <= '9') || $char == ' ') {
            $cleanTitle .= $char;
        }
    }
    $cleanTitle = str_replace(' ', '-', $cleanTitle);
    if (strlen($cleanTitle) > 50) {
        $cleanTitle = substr($cleanTitle, 0, 50);
    }
    while (strlen($cleanTitle) > 0 && $cleanTitle[strlen($cleanTitle) - 1] == '-') {
        $cleanTitle = substr($cleanTitle, 0, -1);
    }
    return $cleanTitle;
}

$titles = ["How to Learn JavaScript in 2024!!"];
foreach ($titles as $title) {
    echo generateCleanURL($title) . "\n";
}

?>