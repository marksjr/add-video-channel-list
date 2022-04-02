<?php
$file = 'canais.txt';
if (file_exists($file)) {
  
}else{
  $create_file = fopen("canais.txt", "w");
}

if(isset($_POST['canais'])){
$canais = file_get_contents($file);
$canais .= stripslashes($_POST['canais']);
file_put_contents($file, $canais);
}
if(isset($_POST['excluir'])){
  if (!unlink($file)) {
    echo '<script>alert("Erro");</script>'; 
}else {
  echo '<script>alert("Deleted");</script>'; 
} 
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
body{
  background-color: black;
  color: white;
}
</style>  
<title>List C&V</title>
</head>
<body>
<div class="container">
<form action="" method="POST">
<div style="padding-top: 20px;"></div>
<h2>List of Channels and Videos <a href="tv.php?v=0" target="_blanck">
<button class="btn btn-primary" type="button">Open Player</button></a></h2>
<p>Add each link per line, with a single quote at the end / To add new list delete current list</p>
<div class="form-group">
<textarea name="canais" class="form-control" id="canais" rows="40">
<?php
if (file_exists($file)) {
$fh = fopen('canais.txt','r');
while ($line = fgets($fh)) {
echo $line; 
}
fclose($fh);
}else{
}
?>
</textarea>
</div>
<div style="padding-top: 10px;"></div>
<input type="submit" value="Save" class="btn btn-primary"></input>
<input name="excluir" type="submit" class="btn btn-danger" value="Delete"></input>
</form>
<div style="padding-top: 20px;"></div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>