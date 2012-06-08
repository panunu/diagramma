<!DOCTYPE HTML>
<head>
    <title>diagramma</title>

    <link rel="stylesheet" type="text/css" href="/css/app.css" />

    <script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript" src="/js/jquery.jsPlumb-1.3.9-all-min.js"></script>

    <script type="text/javascript">            
        jsPlumb.ready(function() {
            var plumb = jsPlumb.getInstance();
            
            plumb.setRenderMode(plumb.SVG);
            plumb.Defaults.Anchor = "Continuous";
           
            plumb.draggable($('.bubble'));
            plumb.makeTarget($('.bubble')).makeSource($('.bubble'));
            
            plumb.connect({ source: $('#1'), target: $('#2') });
        });
    </script>
</head>

<body>

    <div class="container">

        <div id="1" class="bubble" style="position: absolute; top: 50px; left: 50px;">
            idea
        </div>

        <div id="2" class="bubble" style="position: absolute; top: 250px; left: 450px;">
            another idea
        </div>

        <div id="3" class="bubble" style="position: absolute; top: 450px; left: 850px;">
            might be a good idea
        </div>

    </div>    

</body>
</html>
