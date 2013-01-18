<?php
if(isset($_POST['email'])) {
     
    $email_to = 'azrosen92@gmail.com';
     
    $name = $_POST['name']; // required
    $birthday = $_POST['birthday']; // required
    $hometown = $_POST['hometown']; // required
    $fall_team = $_POST['fall_team']; // not required
    $winter_team = $_POST['winter_team']; // required
	 $height = $_POST['height'];
	 $weight = $_POST['weight'];
	 $shot = $_POST['shot'];
	 $cell = $_POST['cell'];
	 $email = $_POST['email'];
	 $parent_cell = $_POST['parent_cell'];
	 $parent_email = $_POST['parent_email'];
	 $coach = $_POST['coach'];
	 $coach_email = $_POST['coach_email'];
	 $awards = $_POST['awards1'] . $_POST['awards2'] . $_POST['awards3'];


	 $email_subject = 'Prospective Player Profile for ' . $name;

	 $email_message = '<html>
	<head>
	</head>
	<body>
		<table style="background-color:#969B7E;font-family:arial,verdana;color:#ffffff;padding:5px;border-style:solid;">
			<tr>
				<td align="right">Name:</td>
				<td align="left">'.$name.'</td>
			</tr>
			<tr>
				<td align="right">Date of Birth:</td>
				<td align="left">'.$birthday.'</td>
			</tr>
			<tr>
				<td align="right">Hometown:</td>
				<td align="left">'.$hometown.'</td>
			</tr>
			<tr>
				<td align="right">Fall Team:</td>
				<td align="left">'.$fall_team.'</td>
			</tr>
			<tr>
				<td align="right">Winter Team:</td>
				<td align="left">'.$winter_team.'</td>
			</tr>
			<tr>
				<td align="right">Height:</td>
				<td align="left">'.$height.'</td>
			</tr>
			<tr>
				<td align="right">Weight:</td>
				<td align="left">'.$weight.'</td>
			</tr>
			<tr>
				<td align="right">Shot:</td>
				<td align="left">'.$shot.'</td>
			</tr>
			<tr>
				<td align="right">Cell Phone:</td>
				<td align="left">'.$cell.'</td>
			</tr>
			<tr>
				<td align="right">Email:</td>
				<td align="left">'.$email.'</td>
			</tr>
			<tr>
				<td align="right">Parent\'s Cell:</td>
				<td align="left">'.$parent_cell.'</td>
			</tr>
			<tr>
				<td align="right">Parent\'s Email:</td>
				<td align="left">'.$parent_email.'</td>
			</tr>
			<tr>
				<td align="right">Previous Coach:</td>
				<td align="left">'.$coach.'</td>
			</tr>
			<tr>
				<td align="right">Previous Coach\'s Email:</td>
				<td align="left">'.$coach_email.'</td>
			</tr>
			<tr>
				<td align="right">Awards/Accomplishments:</td>
				<td align="left">'.$awards.'</td>
			</tr>
		</table>
	</body>
</html>';
     
mail($email_to, $email_subject, $email_message);  
}
?>

