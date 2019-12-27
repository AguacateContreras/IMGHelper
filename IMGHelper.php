<?php
  class IMGHelper{
    public function __construct($path){
      $this->path = $path;
    }


    private function use_path($file){
      return preg_replace("/\/*$/", "", $this->path)."/".$file;
    }
  }


  function is_image($filename){
    return (preg_match("/\.(gif|jpg|jpeg|tiff|png|svg)$/", strtolower($filename)));
  }
?>