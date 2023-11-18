<!-- Comment (XSS Test) File ///.PHP
Author: @MoraKhaledX -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary Meta Tags -->
  <title>Hype - Leave Your Feedback</title>
  <meta name="title" content="Hype | Style Your Wardrobe with Trendy Fashion - Shop Now at Our Fashion Boutique">
  <meta name="description" content="Style your wardrobe with trendy fashion, Shop now at out fashion boutique.">
  
  <!-- FavIcon Import -->
  <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./fonts/font.css">

  <!-- Custom CSS Linking -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Preload Images -->
  <link rel="preload" as="image" href="assets/images/new-hero-banner.png">

</head>
<body>
    <h1 align="center">Leave Your Feedback</h1>
    <table align="center">
        <tr><td>
            <form action="persistent_xss.php" method="post">
                <textarea row="6" cols="55" name ="comment" placeholder="Comment..." maxlength="400"></textarea>
                <table align="center">
                    <tr><td>
                        <input type="submit" name="Comment" value="Comment"/>
                    </td></tr>
                </table>
            </form>
        </td></tr>
    </table>
<table align="center">
<tr><td>
    <form action="persistent_xss.php" method="post">
    <input type="submit" name="clear" value="Clear Comments"/>
    </form>

</td></tr>

</table>
    
<style>
 /* Center the page content */
body {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 140px;
  padding: 0;
  font-family: "montserrat", sans-serif;
  height: 10vh;
  background-color: #f5f5e5;
}

/* Style the heading */
h1 {
  margin-top: 20px;
  font-size: 36px;
  font-weight: bold;
  text-align: center;
}

/* Style the comment form */
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 0px;
}

textarea {
  width: 80%;
  height: 100px;
  margin-bottom: 0px;
  padding: 10px;
  border-radius: 10px;
  border: 2px solid #ddd;
  font-size: 16px;
  resize: none;
}

input[type="submit"] {
        text-decoration: none;
        background: black;
        color: #fff;
        padding: 12px 24px;
        font-size: 17px;
        display: inline-block;
        border: 1px solid black;
        border-radius: 18px;
        transition: .2s;
}

input[type="submit"]:hover {
  background-color: #f8f8f8;
  color: black;
  border: 1px solid black;
  transition: .2s;
}

/* Style the clear comments button */
table {
  margin-top: 10px;
}

input[type="submit"][name="clear"] {
        background: black;
        color: #fff;
        font-size: 17px;
        padding: 12px 24px;
        display: inline-block;
        border: 1px solid black;
        border-radius: 18px;
        transition: .2s;
}

input[type="submit"][name="clear"]:hover {
  background-color: #f8f8f8;
  color: black;
  border: 1px solid black;
  transition: .2s;
}

</style>
</body>
</html>