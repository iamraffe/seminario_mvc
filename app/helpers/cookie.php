<?php namespace helpers;

class Cookie {



   public static function exists($key) {
        if (isset($_COOKIE[$key])) {
            return true;
        }
        else {
            return false;
        }
    }

  public static function set($key, $value){
    setcookie($key, $value, time() + (86400 * 30), "/");
  }

   public static function get($key){
      return $_COOKIE[$key];
   }

    public static function display(){
      return $_COOKIE;
   }

   public static function destroy($key, $path = "/", $domain = ""){
        setcookie($key, '', time()-3600, $path, $domain);
    }

}