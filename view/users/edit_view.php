<h2>Edit data</h2>

<form action="?c=users&a=update&id=<?=$data['id']?>" method="post">
  Name:<br>
  <input type="text" name="name" value="<?=$data['user']?>">
  <br>
  Email:<br>
  <input type="text" name="email" value="<?=$data['email']?>">
  <br><br>
  <input type="submit" value="Submit">
</form>