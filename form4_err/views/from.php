<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Contactformulier</h1>
<h3>zet hier jouw naam en klas</h3>
<hr>
<pre>
  <form action="views/response.php" method="post">

    <label>naam: 	 <input type="text" name="name" autofocus></label>

    <label>email: 	  <input type="email" name="email"></label>

    <label>bericht: 	<input type="text" name="message"></label>

    			    <input type="submit" name='sendContact'>
  </form>
</pre>
<hr>

</body>
</html>