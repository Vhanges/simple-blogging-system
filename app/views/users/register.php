<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TalaBlog</title>
</head>
<body>
    
<div class="register-wrapper">

    <form action="index.php?action=register" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username">
            
            <label for="username">Password</label>
            <input type="password" name="password">
            
            <label for="userType">What type of user are you?</label>
            <select name="usertype" id="">
                <option value="Reader">Reader</option>
                <option value="Author">Author</option>
            </select>
            <input type="submit" name="submit">
    </form>

<div class="register-wrapper">

</body>
</html>