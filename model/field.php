<?php
include_once('baseModel.php');

/**
 * No need to create getters and setters
 * it is available via 'baseModel'
 * The getters and setters can be overridden
 
 * This is a sample model file, can be safely deleted
 
 */
class Field extends BaseModel {
  public $_table = "field";
  public $id;
  public $name;
  public $type;
  public $idForm;
}
?>