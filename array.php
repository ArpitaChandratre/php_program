<?php
//define an array containing user information 
$users = array(
        array(
              "name" => "john doe",
               "age" => 30,
               "email" => "john@example.com",
               "city" => "new york"
           ),
         array(
        "name" => "jane smith",
               "age" => 25,
               "email" => "jane@example.com",
               "city" => "los angeles"
           ),
          array(
            "name" => "alice johnson",
               "age" => 35,
               "email" => "alice@example.com",
               "city" => "chicago"
          ),
);
//print user information
echo "user information: <br>";
echo "------------<br>";
foreach($users as $value){
       echo "name:" . $value["name"] . "<br>";
       echo "age:" . $value["age"] . "<br>";
       echo "email:" . $value["email"] . "<br>";
       echo "city:" . $value["city"] . "<br>";
       echo "--------------<br>";
}
?>