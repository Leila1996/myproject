<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>add condidat</title>
    </head>

    <body>
    

<form action="add" method="POST">

	{{ csrf_field()}}

name: <input type="text" name="email"><br>
lieu: <input type="text" name="lieu"><br>
name: <input type="text" name="avatar"><br>

  <input type="submit" value="creat condidat">
</form>

    </body>
</html>