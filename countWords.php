<?php
function countWords($sentences) {
    $count = [];

    foreach ($sentences as $sentence) {
        $sentence = strtolower($sentence);
        $sentence = preg_replace('/[^\w\s]/', '', $sentence);

        $word = "";
        $len = strlen($sentence);

        for ($i = 0; $i < $len; $i++) {
            $char = $sentence[$i];

            if ($char === ' ' || $i === $len - 1) {
                if ($i === $len - 1 && $char !== ' ') {
                    $word .= $char; 
                }
                if ($word !== "") {
                    if (!isset($counts[$word])) {
                        $count[$word] = 1;
                    } else {
                        $count[$word]++;
                    }
                    $word = ""; 
                }
            } else {
                $word .= $char; 
            }
        }
    }

    return $count;
}

$sentences = [
    "The quick fox jumps over the lazy dog",
    "The quick dog is very happy",
    "He is a smart and quick student"
];

$result = countWords($sentences);

foreach ($result as $word => $counts) {
    echo "$word => $counts\n";
}
?>
