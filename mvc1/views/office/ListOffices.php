<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List offices</title>
</head>
<body>
<h1>List Office</h1>
    <div class="list_offices">
        <?php foreach($offices as $office):?>
                <h5 class="ofiice">
                    <div class="ofiice-country">Country: <?=$office['country']?></div>
                    <div class="ofiice-city">City: <?=$office['city']?></div>
                    <div class="ofiice-address">Address: <?=$office['address']?></div>
                    <div class="ofiice-phone">Phone: <?=$office['phone']?></div>
                    <div class="office-update"><a href="updateOffice/<?=$office['id']?>">Update office</a></div>
                </h5>

        <?php endforeach;?>
    </div>
</body>
</html>