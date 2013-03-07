<h1>JotDown</h1>

<div id="login">
    <?php if ($this->ion_auth->logged_in()): ?>
    <p>Welcome <?php echo $this->ion_auth->user()->row()->username; ?>! <a href="auth/logout">Logout</a></p>
    <?php else: ?>
    <a href="../auth/login">Login</a>
    <?php endif; ?>
</div>


