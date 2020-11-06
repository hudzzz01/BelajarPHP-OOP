<?php 
/*
define('NAMA', 'Syahid'); //tidak dapat di letakan di dalam class

echo NAMA;
echo "<br>";
const  UMUR = 17;

echo UMUR;
*/
class Coba{
	const NAMA = 'Syahid';
}
echo Coba::NAMA;
echo "<br>";
$obj = new Coba();
echo $obj::NAMA;

//magic constant
/*
__LINE__
__FILE__
__DIR__
__FUNCTION__
__CLASS__
__TRAIT__
__METHOD__
__NAMESPACE__

*/



 ?>