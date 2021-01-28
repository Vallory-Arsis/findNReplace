<?php 

/**
 * Recorrer CSV 
 * El CSV debe contener un listado de archivos 
 * a ser recorridos por el script
 */

$csvPath = "pruebas/test.csv";
$filePath = [];
$delete = false; //$delete = [];

$handle = fopen($csvPath, "r");
while (($data = fgetcsv($handle)) !== FALSE) {
    $filePath[] = $data[0];
    //$delete[] = $data[1];
}

foreach($filePath as $key => $fpath) {
    if(checkPathPermission($fpath)){
        findNReplace($fpath, $delete);
    }
}

function findNReplace($file, $remove) {
    $wStart = "/*aeR4Choc_start*/";
    $wEnd   = "/*aeR4Choc_end*/";

    $original = $file;
    $temp = "ToBeRemoved";

    echo "Starting with File -> " . $file . "<br>";

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
        if($newOriginalFile){
            echo "Creating: Done -> <br>";
        } else {
            echo "Creating: Fail -> <br>";
        }

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

            $fcHandle = fclose($handle);
            $fcNOF = fclose($newOriginalFile);
            if($fcHandle){
                echo "Reading: Done -> <br>";
            } else {
                echo "Reading: Fail -> <br>";
            }
            if($fcNOF){
                echo "Writing: Done -> <br>";
            } else {
                echo "Writing: Fail -> <br>";
            }
        } else {
            echo "Reading: Fail -> <br>";
            return false;
        }
    }

    if(file_exists($oldOriginal) && $remove == true){
        unlink($oldOriginal);
    }

    if($remove == true){
        if(file_exists($oldOriginal) == false) {
            echo "Removing: Done -> <br>";
        } else {
            echo "Removing: Fail -> <br>";
        }
    } else {
        if(file_exists($oldOriginal) == true) {
            echo "Created: Done -> <br>";
        } else {
            echo "Created: Fail -> <br>";
        }
    }

    echo "Ending with File " . $file . "<br>";

    return true;
}

function checkPathPermission($file){

    if(is_writable($file) && fileowner(pathinfo($file)['dirname']) !== false){
        return true;
    }
    echo "Fail -> " . $file;
    return false;
}

?>