<?php
class Test extends Dbh{


public function getUser(){
  $sql='Select * from users';
  $stmt=$this->connect()->query($sql);
  while($row=$stmt->fetch()){
    echo $row["user_first"]."<br>";
    print_r($row);
    echo '<br>';
  }
}

public function getUserStmnt($first,$last){
  $sql = 'Select * from users where user_first= ? and user_last=?';
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute([$first,$last]);
  $names=$stmt->fetchAll();
  print_r($names);
  echo '<br>';
  foreach($names as $row)
    echo $row["user_first"]."<br>";
    print_r($row);
    echo '<br>';
  }

  public function setUserStmnt($first,$last,$uid,$pwd){
    $sql = 'INSERT INTO `users` ( `user_first`, `user_last`, `user_uid`, `user_pwd`) VALUES (?, ?,?,?)';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$first,$last,$uid,$pwd]);

}}
