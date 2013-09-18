<?php
	$zip = new ZipArchive();
						$filename = 'files\test1.zip';
						
						if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
							echo "unable to open";
						}else{
							echo "opened";
						}
						
						$zip->addFromString("testfilephp.txt" . time(), "#1 This is a test string added as testfilephp.txt.\n");
						$zip->addFromString("testfilephp2.txt" . time(), "#2 This is a test string added as testfilephp2.txt.\n");
						$zip->close();
						
						$za = new ZipArchive();

$za->open($filename);
//print_r($za);
//var_dump($za);
/*echo "numFiles: " . $za->numFiles . "\n";
echo "status: " . $za->status  . "\n";
echo "statusSys: " . $za->statusSys . "\n";
echo "filename: " . $za->filename . "\n";
echo "comment: " . $za->comment . "\n";
*/
for ($i=0; $i<$za->numFiles;$i++) {
    echo "<br/>index: $i\n";
    print_r($za->statIndex($i));
}
echo "numFile:" . $za->numFiles . "\n";
?>