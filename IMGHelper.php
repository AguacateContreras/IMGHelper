<?php
  class IMGHelper{
    public function __construct($path){
      $this->path = $path;
    }


    private function use_path($file){
      return preg_replace("/\/*$/", "", $this->path)."/".$file;
    }
  }
?>