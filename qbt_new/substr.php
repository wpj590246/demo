<?php

class mysubstr {

    public static function utf8_strlen($str) {
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            $value = ord($str[$i]);
            if ($value > 127) {
                //$count++;
                if ($value >= 192 && $value <= 223)
                    $i++;
                elseif ($value >= 224 && $value <= 239)
                    $i+=2;
                elseif ($value >= 240 && $value <= 247)
                    $i+=3;
                else
                    die('Not a UTF-8 compatible string');
            }
            $count++;
        }
        return $count;
    }

    public static function utf8_substr($str, $position, $length) {
        $start_position = strlen($str);
        $end_position = strlen($str);
        $count = 0;
        $countlen = self::utf8_strlen($str);
        $start_byte = $countlen;
        if (($position + $length) > $countlen)
            $length = $countlen % $length;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($count >= $position && $start_position > $i) {
                $start_position = $i;
                $start_byte = $count;
            }
            if (($count - $start_byte) >= $length) {
                $end_position = $i;
                break;
            }
            $value = ord($str[$i]);
            if ($value > 127) {
                //$count++;
                if ($value >= 192 && $value <= 223)
                    $i++;
                elseif ($value >= 224 && $value <= 239)
                    $i+=2;
                elseif ($value >= 240 && $value <= 247)
                    $i+=3;
                else
                    die('Not a UTF-8 compatible string');
            }
            $count++;
        }
        return (substr($str, $start_position, $end_position - $start_position));
    }

    public static function getSubstr($str , $length , $start = 0) {
        $result = self::utf8_substr($str, $start, $length);
        if (self::utf8_strlen($str) > $length) {
            $result .= '...';
        }
        return $result;
    }

}

?>