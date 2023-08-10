<?php

    /**
     * 
     * Get full url adrress
     * 
     * @return string $fullUrlAddress
     * 
     */
    function getFullUrl(){
        if(isset($_SERVER["HTTPS"]) and $_SERVER["HTTPS"] != "off"){
            $url_protocol = "https";
        }else{
            $url_protocol = "http";
        }

        $url =  "$url_protocol://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

        return htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
    }

?>