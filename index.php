<?php 

$wStart = "/*aeR4Choc_start*/";
$wEnd   = "/*aeR4Choc_end*/";

$original = "pruebas/index.php";
$temp = "ToBeRemoved";

$fileInfo       = pathinfo($original);
$oriFilename    = $fileInfo['filename'];
$oriExtension   = $fileInfo['extension'];
$oriDir         = $fileInfo['dirname'];
$oldOriginal    = $oriDir . DIRECTORY_SEPARATOR . $oriFilename . "." . $temp . "." . $oriExtension;

$moveFile = rename($original, $oldOriginal);


if($moveFile) {
    $newOriginalFile = fopen($original, "w") or die("Unable to create a file!"); 
    

    $handle = fopen($oldOriginal, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            
            if(strpos($line, $wStart) === false) {
                fwrite($newOriginalFile, $line);
            } else {
                /**
                 * Buscar coincidencias y retornar las posiciones de inicio y final
                 * Replazar el contenido
                 * y escribir en el nuevo archivo.
                 */
                $sSPos = strpos($line, $wStart); 
                $sEPos = strpos($line, $wEnd); 

                $wEndCount = strlen($wEnd);
                $sELen = $sEPos-($sSPos-$wEndCount);

                $newLine = substr_replace($line, '', $sSPos, $sELen);

                fwrite($newOriginalFile, $newLine);
            }
        }

        fclose($handle);
    } else {
        // error opening the file.
    }
}

?>