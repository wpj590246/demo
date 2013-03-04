 <!--<div id="cse" style="width: 80%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'zh-CN', style : google.loader.themes.ESPRESSO});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};
    var imageSearchOptions = {};
    imageSearchOptions['layout'] = google.search.ImageSearch.LAYOUT_POPUP;
    customSearchOptions['enableImageSearch'] = true;
    customSearchOptions['imageSearchOptions'] = imageSearchOptions;
    customSearchOptions['adoptions'] = {'layout': 'noTop'};
    var customSearchControl = new google.search.CustomSearchControl(
      '001112748388642280575:hhnymeq1p8e', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.SMALL_RESULTSET);
    customSearchControl.draw("cse");
  }, true);
</script>
<html>
<head>
</head>
<body>
<div id="test"></div>
</body>
</html>
-->
<!-- -->


<html>
<head>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript"> 

google.load('search', '1', {language : 'zh-CN', style : google.loader.themes.ESPRESSO});
// Call this function when the page has been loaded       
function initialize() { 
     
	var searchControl = new google.search.SearchControl();
  var siteSearch = new google.search.WebSearch();
  siteSearch.setUserDefinedLabel("Tongji");
  siteSearch.setUserDefinedClassSuffix("siteSearch");
  siteSearch.setSiteRestriction("tongji.edu.cn");    
	searchControl.addSearcher(siteSearch);    
  siteSearch = new google.search.WebSearch();
  siteSearch.setUserDefinedLabel("All School");
  siteSearch.setSiteRestriction(".edu.cn");
  searchControl.addSearcher(siteSearch);
	//searchControl.addSearcher(new google.search.NewsSearch()); 
  searchControl.setResultSetSize(google.search.Search.SMALL_RESULTSET)   
	searchControl.draw(document.getElementById("searchcontrol"));   
	}   
	google.setOnLoadCallback(initialize);    
</script>
</head> 
<body>     
<div id="searchcontrol" style="width: 80%;"></div>  
</body> 
</html> 



