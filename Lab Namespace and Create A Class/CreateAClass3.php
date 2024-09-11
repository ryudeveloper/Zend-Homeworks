<?php

//this is called on all methods that we create, so I refactored the code and get this code below.

//$args = func_get_args();
//$rpa_engine->log_activities("", $args);
//$driver = $rpa_engine->driver;


class HealthInsurance
{
  public static $driver = null;
  public static function startDriver()
  {
    self::$driver = self::$rpa_engine->driver;
  }
  public static function getDriver()
  {
    self::startDriver();
    return self::$driver;
  }
  // For the new methods its just call self::startDriver(); and not anymore the example on first comment.
  public function example()
  {
    self::startDriver(); //NOW YOU SHOULD USE THIS INSTEAD THE CODE BELOW
    /**
      $args = func_get_args();
      $rpa_engine->log_activities("", $args);
      $driver = $rpa_engine->driver;
      */
  }
}