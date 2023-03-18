<?php
class NameOfClass {
    private $private_member_str;
    private $private_member_int;

    public function __construct() {
        $this->private_member_str = "";
        $this->private_member_int = 0;
    }

    public function set_private_member_str($value) {
        $this->private_member_str = $value;
    }

    public function set_private_member_int($value) {
        $this->private_member_int = $value;
    }

    public function get_private_member_str() {
        return $this->private_member_str;
    }

    public function get_private_member_int() {
        return $this->private_member_int;
    }

    public function display_info() {
        echo "Private Member String: " . $this->private_member_str . "<br>";
        echo "Private Member Int: " . $this->private_member_int . "<br>";
    }
}

class NameOfChild extends NameOfClass {
    private $another_private_member_str;

    public function __construct($value) {
        parent::__construct();
        $this->another_private_member_str = $value;
    }

    public function get_another_private_member_str() {
        return $this->another_private_member_str;
    }

    public function PrintInfo() {
        echo "Another Private Member String: " . $this->another_private_member_str . "<br>";
    }
}

class NameOfGrandChild extends NameOfChild {
    private $yet_another_private_member_int;

    public function __construct($value1, $value2) {
        parent::__construct($value1);
        $this->yet_another_private_member_int = $value2;
    }

    public function get_yet_another_private_member_int() {
        return $this->yet_another_private_member_int;
    }
}

class NameOfSiblingChild extends NameOfClass {
    public function display_info() {
        echo "Sibling Child Info:<br>";
        parent::display_info();
    }
}

$obj1 = new NameOfClass();
$obj1->set_private_member_str("Hello");
$obj1->set_private_member_int(123);
$obj1->display_info();

$obj2 = new NameOfChild("World");
$obj2->set_private_member_str("Hello");
$obj2->set_private_member_int(123);
$obj2->PrintInfo();

$obj3 = new NameOfGrandChild("Inheritance", 456);
$obj3->set_private_member_str("Hello");
$obj3->set_private_member_int(123);
$obj3->display_info();
echo "Another Private Member String: " . $obj3->get_another_private_member_str() . "<br>";
echo "Yet Another Private Member Int: " . $obj3->get_yet_another_private_member_int() . "<br>";

$obj4 = new NameOfSiblingChild();
$obj4->set_private_member_str("Hello");
$obj4->set_private_member_int(123);
$obj4->display_info();
?>