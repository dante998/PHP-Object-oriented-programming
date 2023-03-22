<?php
// General singleton class.
class Singleton {
  // Hold the class instance.
  private static $instance = NULL;

  // The constructor is private
  //to prevent initiation with outer code.
  private function __construct() {
    // The expensive process (db - connection) goes here.
  }

  // The object is created from within the class itself
  //only if the class has no instance.
  public static function getInstance() {

    if (self::$instance == NULL) {
      self::$instance = new Singleton();
    }
    return self::$instance;
  }
}