<?php

class ladyHelp
{
    function utf8_strlen($str)
    {
        $c = strlen($str);

        $l = 0;
        for ($i = 0; $i < $c; ++$i) {
            if ((ord($str[$i]) & 0xC0) != 0x80) {
                ++$l;
            }
        }
        return $l;
    }

    function getShortDetail($text, $max_length=80)
    {
        $ladyHelp = new ladyHelp();
        $count_text = $ladyHelp->utf8_strlen($text);

        if ($count_text > $max_length) { //262 > 50
            $text = mb_substr($text, 0, $max_length,'utf-8'). '...';
        }
        return $text;
    }

    function convertStringToArray($model){
        $model = str_replace("'", '', $model);
        $model = json_decode($model);
        return $model;
    }
}

?>