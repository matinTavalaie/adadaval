<?php
$adda = $_POST['number'];
$addadAval = false;
for ($i = 2; $i < $adda; $i++) {
    $result = $adda / $i;
    if (is_float($result)) {
        $addadAval = false;
    } else {
        $addadAval = true;
        break;
    }
    echo "$adda / $i = $result <br>";
}
if ($addadAval) {
    echo "<h2>addad aval nist</h2><br>";
} else {
    echo "<h2>addad aval hast</h2><br>";
}

