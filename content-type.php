<?php

namespace AutoblogPro;

class ContentType {
  
  static $content_types;
  
  public function __construct(){
    self::$content_types = [
      "json"  => "application/json",
      "pdf"   => "application/pdf",
      "txt"   => "text/plain",
      "xml"   => "application/xml",
      "png"   => "image/png",
      "jpg"   => "image/jpeg",
      "zip"   => "application/zip",
      "rar"   => "application/x-rar-compressed"
    ];
  }
  
  public function __destruct(){
    unset(self::$content_types);
  }
  
  public function display($type, $content){
    if(! isset(self::$content_types[$type])):
      die('Invalid content type');      
    endif;
    
    $header = self::$content_types[$type];
    
    header("Content-Type:$header");
    echo ($content);
  }
  
}