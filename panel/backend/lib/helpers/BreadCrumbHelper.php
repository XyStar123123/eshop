<?php
    function getBreadCrumbName($uri){
        $pageName = explode('/', $uri);
        $pageNeed = array_slice($pageName, 3);
        $result = [];
        
        foreach($pageNeed as $pn) {
            if(!empty($pn)) {
                $formatted = str_replace('_', ' ', $pn);
                $result[] = ucwords($formatted);
            }
        }
        
        return !empty($result) ? implode(' > ', $result) : 'Home';
    }  
?>