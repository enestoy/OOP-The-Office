<?php
class Department extends Office{
    public $name;

    function set_name($name) {
        $this->name = $name;
      }
      function get_name() {
        return $this->name;
      }


}

?>