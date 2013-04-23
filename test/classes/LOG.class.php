<?php

class LOG {

    private $handle;

    public function __construct($type = 'err') {
        if ($type == 'err')
            $this->handle = fopen(DIR_LOG . "/err.txt", "a");
        else if ($type == 'log')
            $this->handle = fopen(DIR_LOG . "/log.txt", "a");
    }

    public function err($s) {
        $time = date("Y-m-d H:i:s");
        $string = $time . "\t\t\t\t" . $s . "\n";
        fwrite($this->handle, $string);
    }

    public function __destruct() {
        fclose($this->handle);
    }

}

?>
