<?php
$Link = mysqli_connect('localhost', 'dbuser', '123', 'Name');
$Query = mysqli_query($Link,"SELECT Name FROM NameTable");
//$Result = mysqli_query($Link, $Query);
//$Row = mysqli_fetch_array($Result);
//$Name = $Row['Name'];
//echo $Name;
while($Row=  mysqli_fetch_assoc($Query)){
    echo $Row['Name'].'<br>';
}
?>
