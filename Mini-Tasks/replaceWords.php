<?php

function replaceWords($sentences, $synonym) {
    $res = [];

    for ($i = 0; $i < count($sentences); $i++) {
        $sentence = $sentences[$i];
        $word = "";
        $newSentence = "";
        $len = strlen($sentence);

        for ($j = 0; $j <= $len; $j++) {
            if ($j < $len && $sentence[$j] != ' ') {
                $word .= $sentence[$j];
            } else {
                $found = false;
                foreach ($synonym as $key => $value) {
                    if ($key == strtolower($word)) {
                        $newSentence .= $value;
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    $newSentence .= $word;
                }
                if ($j < $len) {
                    $newSentence .= " ";
                }
                $word = "";
            }
        }

        $res[] = $newSentence;
    }

    for ($i = 0; $i < count($res); $i++) {
        echo $res[$i] . "\n";
    }
}

$sentences = [
    "The quick fox jumps over the lazy dog",
    "She is very happy today",
    "He is a smart student"
];

$synonym = [
    "quick" => "fast",
    "happy" => "joyful",
    "smart" => "intelligent"
];

replaceWords($sentences, $synonym);

?>

