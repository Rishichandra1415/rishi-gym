<?php
$fname=filter_input(INPUT_POST,'fname');
$email=filter_input(INPUT_POST,'email');
$msg=filter_input(INPUT_POST,'mob');
$msg=filter_input(INPUT_POST,'msg');
// $email=filter_input(INPUT_POST,'email');// [filterr input varies data from html form..... ]...Input post varies from its a type of method to transfer the data
if(!empty($fname)){
}
else{
  echo"username not be empty";
  die();//it is function  which is use to print the message
}
if(!empty($email)){

}
else{
    echo"email are empty";
    die();
}
// if(!empty($mob)){

// }
// else{
//     echo"how";
//     die();
// }
if(!empty($msg)){

}
else{
    echo"what";
    die();
}
$host="localhost";// server name 
$dbusername="root";// default database name
$dbpassword="";// password empty rhta h yai hmmsbb p depend rhtaa h  agrr  database m passwor lagana rhaa tho  ismai likhna rhtaa h 
$dbname="oneplus";// data base   name 



// data base connection
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);//Basicallly ismai hmsbbbb jo jo databasee ka hohtaa  h wahi sbb  likhtee h uprr m jo jo likhaa  hua hh 
if(mysqli_connect_error()){
  die('connect error('. mysqli_connect_errno().')'
  . mysqli_connect_error());

}
else{
  $sql="INSERT INTO one(fname,email,msg) value('$fname','$email','$msg')";
  if($conn->query($sql)){
    echo"new record form successfully";
  }
  else{
    echo"error". $sql ."<br>".$conn->error;
  }
  $conn->close();
}

    
?> 