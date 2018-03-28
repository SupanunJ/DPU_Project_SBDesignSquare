Hello World , {{$name}}
<!-- <p><a href="html_images.asp">HTML Images</a> is a link to a page on this website.</p> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Main</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="/main/main" method="post">
        {{ csrf_field() }}
        
        First name:<br>
        <input type="text" name="name" >
        <br>
        Last name:<br>
        <input type="text" name="lastname" >
        <br>
        age:<br>
        <input type="text" name="age" >
        <br><br>

        <button name='submit' type='submit' >Submit</button>
    </form>
</body>
</html>