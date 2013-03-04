<?php
// Yahoo Web Services PHP Example Code
// Rasmus Lerdorf
// www.knowsky.com

$appid = 'Izklak7V34HoAvmxqGWAzLBLvYmoWlH7IK6eV5l_Wn8FwHygx3W18ASfvQrtdUwk';
// 在这输入你申请的ID号

$service = array('image'=>'http://api.search.yahoo.com/ImageSearchService/V1/imageSearch',
'local'=>'http://api.local.yahoo.com/LocalSearchService/V1/localSearch',
'news'=>'http://api.search.yahoo.com/NewsSearchService/V1/newsSearch',
'video'=>'http://api.search.yahoo.com/VideoSearchService/V1/videoSearch',
'web'=>'http://api.search.yahoo.com/WebSearchService/V1/webSearch');
?>
<html>
<head><title>PHP Yahoo Web Service Example Code</title></head>
<body>
<form action="Yahoo.php" method="GET">
Search Term: <input type="text" name="query" /><br />
Zip Code: <input type="text" name="zip" /> (for local search)<br />
<input type="submit" value=" Go! " />
<select name="type">
<?php foreach($service as $name => $val) {
if(!empty($_REQUEST['type']) && $name == $_REQUEST['type'])
echo "<option SELECTED>$name</option>\n";
else echo "<option>$name</option>\n";
} ?>
</select>
</form>
<?php
function done() {?>
</body></html>
<?php
exit;
}

if(empty($_REQUEST['query']) || !in_array($_REQUEST['type'],array_keys($service))) done();

// Ok, here we go, we have the query and the type of search is valid
// First build the query
$q = '?query='.rawurlencode($_REQUEST['query']);
if(!empty($_REQUEST['zip'])) $q.="&zip=".$_REQUEST['zip'];
if(!empty($_REQUEST['start'])) $q.="&start=".$_REQUEST['start'];
$q .= "&appid=$appid";

// Then send it to the appropriate service
$xml = file_get_contents($service[$_REQUEST['type']].$q);

// Parse the XML and check it for errors
if (!$dom = domxml_open_mem($xml,DOMXML_LOAD_PARSING,$error)) {
echo "XML parse error\n";
foreach ($error as $errorline) {
/* For production use this should obviously be logged to a file instead */
echo $errorline['errormessage']."<br />\n";
echo " Node : " . $errorline['nodename'] . "<br />\n";
echo " Line : " . $errorline['line'] . "<br />\n";
echo " Column : " . $errorline['col'] . "<br />\n";
}
done();
}

// Now traverse the DOM with this function
// It is basically a generic parser that turns limited XML into a PHP array
// with only a couple of hardcoded tags which are common across all the
// result xml from the web services
function xml_to_result($dom) {
$root = $dom->document_element();
$res['totalResultsAvailable'] = $root->get_attribute('totalResultsAvailable');
$res['totalResultsReturned'] = $root->get_attribute('totalResultsReturned');
$res['firstResultPosition'] = $root->get_attribute('firstResultPosition');

$node = $root->first_child();
$i = 0;
while($node) {
switch($node->tagname) {
case 'Result':
$subnode = $node->first_child();
while($subnode) {
$subnodes = $subnode->child_nodes();
if(!empty($subnodes)) foreach($subnodes as $k=>$n) {
if(empty($n->tagname)) $res[$i][$subnode->tagname] = trim($n->get_content());
else $res[$i][$subnode->tagname][$n->tagname]=trim($n->get_content());
}
$subnode = $subnode->next_sibling();
}
break;
default:
$res[$node->tagname] = trim($node->get_content());
$i--;
break;
}
$i++;
$node = $node->next_sibling();
} 
return $res;
}

$res = xml_to_result($dom);

// Ok, now that we have the results in an easy to use format,
// display them. It's quite ugly because I am using a single
// display loop to display every type and I don't really understand HTML
$first = $res['firstResultPosition'];
$last = $first + $res['totalResultsReturned']-1;
echo "<p>Matched ${res[totalResultsAvailable]}, showing $first to $last</p>\n";
if(!empty($res['ResultSetMapUrl'])) {
echo "<p>Result Set Map: <a href=\"${res[ResultSetMapUrl]}\">${res[ResultSetMapUrl]}</a></p>\n";
}
for($i=0; $i<$res['totalResultsReturned']; $i++) {
foreach($res[$i] as $key=>$value) {
switch($key) {
case 'Thumbnail':
echo "<img src=\"${value[Url]}\" height=\"${value[Height]}\" width=\"${value[Width]}\" />\n";
break;
case 'Cache':
echo "Cache: <a href=\"${value[Url]}\">${value[Url]}</a> [${value[Size]}]<br />\n";
break;
case 'PublishDate':
echo "<b>$key:</b> ".strftime('%X %x',$value);
break;
default:
if(stristr($key,'url')) echo "<a href=\"$value\">$value</a><br />\n";
else echo "<b>$key:</b> $value<br />";
break;
}
}
echo "<hr />\n";
}

// Create Previous/Next Page links
if($start > 1)
echo '<a href="/YahooSearchExample.php'.
'?query='.rawurlencode($_REQUEST['query']).
'&zip='.rawurlencode($_REQUEST['zip']).
'&type='.rawurlencode($_REQUEST['type']).
'&start='.($start-10).'"><-Previous Page</a> ';
if($last < $res['totalResultsAvailable'])
echo '<a href="/YahooSearchExample.php'.
'?query='.rawurlencode($_REQUEST['query']).
'&zip='.rawurlencode($_REQUEST['zip']).
'&type='.rawurlencode($_REQUEST['type']).
'&start='.($last+1).'">Next Page-></a>';
done();
?>


<!-- 详细出处参考：http://www.jb51.net/article/1460.htm -->