<!-- Persistent XSS Test File ///.PHP
Author: @MoraKhaledX -->

<?php
$servername="localhost";
$username="root";
$password="mysql";
$dbname="xss";

$connection = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_GET['comment'])):
    echo filter_var($_GET['comment'], FILTER_SANITIZE_NUMBER_INT);
endif;

if(isset($_POST["clear"])){
    $sql="TRUNCATE table comment";
    if(mysqli_query($connection,$sql)==TRUE){
        echo "<div class='container'>
        <h2>Table Successfully &#10004;&#65039;</h2>
        <h1>Deleted</h1>
        <p>All Comments Have Been Deleted &#128465;&#65039;</p>
        <a href='index.php'>Return To Home</a>
        <a href='comment.php'>Comments</a>
        </div>";
    }
    else {
        echo "<div class='container'>
        <h2>Table Cannot Be &#10060;</h2>
        <h1>Removed</h1>
        <p>Please Try Again &#10071;</p>
        <a href='index.php'>Return To Home</a>
        <a href='comment.php'>Comments</a>
        </div>";
    }
}

if(isset($_POST["comment"])){
    $comm = $_POST["comment"];
    $sql = "INSERT INTO comment (Comment) VALUES ('$comm')";
    if(mysqli_query($connection,$sql)==TRUE){
        echo "Comment Successfully Inserted &#10004;&#65039;";
    }else{
        echo "Comment Cannot Be Inserted";
    }
}
$sql ="SELECT ID,COMMENT from comment";
$result = mysqli_query($connection, $sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "<br style='margin-bottom: 15px;'>Comment #".$row['ID']."<br><hr>".$row['COMMENT']."<br><hr>";
    }
}
?>

<!-- Successful Registering CSS -->
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "montserrat", sans-serif;
        min-height: 100vh;
        background-color: #f5f5e5;
    }
    .container {
        width: 100%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
        color: black;
    }
    .container p {
        margin-top: -15px;
    }
    .container h1 {
        font-size: 160px;
        margin: 0;
        font-weight: 900;
    }
    .container h2{
        margin-bottom: -5px;
    }
    .container a {
        text-decoration: none;
        background: black;
        color: #fff;
        padding: 12px 24px;
        display: inline-block;
        border: 1px solid black;
        border-radius: 25px;
        transition: .2s;
    }
    .container a:hover {
        color: black;
        background: white;
        border: 1px solid black;
        transition: .2s;
    }
</style>