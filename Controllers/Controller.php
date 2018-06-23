<?php

class Controller extends Database {



  public static function CreateView($viewName) {
    require_once("./View/$viewName.php");
    static::doSomething();
  }


}

?>
