<?php

// class Student
// {
//   private $first_name;
//   private $last_name;
//   private $age;
  
//   public function __construct($first_name, $last_name, $age)
//   {
//     $this->first_name = $first_name;
//     $this->last_name = $last_name;
//     $this->age = $age;
//   }
 
//   public function getFirstName()
//   {
//     return $this->first_name;
//   }
 
//   public function getLastName()
//   {
//     return $this->last_name;
//   }
 
//   public function getAge()
//   {
//     return $this->age;
//   }
// }

include("index.php");

if($_POST)
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    //neu dang nhap dung
    if($username == '111111' && $password == '111111')
    {
?>
<table >
    <tr>
        <td colspan="2">Đăng nhập thành công</td>
    </tr>
    <tr>
        <td><strong>Xin chào:</strong> </td>
        <td><?php echo $username ?></td>
    </tr>
    
</table>
<?php
    }else{
        //neu dang nhap sai
        $studentInfo=new Student('hel', 'as', 12);
        // echo $studentInfo->getAge();
        header('Content-Type: application/json');
        echo json_encode($studentInfo->getData());
    }
}
?>