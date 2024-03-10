<?php

class FileInfo{

    public function getFile(){
        return __FILE__;
    }

    public function getDir(){
        return __DIR__;
    }
}

$myFileInfo = new FileInfo;
echo $myFileInfo->getFile() .PHP_EOL;
echo $myFileInfo->getDir() .PHP_EOL;

?>