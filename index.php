<!DOCTYPE HTML>
<head>
    <title>diagramma</title>

    <link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />

    <script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript" src="/js/jquery.jsPlumb-1.3.9-all-min.js"></script>
    <script type="text/javascript" src="/js/noisegen-0.1.4.min.js"></script>
    <script type="text/javascript" src="/js/coffee-script.js"></script>
    <script type="text/coffeescript" src="/coffee/app.coffee"></script>
</head>

<body>
    
    <div id="template" class="bubble">
        <div class="content" contenteditable="true">idea</div>
        <div class="handle">move</div>
        <input class="rotate" type="range" min="18" max="48" value="18" />
    </div>

    <div class="container">

        <div id="1" class="bubble" style="top: 50px; left: 50px;">
            <div class="content" contenteditable="true">idea</div>
            <div class="handle">move</div>
            <input class="rotate" type="range" min="18" max="48" value="18" step="2" />
        </div>

        <div id="2" class="bubble" style="top: 250px; left: 450px;">
            <div class="content" contenteditable="true">another idea</div>
            <div class="handle">move</div>
            <input class="rotate" type="range" min="18" max="48" value="18" />
        </div>

        <div id="3" class="bubble" style="top: 450px; left: 850px;">
            <div class="content" contenteditable="true">might be a good idea</div>
            <div class="handle">move</div>
            <input class="rotate" type="range" min="18" max="48" value="18" />
        </div>

    </div>
    
</body>
</html>
