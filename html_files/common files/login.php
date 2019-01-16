<div id="mySidenav" class="sidenav">
        <form action="html_files/backend/loginbackend.php" method="post" class="login_form modal" id="ex1" style="display:none;">
            <h3>Register</h3>
              <p><label>Username:</label><input type="text" name="username" placeholder="Username" required /></p>
              <p><label>Email:</label><input type="text" name="email" placeholder="Email" required /></p>
              <p><label>Password:</label><input type="Password" name="password"  placeholder="Password" required /></p>
              <p><input type="submit" name="register" value="Register" /></p>
        </form>
    <a href="#ex1" rel="modal:open" id="register">Register &nbsp; &nbsp; <i class="fas fa-user-edit"></i></a>

        <form action="html_files/backend/loginbackend.php" method="post" class="login_form modal" id="ex2" style="display:none;">
            <h3>Login</h3>
              <p><label>Username:</label><input type="text" name="username" placeholder="Username" required /></p>
              <p><label>Password:</label><input type="Password" name="password"  placeholder="Password" required /></p>
              <p><input type="submit" name="login" value="Login" /></p>
        </form>
    <a href="#ex2" rel="modal:open" id="login">Login &nbsp; &nbsp; &nbsp; &nbsp; <i class="fas fa-sign-in-alt"></i></a>
</div>
