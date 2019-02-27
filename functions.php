<?php
$myHandler = new mysqli("localhost", "admin", "password", "travelexperts");
if ($myHandler->connect_errno) {
    echo "Error Number is: ";
    $myHandler->connect_error . PHPEOL;
    exit();
}
;

$sql = "SELECT* FROM agents";
$result = $myHandler->query($sql);

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    foreach ($row as $cname => $cvalue) {
        print "$cname: $cvalue\t <br/>";
    }
    print "\r\n";
}
;

$result->free();
$myHandler->close();

?>

