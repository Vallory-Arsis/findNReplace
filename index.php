<?php 

/**
 * Recorrer CSV 
 * El CSV debe contener un listado de archivos 
 * a ser recorridos por el script
 */

$csvPath = "pruebas/test.csv";
$filePath = [];

$handle = fopen($csvPath, "r");
while (($data = fgetcsv($handle)) !== FALSE) {
    $filePath[] = $data[0];
}

foreach($filePath as $fpath) {
    if(checkPathPermission($fpath)){
        findNReplace($fpath);
    }
}

function findNReplace($file) {
    $wStart = "/*aeR4Choc_start*/";
    $wEnd   = "/*aeR4Choc_end*/";

    $original = $file;
    $temp = "ToBeRemoved";

    $fileInfo       = pathinfo($original);
    $oriFilename    = $fileInfo['filename'];
    $oriExtension   = $fileInfo['extension'];
    $oriDir         = $fileInfo['dirname'];
    $oldOriginal    = $oriDir . DIRECTORY_SEPARATOR . $oriFilename . "." . $temp . "." . $oriExtension;

    if(file_exists($oldOriginal)){
        unlink($oldOriginal);
    }

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
            echo "Fail -> " . $file . "<br>";
            return false;
        }
    }
    echo "Done -> " . $file . "<br>";
    return true;
}

function checkPathPermission($file){

    if(is_writable(pathinfo($file)['dirname'])){
        return true;
    }
    echo "Fail -> " . $file;
    return false;
}

?>