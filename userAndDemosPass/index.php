<?php
function cryptIt($string){
    $cryptedString =  sha1(md5(sha1($string)));
	return $cryptedString;
}

echo "Admin - ".cryptIt("Abc");
echo "Employe - ".cryptIt("Ebc");
echo "Client - ".cryptIt("Cbc");