<?php
  class IMGHelper{
    public function __construct($path){
      $this->path = $path;
    }


    public function return(){
      $files = scandir($this->path);
      $images = array();
      foreach($files as $file){
        if(is_image($file)){
          $images[] = $this->use_path($file);
        }
      }
      return $images;
    }


    public function print($attributes=''){
      $images = $this->return();
      foreach($images as $img){
        print('<img src="'.$img.'" '.$attributes.'>');
      }
    }


    private function use_path($file){
      return preg_replace("/\/*$/", "", $this->path)."/".$file;
    }
  }


  function is_image($filename){
    return (preg_match("/\.(gif|jpg|jpeg|tiff|png|svg)$/", strtolower($filename)));
  }
?>