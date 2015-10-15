<!DOCTYPE HTML>
    <head>
        <title>Mon blog - Discussion en direct</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
        <link rel="stylesheet" type="text/css" href="phpfreechat/client/themes/default/jquery.phpfreechat.min.css" />
        <script src="phpfreechat/client/lib/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script src="phpfreechat/client/jquery.phpfreechat.min.js" type="text/javascript"></script>
    </head>
        
    <body>
<?php
    include ('header.php');
?>
        
<h1 id="titre">Mon super blog ! - Discussion en direct</h1>
<div id="mychat"><a href="http://www.phpfreechat.net">Creating chat rooms everywhere - phpFreeChat</a></div>
<div id="onlinechat"><script type="text/javascript">
  $('#mychat').phpfreechat({ serverUrl: 'phpfreechat/server' });
</script>
</div>

</body>
</html>