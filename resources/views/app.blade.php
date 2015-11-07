<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')Social</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/working.css">
    </head>
    <body>
    	<div id="app">
        	@yield('content')
            <pagefooter></pagefooter>
        </div>
        <script type="text/javascript" src="/js/main.js"></script>
        <script type="text/javascript" src="/js/material.js"></script>
        <script type="text/javascript" src="/js/ripples.js"></script>
        <script>
        $.material.init();
        </script>
    </body>
</html>
