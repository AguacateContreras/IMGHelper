<?php
  class IMGHelper{
    public function __construct($path){
      $this->path = $path;
    }


    public function return(){
      if(!is_dir($this->path)) return false;
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
      if(!$images) return false;
      foreach($images as $img){
        print('<img src="'.$img.'" '.$attributes.'>');
      }
      return true;
    }


    public function random(){
      $images = $this->return();
      if(!$images) return false;
      if(count($images)>0){
        return $images[rand(0, count($images)-1)];
      }
      return false;
    }


    private function use_path($file){
      return preg_replace("/\/*$/", "", $this->path)."/".$file;
    }
  }


  function is_image($filename){
    return (preg_match("/\.(gif|jpg|jpeg|tiff|png|svg|bpm)$/", strtolower($filename)));
  }
?>