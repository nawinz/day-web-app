<?php
class csrf{
    public function __construct(){
        $this->timenow = time();
        $this->timeexp = strtotime(date('y-m-d')." 23:59:59");
        $this->except = $this->timeexp - $this->timenow;
    }
    public function generateCSRF(){
        
    }
}
?>