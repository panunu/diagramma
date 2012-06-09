<!DOCTYPE HTML>
<head>
    <title>diagramma</title>

    <link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />

    <script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript" src="/js/jquery.jsPlumb-1.3.9-all-min.js"></script>
    <script type="text/javascript" src="/js/noisegen-0.1.4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('body').noiseGen({
                opacity: 0.15,
                width: 100,
                height: 100,
                fromColor: "ffffff",
                toColor: "000000"
            });
        });
        
        jsPlumb.ready(function() {
            var plumb = jsPlumb.getInstance();
            
            plumb.draggable($('.bubble'), { handle: '.handle', cursor: 'move' });
           
            //plumb.addEndpoint($('.bubble'), { anchor: ['LeftMiddle'] }, { isSource: true, isTarget: true, maxConnections: 100, tolerance: 'touch', reattach: true });
            //plumb.addEndpoint($('.bubble'), { anchor: ['RightMiddle'] }, { isSource: true, isTarget: true, maxConnections: 100, tolerance: 'touch', reattach: true });
            
            //plumb.makeTarget($('.bubble')).makeSource($('.bubble'));
            //plumb.Defaults.Anchors = [ "LeftMiddle", "RightMiddle" ];
        });
    </script>
</head>

<body>

    <div class="container">

        <div id="1" class="bubble" style="position: absolute; top: 50px; left: 50px;">
            <div contenteditable="true">idea</div>
            <div class="handle">move</div>
        </div>

        <div id="2" class="bubble" style="position: absolute; top: 250px; left: 450px;">
            <div contenteditable="true">another idea</div>
            <div class="handle">move</div>
        </div>

        <div id="3" class="bubble" style="position: absolute; top: 450px; left: 850px;">
            <div contenteditable="true">might be a good idea</div>
            <div class="handle">move</div>
        </div>

    </div>    

</body>
</html>
