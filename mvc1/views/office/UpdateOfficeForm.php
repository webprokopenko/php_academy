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
	<input type="text" name="city" value="<?=self::$data['city']?>">
	<p>Phone</p>
	<input type="text" name="phone" value="<?=self::$data['phone']?>">
	<p>Address</p>
	<input type="text" name="address" value="<?=self::$data['address']?>">
	<p>State</p>
	<input type="text" name="state" value="<?=self::$data['state']?>">
	<p>Country</p>
	<input type="text" name="country" value="<?=self::$data['country']?>">
	<p>Postal code</p>
	<input type="text" name="postal_code" value="<?=self::$data['postal_code']?>">
	<p>Territory</p>
	<input type="text" name="territory" value="<?=self::$data['territory']?>">
	<input type="hidden" name="id" value="<?=self::$data['id']?>">
	<p>
		<input type="submit" value="Update office">
	</p>
</form>
<script src="/js/test.js"></script>
</body>
</html>
