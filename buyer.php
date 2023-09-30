<?php
class Comprador
{
  private $first_name;
  private $last_name;
  private $age;
  private $email;
  private $mnumber;
 
  public function __construct($first_name, $last_name, $age, $email, $mnumber)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->age = $age;
    $this->email = $email;
    $this->mnumber = $mnumber;
  }
  public function getFirstName()
  {
    return $this->first_name;
  }
  public function getLastName()
  {
    return $this->last_name;
  }
  public function getAge()
  {
    return $this->age;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function getMnumber()
  {
    return $this->mnumber;
  }
}
?>

<?php
$objEmployeeOne = new Comprador('Bob', 'Smith', 30, 'bob123@gmail.com', 923607575);

echo $objEmployeeOne->getFirstName(); // prints 'Bob' 
echo " ";
echo $objEmployeeOne->getLastName(); // prints 'Smith' 
echo " ";
echo $objEmployeeOne->getAge(); // prints '30'
echo "/ ";
echo $objEmployeeOne->getEmail(); // prints '34'
echo "/ ";
echo $objEmployeeOne->getMnumber(); // prints '34'
echo '<br>'; 

//

$objEmployeeTwo = new Comprador('John', 'Smith', 34, 'bob123@gmail.com', 923607575);

echo $objEmployeeTwo->getFirstName(); // prints 'John'
