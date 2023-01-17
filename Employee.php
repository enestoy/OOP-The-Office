<?php
class Employee extends Department{
    public $name;
    public $title;

    function set_name($name) {
        $this->name = $name;
      }
      function get_name() {
        return $this->name;
      }
      function set_title($title) {
        $this->title = $title;
      }
      function get_title() {
        return $this->title;
      }


}

?>