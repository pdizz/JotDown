<div id="dashboard">
    <?php if ($this->ion_auth->logged_in()): ?>
        <p>You are logged in as <?php echo $this->ion_auth->user()->row()->username; ?>.
            <a href="../user/logout">Logout</a>
        </p>
    
    <?php else: ?>
        <div id="login_message"><?php echo $this->session->flashdata('message'); ?></div>
    
        <div id="login_form">
        <?php echo form_open("user/login");?>
            <label for="email">Email:</label>
            <input type="text" name="username" value=""  />    
            <label for="password">Password:</label>
            <input type="password" name="password" value=""  />
            <label for="remember">Remember Me:</label>
            <input type="checkbox" name="remember" value="1" id="remember" />    
            <input type="submit" name="submit" value="Login"  />
            
            <a href="user/register">Register</a>
        <?php echo form_close(); ?>
        </div>
    
    <?php endif; ?>
</div>


