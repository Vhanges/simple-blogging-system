<form action="#?action=register" method="POST">
    <div class="register-wrapper">
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
    </div>
</form>