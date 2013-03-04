<?php
//require_once(dirname(__FILE__). '/lock-unlock/index.php');
header('Content-Type: text/html; charset=UTF-8'); 
header("Cache-Control: no-store, no-cache, must-revalidate");
function csv ($head,$data,$charset="utf-8") {
            $filename = date('YmdHis').'.csv';

        header('Content-Type: text/comma-separated-values');
        header('Content-Disposition: attachment;filename=' . $filename);

        iconv_set_encoding('internal_encoding', $charset);
        iconv_set_encoding('output_encoding', $charset);

        ob_start('ob_iconv_handler');
        $fp = fopen('php://output', 'w');
        fputcsv($fp, $head);
        foreach($data as $row)
            fputcsv($fp, array_merge($head, $row));
        fclose($fp);

        ob_end_flush();
}
iconv_set_encoding('output_encoding', 'gbk');
mb_internal_encoding('GBK');
$head['id']='是拉长sdfsd';
$q['id']='asda131123';
$data=array();
array_push($data,$q);
//csv($head, $data);

date_default_timezone_set('Etc/GMT-8');
var_dump($_SERVER['SCRIPT_FILENAME']);
$q=$_GET['t'] ? $_GET['t'] : 0;
if ($q)
sleep(5);
echo mysql_real_escape_string($_SERVER['SCRIPT_FILENAME']);
echo mysql_escape_string('"');
?>
<script src="/demo/js/jquery.js"></script>
<script>
    (function() {
    $(function() {
        $('body').keydown(function(e){
           console.log(e.keyCode); alert(t.q);
           // return false;
        });
        $().unbind(type, fn)
    });
    var t={
        q:1
        
    }
    //alert(t.q);
    window.t=t;
    })(window)
</script>



