<?php
namespace session;

class session{
    
    public function StartSession(){
        $page = file_get_contents(__DIR__."/login.html");
        echo $page;
    }

}


$logonu = new session;
$logonu->StartSession();

?>