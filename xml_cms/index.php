<?php require('reader.php');?>
<html>
<head>
<title><?php  titleS();?></title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
<div id="header">
<span class="titulo"><?php  titleS();?></span>
</div>
<div id="body" class="margen">
<span>
<?php  bodyS();?>
</span>
</div>
<div class="margen" id="footer">
<span>
<?php   footerS(); ?>
</span>
</div>
</div>
</body>
</html>