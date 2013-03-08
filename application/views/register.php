<?php echo form_open("user/register");?>
    <label for="email">Email:</label>
    <input type="text" name="username" value=""  />    
    <label for="password">Password:</label>
    <input type="password" name="password" value=""  />
    <label for="remember">Remember Me:</label>
    <input type="checkbox" name="remember" value="1" id="remember" />    
    <input type="submit" name="submit" value="Login"  />

    <a href="user/register">Register</a>
<?php echo form_close(); ?>
