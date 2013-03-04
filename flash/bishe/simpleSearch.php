<?php
// hello.php
// Requirements:
// allow_url_open must be set to true (for file_get_contents)
//

// The Yahoo! web services request
$request = 'http://search.yahooapis.com/WebSearchService/V1/webSearch?appid=Izklak7V34HoAvmxqGWAzLBLvYmoWlH7IK6eV5l_Wn8FwHygx3W18ASfvQrtdUwk&query=madonna&results=2';

// Make the request
$results = file_get_contents($request);

if ($results == false) {
    die("Web services request failed");
}

// Output the XML
echo htmlspecialchars($results, ENT_QUOTES);
?>
