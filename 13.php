<?php
// Defining a class named Car
class Car {
    public $brand;
    public $color;

    // Constructor method to initialize properties
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method to display car details
    public function displayDetails() {
        echo "This car is a " . $this->color . " " . $this->brand . ".<br>";
    }
}

// Creating objects from the Car class
$car1 = new Car("Toyota", "Red");
$car2 = new Car("Honda", "Blue");

// Calling methods on the objects
$car1->displayDetails();
$car2->displayDetails();
?>