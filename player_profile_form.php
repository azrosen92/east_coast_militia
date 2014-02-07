<html>
<head>
	<title>Prospective Players</title>
	<style type="text/css">
	<!--
	@import url(stylesheet.css);
	-->	
	</style>
	<link rel="stylesheet" type="text/css" href="nav_bar_styles.css">

</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
	<table width="785" border="0" align="center" cellpadding="0" cellspacing="0" id="table_01">
		<tbody>
			<tr>
				<td colspan="3"><a href="index.php">
					<img src="images/TopBanner.png" width="785" height="139" border="0"></a>
				</td>
			</tr>
			<tr>
				<td width="7" rowspan="3" background="images/sidebar.png"></td>
				<td class="nav">
					

<?php
  require 'drop_down_nav_menu.html';
?>


	






				</td> 
				<td width="8" rowspan="3" background="images/Sidebar2.png"></td>
			</tr>
			<tr>
				<td>
					<img src="images/Banner1.png" width="770" height="4" alt>
				</td>
			</tr>
			<tr>
				<td width="770" background="images/MainBackground.png">
					<table width="100%" border="0" cellpadding="3" cellspacing="3">
						<form method="post" action="gdform.php">
							<input type="hidden" name="subject" value="East Coast Militia Prospective Player" />
							<input type="hidden" name="redirect" value="index.php" />
							<table style="font-family:arial,verdana; color:#FFFFFF;" align="center" class="form_table">
								<tr><td align="right">Name:</td><td><input type="text" name="name"></td></tr>
								<tr><td align="right">Date of Birth:</td><td><input type="date" name="birthday"></td></tr>
								<tr><td align="right">Hometown:</td><td><input type="text" name="hometown"></td></tr>
								<tr><td align="right">Address:</td><td><input type="text" name="address"></td></tr>
								<tr><td align="right">Fall Team:</td><td><input type="text" name="fall_team"></td></tr>
								<tr><td align="right">Winter Team:</td><td><input type="text" name="winter_team"></td></tr>
								<tr><td align="right">Height:</td><td><input type="text" name="height"></td></tr>
								<tr><td align="right">Weight:</td><td><input type="text" name="weight"></td></tr>
								<tr><td align="right">Shot:</td><td><input type="text" name="shot"></td></tr>
								<tr><td align="right">Cell Phone:</td><td><input type="text" name="cell"></td></tr>
								<tr><td align="right">Email:</td><td><input type="email" name="email"></td></tr>
								<tr><td align="right">Parent's Cell:</td><td><input type="text" name="parent_cell"></td></tr>
								<tr><td align="right">Parent's Email:</td><td><input type="text" name="parent_email"></td></tr>
								<tr><td align="right">Previous Coach:</td><td><input type="text" name="coach"></td></tr>
								<tr><td align="right">Previous Coach Email:</td><td><input type="text" name="coach_email"></td></tr>
								<tr><td align="right">Family Advisor:</td><td><input type="text" name="fam_advisory"></td></tr>
								<tr><td align="right">Awards/Accomplishments:</td><td><input type="text" name="awards1"></td></tr>
																<tr><td></td><td><input type="text" name="awards2"></td></tr>
																<tr><td></td><td><input type="text" name="awards3"></td></tr>
								<tr><td colspan="2" align="center"><input type="submit" value="submit"></td></tr>
							</table>
						</form>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
