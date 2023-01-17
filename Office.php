<?php 

class Office extends Company{
    public $address;

    function set_address($address) {
        $this->address = $address;
      }
      function get_address() {
        return $this->address;
      }




}


?>