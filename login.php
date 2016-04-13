<?php
  $name=$_POST['username'];
  $passwd=$_POST['passwd'];
  if ((!isset($name)) || (!isset($passwd))) {
    echo "please enter a name and password";

?>
<h1>please log in</h1>
<p>
  this page is secret.
</p>
<form class="" action="login.php" method="post">
  <p>
    username:<input type="text" name="username" value="">
  </p>
  <p>
    password:<input type="text" name="passwd" value="">
  </p>
  <p>
    <input type="submit" name="submit" value="login">
  </p>
</form>
<?php
  }else {
    @ $db=new mysqli('localhost','root','yy','book');
    if (mysqli_connect_errno()) {
      echo "error: could not connect to database. please retry latter";
      exit;
    }
    $query="select count(*) from authorized_users where name = '$name' passwd='$passwd'";
    $result=$db->query($query);
    $row=$db->num_rows;
    if ($row>0) {
      echo "here it is";
    }else {
      echo "not authorized";
    }

  }
 ?>
