<?php
echo "hello, World!";

for($i = 1; $i <= 10; $i++) {
    print "$i";
}
if(isset(echo $_GET['param'])) {

    echo $_GET['param'];
} 
else 
	echo "Nie wpisałeś parametru";
?>