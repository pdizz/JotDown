<?php echo form_open("user/register");?>
    <label for="username">Desired username:</label>
    <input type="text" name="username" value=""  />  
    <label for="email">Email:</label>
    <input type="text" name="email" value="" />
    <label for="password">Password:</label>
    <input type="password" name="password" value=""  />
    <label for="confirm">Confirm password:</label>
    <input type="password" name="confirm" value="" />
    <label for="remember">Remember Me:</label>
    <input type="checkbox" name="remember" value="1" id="remember" />
    <input type="submit" name="submit" value="Submit"  />
    
    <?php echo $this->session->flashdata('message'); ?>

<?php echo form_close(); ?>
