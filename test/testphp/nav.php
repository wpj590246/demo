<?php
$file_arr = scandir(dirname(__FILE__));
/*
  function map_function($v) {
  return 'hah';
  }
  function filter_callback($v) {
  return true;

  }

  $map_arr = array_map('map_function',$file_arr);

  $filtered_arr = array_filter($map_arr, 'callback');
 * 
 */
#上面太麻烦了 还不如直接foreach；
$filtered_arr = array();
unset($file_arr[0]);
unset($file_arr[1]); # ./  ../
foreach ($file_arr as $value) {
    $temp = '';
    $temp = str_replace('.php', '', $value);
    if (!preg_match('/\d/', $temp) && !in_array(strtolower($temp), $nav_deny))
        $filtered_arr[] = $temp;
}

?>

<div id="nav">
    <ul>
        <li class="under_line"></li>
        <?php
        foreach($filtered_arr as $v) {
            if($v == $q)
                echo '<li class="active"><a href="?q='.$v.'">'.$v.'</a></li>';
            else {
                echo '<li><a href="?q='.$v.'">'.$v.'</a></li>';
            }
        }
        
        ?>

    </ul>
</div>