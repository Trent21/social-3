<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')Social</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/working.css">
    </head>
    <body>
    	<div id="app">
            <div class="content">
               @yield('content') 
            </div>
            <pagefooter></pagefooter>
        </div>
        <script type="text/javascript" src="/js/main.js"></script>
        <script type="text/javascript" src="/js/material.js"></script>
        <script type="text/javascript" src="/js/ripples.js"></script>
        <script>
            $.material.init();
        </script>
        <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
    </body>
</html>
