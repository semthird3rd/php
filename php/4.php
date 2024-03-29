<html>
    <body>

    <?php

// Define a class named 'Person'
class Person {

  // Define the properties of the class
  public $name;
  public $age;

  // Define a constructor method for the class
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  // Define a method to display the person's name and age
  public function displayInfo() {
    echo "Name: " . $this->name . "<br>";
    echo "Age: " . $this->age . "<br>";
  }
}

// Define a class named 'Student' that extends the 'Person' class
class Student extends Person {

  // Define additional properties of the class
  public $rollNo;
  public $marks;

  // Define a constructor method for the class
  public function __construct($name, $age, $rollNo, $marks) {
    parent::__construct($name, $age);
    $this->rollNo = $rollNo;
    $this->marks = $marks;
  }

  // Define a method to display the student's information
  public function displayStudentInfo() {
    echo "Name: " . $this->name . "<br>";
    echo "Age: " . $this->age . "<br>";
    echo "Roll Number: " . $this->rollNo . "<br>";
    echo "Marks: " . $this->marks . "<br>";
  }
}

// Create an instance of the 'Person' class
$person = new Person("John Doe", 30);

// Call the 'displayInfo()' method of the 'Person' class
$person->displayInfo();

// Create an instance of the 'Student' class
$student = new Student("Jane Smith", 20, "A123", 85);

// Call the 'displayInfo()' method of the 'Person' class from the 'Student' class
$student->displayInfo();

// Call the 'displayStudentInfo()' method of the 'Student' class
$student->displayStudentInfo();

?>






    </body>
</html>