<?php
    function getPageTitle($file){
        $currentFile = explode('.', $file);
        $firstPart = $currentFile[0];
        $fileName = preg_split('/(?=[A-Z][a-z]*$)/', $firstPart);
        $result = implode(' ', $fileName);
        return $result;
    }
?>