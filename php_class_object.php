<!DOCTYPE html>
<html>
<body>
<?php
class Car{​​​​​​;
   public $model;    
   function set_name() {​​​​​​
      $this->model = "RAPID";
    }​​​​​​
}​​​​​​
// create an object
$SKODA = new Car();
$SKODA->set_name();
// show object properties
echo $SKODA->model;
?>
</body>
</html>




