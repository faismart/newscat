<?php
// FB : Manggala Febri Valentino
// Not For Sale 
// THX TO SGB TEAM
function cat($code, $key, $token, $jumlah, $wait){
    $x = 0; 
    while($x < $jumlah) {
		
		$body = 'sgbcode='.$code.'&sgbsecret='.$key.'&token='.$token.'';
				
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array();
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "TUYUL COIN NEWS CAT\n\n";
echo "TOKEN?\nInput : ";
$token = trim(fgets(STDIN));
echo "Jumlah?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
$wait = trim(fgets(STDIN));
$execute = cat($code, $key, $token, $jumlah, $wait);
print $execute;
print "DONE ALL SEND\n";
?>
