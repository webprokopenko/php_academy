<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.10.2017
 * Time: 19:00
 */
$html = "<a href = 'flesh.html'> Favorite flash. </a>\n";

echo $html;
echo "<br>";
print htmlspecialchars($html); // Двойные кавычки
echo "<br>";
print htmlspecialchars($html, ENT_QUOTES); // Одиночные и двойные
echo "<br>";

print htmlspecialchars($html, ENT_NOQUOTES); // Ни то ни другое