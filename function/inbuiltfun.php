<?php
// $input = readline("enter the input: ");
// if(is_numeric($input)){
//     echo"true";
// }
// else echo"false";

?>

<?php

echo "Random Integer: " . rand() . "\n";

echo "Random Float (0.01 to 1.00): " . round(rand(1, 100) / 100, 2) . "\n";

echo "Square Root of 2: " . sqrt(2) . "\n";

echo "Cosine of 60 degrees: " . cos(deg2rad(60)) . "\n";

echo "Sine of 60 degrees (in radians): " . sin(deg2rad(60)) . "\n";
echo "Date formate : ". date("d/m/yy") ."\n";

// $timezone_identifiers = DateTimeZone::listIdentifiers();
// foreach ($timezone_identifiers as $key => $value) {
//     echo "Timezone ". $key ." ". $value ." \n";
// }

echo "The time in ". date_default_timezone_get() ." is " . date("H:i:s") . "\n";
date_default_timezone_set("Asia/Calcutta");
echo "Time in " . date_default_timezone_get() ." is " . date("H:i:s");

?>
