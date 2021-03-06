{config_load file='../style.cfg'}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Farming Simulator 17 WebStats">
<meta name="author" content="John Hawk">
<link rel="icon" href="{#IMAGES#}/favicon.ico">
<title>{$map.Short} {$map.Version} WebStats</title>
<link href="{#CSS#}/bootstrap.min.css" rel="stylesheet">
<link href="{#CSS#}/theme.min.css?{$smarty.now}" rel="stylesheet">
<link href="{#CSS#}/customstyle.css?{$smarty.now}" rel="stylesheet">
<script src="{#SCRIPTS#}/jquery.min.js"></script>
<script src="{#SCRIPTS#}/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		{include file='navbar.tpl'} {if $serverOnline}{assign var="fullPathToTemplate" value="./styles/$style/templates/$page.tpl"} {if
		file_exists($fullPathToTemplate)} {include file="$page.tpl"} {else}
		<div class="container theme-showcase" role="main">
			<div class="jumbotron">
				<h1>##TPL_ERROR_1##</h1>
				<p class="lead">##TPL_ERROR_2## {$fullPathToTemplate} ##TPL_ERROR_3##</p>
			</div>
		</div>
		{/if}{else}
		<div class="container theme-showcase" role="main">
			<div class="jumbotron">
				<h1>##CON_ERROR_1##</h1>
				<p class="lead">##CON_ERROR_2##</p>
			</div>
		</div>
		{/if}
	</div>
	{if !$hideFooter}
	<div class="navbar navbar-default navbar-fixed-bottom hidden-xs">
		<div class="container">
			<p class="navbar-text text-center">{$onlineUser} ##USER_ONLINE##</p>
			<p class="navbar-text pull-right">
				&copy; 2017-2018 FS17 WebStats by John Hawk &bull; <a href="https://github.com/J0hnHawk/FS17_WebStats" target="_blank">GitHub</a> &bull; Map config by {$map.configBy}
			</p>
		</div>
	</div>
	{/if}

	<!-- Modal -->
	<div id="infoModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Farming Simulator 17 WebStats</h4>
				</div>
				<div class="modal-body">
					<p>{$webStatsVersion}</p>
					<p>Copyright (C) 2017-2018, John Hawk</p>
					<p>##INFO_1##</p>
					<p>##INFO_2## alex83we, bl4ckdog, Billy5haw, chin0x, extreme_farmer, JanSe, lnoyelle, Marfulak, Slivicon</p>
					<p>
						##INFO_3##: John Hawk &lt;<a href="mailto:John Hawk <john.hawk@gmx.net>">john.hawk@gmx.net</a>&gt;
					</p>
					<p>##INFO_4##: {$map.configVersion} ({$map.configBy})</p>
				</div>
				<div class="modal-footer">
					<small class="pull-left"><a href="index.php?page=lizenz">##LICENSE##</a></small>
					<button type="button" class="btn btn-default" data-dismiss="modal">##CLOSE##</button>
				</div>
			</div>
		</div>
	</div>
	{if $reloadPage}
	<script type="text/javascript">
	var time = new Date().getTime();
	$(document.body).bind("mousemove keypress", function () {
	    time = new Date().getTime();
	});

	setInterval(function() {
	    if (new Date().getTime() - time >= 60000) {
	        window.location.reload(true);
	    }
	}, 1000);
	</script>
	{/if}
</body>
</html>
