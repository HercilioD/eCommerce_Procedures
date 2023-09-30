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



// Objects for the class Buyer

$objEmployeeThree = new Comprador('DiCaprio', 'DaVinci', 33, 'bob123@gmail.com', 923607575);

echo $objEmployeeThree->getFirstName(); // prints 'John'
echo " "; 
echo $objEmployeeThree->getLastName(); // prints 'Smith' 
echo " ";
echo $objEmployeeThree->getAge(); // prints '34'
echo "/ ";
echo $objEmployeeThree->getEmail(); // prints '34'
echo "/ ";
echo $objEmployeeThree->getMnumber(); // prints '34'
echo '<br>';

$a='Bob';
$b='Sense';
$c=2500;
$d='bob123@gmail.com';
$e=923607575;

$newPayee = new Comprador($a, $b, $c, $d, $e);

echo $newPayee->getFirstName(); // prints 'Bob'
echo " "; 
echo $newPayee->getLastName(); // prints 'Sense' 
echo " ";
echo $newPayee->getAge(); // prints '2500'
echo "/ ";
echo $newPayee->getEmail(); // prints 'bob123@gmail.com'
echo "/ ";
echo $newPayee->getMnumber(); // prints '923607579'
echo '<br>';
echo '<br><br>'; 

$pagamento=$newPayee->getAge() * 7; // Nova funcao a ser alterada e utilizada a poster, servindo somente de teste

echo $pagamento;
