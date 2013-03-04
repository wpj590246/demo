  
 <html>
  <head>
    <title>JSON/Atom Custom Search API Example</title>
  </head>
  <body>
    <div id="content"></div>
    <script>//&start= 为开始条数
      function hndlr(response) {
      for (var i = 0; i < response.items.length; i++) {
        var item = response.items[i];
        // in production code, item.htmlTitle should have the HTML entities escaped.
        document.getElementById("content").innerHTML += "<br>" + item.htmlTitle;
      }
    }
    </script>
    <script src="https://www.googleapis.com/customsearch/v1?key=AIzaSyDKoDjdotm1jO9EfNW8k64jY2fJIEEW8Uw&cx=001112748388642280575:hhnymeq1p8e&q=lectures&callback=hndlr">
    </script>
  </body>
</html>
      
      