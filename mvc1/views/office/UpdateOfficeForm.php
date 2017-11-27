<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 27.11.2017
 * Time: 20:49
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Office</title>
</head>
<body>
<form action="/office/insertOffice" method="post">
	<p>City</p>
	<input type="text" name="city" value="<?=$office['city']?>">
	<p>Phone</p>
	<input type="text" name="phone" value="<?=$office['phone']?>">
	<p>Address</p>
	<input type="text" name="address" value="<?=$office['address']?>">
	<p>State</p>
	<input type="text" name="state" value="<?=$office['state']?>">
	<p>Country</p>
	<input type="text" name="country" value="<?=$office['country']?>">
	<p>Postal code</p>
	<input type="text" name="postal_code" value="<?=$office['postal_code']?>">
	<p>Territory</p>
	<input type="text" name="territory" value="<?=$office['territory']?>">
	<input type="hidden" name="id" value="<?=$office['id']?>">
	<p>
		<input type="submit" value="Update office">
	</p>
</form>
</body>
</html>
