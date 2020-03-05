<?php

namespace AutoblogPro;

class ContentType {
  
  static $content_types;
  
  public function __construct(){
    self::$content_types = json_decode(
      file_get_contents(
        __DIR__ ."/content-types.json"
      )
    );
  }
  
  public function display($type, $content){
    if(! isset(self::$content_types->{$type})):
      die('Invalid content type');      
    endif;
    
    $header = self::$content_types->{$type};
    
    header("Content-Type:$header");
    echo ($content);
  }
  
}