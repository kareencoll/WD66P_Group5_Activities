<?php

$password = $_POST['password'];
$confirmpass = $_POST['confirmpass'];


if ($password === $confirmpass)
{
    matchPassword();
}
else
{
    echo "You cannot proceed to your account because your password does not match.";
}


function matchPassword()
{
    echo "Hi ";
echo ucwords($_POST['firstName']);
echo " ";
echo ucwords($_POST['lastName']);
echo "<br />";
echo "Welcome to My System";
echo "<br />";
echo "Your birthdate is ";
echo $_POST['birthday'];
echo "<br />";
echo "You are currently residing at  ";
echo $_POST['address'];
echo " ";
echo $_POST['city'];
echo " ";
echo $_POST['province'];
echo " ";
echo $_POST['zip'];
echo "<br />";
echo "Your email is  ";
echo strtolower($_POST['email']);
echo "<br />";

if (isset($_POST['subscribe']))
{
    echo "Thank you for subscribing to our latest news";
}
else{
}

echo "<br /> <br />";
echo "Thank you for registering";
}
