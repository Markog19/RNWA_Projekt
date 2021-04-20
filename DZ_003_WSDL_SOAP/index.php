<!DOCTYPE html>
<html>
<head>
  <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #007bff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #17a2b8;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>

<body>

<h3>Konverter valuta (BAM < = > EUR)</h3>

<div>
  <form method="post" action="client.php">
    <label for="number">Količina</label>
    <input type="text" id="number" name="number" placeholder="Ovdje unesite količinu..">

	
	Odaberite konverter:
<br><br>
  <input type="radio" name="conv" value="toEur"> BAM u EUR
  <input type="radio" name="conv" value="toBam"> EUR u BAM

  <br><br>

    <input type="submit" value="Pretvori">
  </form>
</div>

</body>
</html>
