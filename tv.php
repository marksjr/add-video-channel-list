<?php
include "protect.php";
$linhas = explode("\n", file_get_contents('canais.txt'));
/*
$file = new SplFileObject('canais.txt');
$file->seek(0);
echo $file->current();
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">	
<meta name="robots" content="noindex, nofollow">
<title>Play</title>
<script src="block.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>	
<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<script src="https://content.jwplatform.com/libraries/lqsWlr4Z.js"></script>
<script type="text/javascript">jwplayer.key="cbPZjCLEJ+O5oZl0AvaDQqyb50+ydDAD5kEqJuS10Zg=";</script>
<div id="vplayer" style="width:100%;height:100%;text-align:center;"></div>
<script type='text/javascript'>
		    jwplayer('vplayer').setup({
		        sources: [{
				file: '<?=$linhas[$_GET['v']];?>,
				label: 'Auto'}],
		        width: $(window).width(),
		        height: $(window).height(),
		        preload: 'none',
		        primary: 'html5',
				autostart: true,
		        cast: {},
				advertising: {
	            client: 'vast',
	            tag: ''
	            }
		    });
</script>
</body>
</html>