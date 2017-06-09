<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wilkommen</title>
    <link rel="stylesheet" href="<?= URL ?>css/loginstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
    <div class="login-page">
        <div class="form">
            <h1>The aboonded undead city</h1>
            <form class="login-form" method="post" action="<?= URL ?>home/checkLogin">
                Firstname:<input type="text" placeholder="firstname" name="firstname"/>
                Prefix:<input type="text" placeholder="prefix" name="prefix"/>
                Lastname:<input type="text" placeholder="lastname" name="lastname"/>
                Username:<input type="text" placeholder="username" name="username"/>
                Password:<input type="password" placeholder="password" name="password"/>
                Email:<input type="text" placeholder="email" name="email"/>
                <input class='submir' type="submit" value="Log in" name='submit'/>
            </form>
        </div>
    </div>
</div>
