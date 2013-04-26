<?php

class Util {
    const ff ='在访问PHP类中的成员变量或方法时，如果被引用的变量或者方法被声明成const（定义常量）或者static（声明静态）,
        那么就必须使用操作符::,反之如果被引用的变量或者方法没有被声明成const或者static,那么就必须使用操作符->。
另外，如果从类的内部访问const或者static变量或者方法,那么就必须使用自引用的self，反之如果从类的内部访问不为const或者static变量或者方法,那么就必须使用自引用的$this。';

    static function CaptchaCreate($size=4) {
        $v = new Captcha(150, 50);
        $v->UseColour(true);
        $v->SetNumChars($size);
        $v->UseChinese();
        $v->Create();
    }

    static function test() {
        echo 'test function  Util::test success';
    }

}

?>
