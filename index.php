<html>
	<head>
		<link rel="stylesheet" href="styles.css" type="text/css"></link>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#newAccount").hide();
			});

			function newAcct() {
				$("#newAccount").show();
			}
		</script>
	</head>
	<body>
		<input id="newAccount" type="text" name="newAccount" placeholder="New Acct. Name"/>
		<button id="bl" onclick="newAcct();">Add Account</button>
		
		
	</body>
</html>

<?php

?>