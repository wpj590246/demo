<?php

class Util {

    static function CaptchaCreate($size=4) {
        $v = new Captcha(150, 50);
        $v->UseColour(true);
        $v->SetNumChars($size);
        $v->UseChinese();
        $v->Create();
    }
    
    static function test () {
        echo  'test function  Util::test success';
    }

}

?>
