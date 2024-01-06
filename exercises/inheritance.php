<?php
    ini_set('display_errors', 1);

    // Ex 1 & EX 6
    // Animal class
    class Animal {
        public function makeSound() {
            echo "bow bow";
        }
        public function move() {
            echo "Animal moves fast";
        }
    }
    class Cat extends Animal {
        public function makeSound() {
            echo "meow meow";
        }
    }

    // Ex 6
    class Cheetah extends Animal {
        public function move() {
            $animal = parent::move();
            echo $animal . "and Cheetah runs very fast";
        }

    }
    $cheetah = new Cheetah;
    $cheetah->move();

    echo "<br>===============================<br>";

    $dog = new Animal();
    $dog->makeSound();
    $cat = new Cat();
    $cat->makeSound();

    echo "<br>===============================<br>";


    // Ex 2 & Ex 9
    // Vehical class
    class Vehical {
        protected $make;
        protected $model;
        protected $year;
        protected $fuelType;

        public function __construct($make, $model, $year, $fuelType){
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
            $this->fuelType = $fuelType;
        }

        public function drive() {
            echo "driving";
        }

        // Ex 9
        public function getMake() {
            return $this->make;
        }
        public function getModel() {
            return $this->model;
        }
        public function getYear() {
            return $this->year;
        }
        public function getFuelType() {
            return $this->fuelType;
        }

        public function calcFuelEfficiency($gasLitre, $distance) {
            $efficiency = $distance / $gasLitre;
            echo "The fuel efficiency is " . $efficiency . " km/L";

        }
        public function calcDistanceTravelled($speed, $time) {
            $distanceTravelled = $speed * $time;
            echo "You travelled ". $distanceTravelled . " km";
        }
        public function calcMaxSpeed($distance, $time) {
            $speed = $distance / $time;
            echo "You can go ". $speed . " km/h fast";
        }
    }

    // Ex 2 & Ex 9
    class Car extends Vehical {
        public function drive() {
            echo "Repairing a car";
        }
        public function calcFuelEfficiency($gasLitre, $distance) {
            $car = parent::calcFuelEfficiency($gasLitre, $distance);
            echo $car . " for this car";
        }
        public function calcDistanceTravelled($speed, $time) {
            $car = parent::calcDistanceTravelled($speed, $time);
            echo $car . " with this car";
        }
        public function calcMaxSpeed($distance, $time) {
            $car = parent::calcMaxSpeed($distance, $time);
            echo $car . " with this car";
        }
    }

    class Truck extends Vehical {
        public function calcFuelEfficiency($gasLitre, $distance) {
            $car = parent::calcFuelEfficiency($gasLitre, $distance);
            echo $car . " for this truck";
        }
        public function calcDistanceTravelled($speed, $time) {
            $car = parent::calcDistanceTravelled($speed, $time);
            echo $car . " with this truck";
        }
        public function calcMaxSpeed($distance, $time) {
            $car = parent::calcMaxSpeed($distance, $time);
            echo $car . " with this truck";
        }
    }

    class Motorcycle extends Vehical {
        public function calcFuelEfficiency($gasLitre, $distance) {
            $car = parent::calcFuelEfficiency($gasLitre, $distance);
            echo $car . " for this motorcycle";
        }
        public function calcDistanceTravelled($speed, $time) {
            $car = parent::calcDistanceTravelled($speed, $time);
            echo $car . " with this motorcycle";
        }
        public function calcMaxSpeed($distance, $time) {
            $car = parent::calcMaxSpeed($distance, $time);
            echo $car . " with this motorcycle";
        }
    }

    $car = new Car("Toyota", "Prius", 2015, "Hybrid");
    $car->drive();
    $car->calcDistanceTravelled(100, 5);

    echo "<br>";
    
    $truck = new Truck("Ford", "F-150", 2018, "Diesel");
    $truck->calcFuelEfficiency(600, 100);

    echo "<br>";

    $motorcycle = new Motorcycle("Honda", "CBR", 2018, "Petrol");
    $motorcycle->calcMaxSpeed(1000, 5);

    echo "<br>===============================<br>";


    // Ex 3 & Ex 8
    // Shape class
    class Shape {
        public function getArea() {
            return 0;
        }
        public function getPerimeter() {
            return 0;
        }
    }
    class Rectangle extends Shape {
        private $width;
        private $height;
        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
                
        }

        public function getArea() {
            return $this->width * $this->height;
        }
    }

    // Ex 8
    class Circle extends Shape {
        private $radius;
        public function __construct($radius) {
            $this->radius = $radius;
        }
        public function getPerimeter() {
            return $this->radius * 2 * 3.14;
        }
        public function getArea() {
            return $this->radius ** 2 * 3.14;
        }
    }

    $circle = new Circle(10);
    echo "Perimeter of circle is: " . $circle->getPerimeter() . "<br>";
    echo "Area of circle is: " . $circle->getArea();

    echo "<br>===============================<br>";

    $rectangle = new Rectangle(10, 5);
    echo "Area of rectangle is: " . $rectangle->getArea();

    echo "<br>===============================<br>";


    // Ex 4 & Ex 7 & Ex 10
    // Person class
    class Person {
        protected $firstName;
        protected $lastName;

        public function __construct($firstName, $lastName) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }
        public function getFirstName() {
            return $this->firstName;
        }
        public function getLastName() {
            return $this->lastName;
        }
    }
    class Employee extends Person {
        protected $salary;
        protected $employeeID;
        protected $jobTitle;
        protected $address;

        public function __construct($salary, $employeeID, $jobTitle, $firstName, $lastName) {
            $this->salary = $salary;
            $this->employeeID = $employeeID;
            $this->jobTitle = $jobTitle;
            parent::__construct($firstName, $lastName);
        }
        
        public function work() {
            echo "Designing a website";
        }
        public function getSalary() {
            return $this->salary;
        }

        // Ex 7
        public function getEmployeeID() {
            return $this->employeeID;
        }
        public function getJobTitle() {
            return $this->firstName . ', ' . $this->jobTitle;
        }

        // Ex 10
        public function getAddress() {
            return $this->address;
        }
        public function getName() {
            $firstName = parent::getFirstName();
            $lastName = parent::getLastName();
            return $firstName . ' ' . $lastName;
        }

    }
    class HRManager extends Employee {
        private $employees = [];

        public function __construct($salary, $employeeID, $firstName, $lastName) {
            parent::__construct($salary, $employeeID, "HR Manager", $firstName, $lastName);
        }

        public function work() {
            echo "Hiring a new employee";
        }
        public function addEmployee($employee) {
            $this->employees[] = $employee;
        }
    }

    // Ex 10
    class Manager extends Employee {
        public function __construct($salary, $employeeID, $firstName, $lastName) {
            parent::__construct($salary, $employeeID, "Manager", $firstName, $lastName);
        }

        public function GeneratePerfomanceReport() {
            // evaluate the performance of the employee (1% to 100%)
            return random_int(1, 100);
        }
        public function calcBonus($employee) {
            $salary = $employee->salary;
            $bonus = $salary * 0.01 * $this->GeneratePerfomanceReport();
            echo $employee->getName() . "'s bonus is $" . $bonus;
        }
        public function manageProject() {
            echo "Projects managed by " . $this->getName();
        }
    }
    class Developer extends Employee {
        public function __construct($salary, $employeeID, $firstName, $lastName) {
            parent::__construct($salary, $employeeID, "Developer", $firstName, $lastName);
        }
    }
    class Programmer extends Employee {
        public function __construct($salary, $employeeID, $firstName, $lastName) {
            parent::__construct($salary, $employeeID, "Programmer", $firstName, $lastName);
        }
    }

    //$employee = new Employee(2000);
    $employee = new Employee(2000, 999, "Designer", "John", "Doe");
    echo $employee->getJobTitle();

    echo "<br>===============================<br>";
    
    echo "Designer earns $" . $employee->getSalary();
    $hrManager = new HRManager(6000, 10, "Jane", "Smith");
    echo "HR manager earns $" . $hrManager->getSalary();
    $hrManager->addEmployee("Emma");

    echo "<br>===============================<br>";

    $developer = new Developer(3000, 20, "Jack", "Black");
    $programmer = new Programmer(4000, 30, "Tom", "Green");

    $manager = new Manager(10000, 1, "Cate", "White");
    $manager->calcBonus($developer);
    echo "<br>";
    $manager->calcBonus($programmer);

    echo "<br>===============================<br>";

    // Ex 5
    // BankAccount class
    class BankAccount {
        protected $balance;

        public function __construct($balance) {
            $this->balance = $balance;
        }
        public function deposit($amout) {
            $this->balance += $amout;
            echo "The new balance is: $" . $this->balance . "<br>";
        }

        public function withdraw($amout) {
            if ($this->balance >= $amout) {
                $this->balance -= $amout;
            } else {
                echo "You don't have enough money to withdraw";
            }
        }
    }
    class SavingsAccount extends BankAccount {
        public function __construct($balance) {
            parent::__construct($balance);
        }
        public function withdraw($amout) {
            if ($this->balance - $amout >= 100) {
                $this->balance -= $amout;
                echo "the new balance is: $" . $this->balance;
            } else {
                echo "This operation would make the balance below $100 <br>";
            }
        }
    }

    $account = new SavingsAccount(100);
    $account->withdraw(50);
    $account->deposit(50);
    $account->withdraw(50);

?>