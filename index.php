<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cartoon</title>
  </head>
  <body>
    <?php
      $name=trim($_POST['isbn']);
      $author=trim($_POST['author']);
      $title=trim($_POST['title']);
      $price=trim($_POST['price']);
      if (!$name) {
        echo "you have not entered a bookname";
      }
      if (!$author) {
        echo "you have not entered a author";
      }
      if (!$phone) {
        echo "you have not entered a phone number";
      }

      @ $db=new mysqli('localhost','root','yy','book');
      if (mysqli_connect_errno()) {
        echo "error: could not connect to database. please retry latter";
        exit;
      }
      $query="insert into books(bookid,name,author,phone) value('null','$isbn','$author','$title','$price')";
      $result=$db->query($query);
      if ($result) {
        echo $db->affected_rows."book inserted into database";
      }
      else {
        echo "an error has occoured, the item was not added";
      }
      $db->close();
     ?>
  </body>
</html>
