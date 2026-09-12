<?php
$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Harry', 'surname' => 'Potter', 'gender' => 'M'],
  ['name' => 'Hermione', 'surname' => 'Granger', 'gender' => 'F'],
];
foreach($users as $user){
    if($user['gender']=="M"){
        echo "Buongiorno Sig. " . $user['name'] ." ". $user['surname'] . "\n";
    }elseif($user['gender']=="F"){
        echo "Buongiorno Sig.Ra " . $user['name'] ." ". $user['surname'] . "\n";
    }else{
      echo "Buongiorno " . $user['name'] ." ". $user['surname'] . "\n";  
    }
};