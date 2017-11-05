<?php
/**
 * Created by PhpStorm.
 * User: egrove
 * Date: 4/11/17
 * Time: 8:33 PM
 */

class profile
{
    var $name;
    private $pin;

    function __construct($profilename)
    {
        $this->set_name($profilename);
    }

    protected function set_name($new_name) {
        if ($new_name != "sathishkumar") {
            $this->name = strtoupper($new_name);
        }
        else {
            $this->name = $new_name;

        }    }
    function get_name() {
        return $this->name;
    }

    private function get_pin(){
        return $this->pin;
    }
}

class employee extends profile {

    function __construct($employee_name) {
        $this->set_name($employee_name);
    }

protected function set_name($new_name) {
    if ($new_name == "Govindaraju Muthukrishnan") {
        $this->name = strtoupper($new_name);
    }
    elseif ($new_name == "sathish"){

        profile::set_name($new_name); //can also configure as parent::set_name
    }
}
}