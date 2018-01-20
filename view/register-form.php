<div class="container" id="formContainer">
        <form action="index.php?option=register" method="POST">
            <input type="text" class="form-control" placeholder="Name" name="username">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <input type="text" class="form-control" placeholder="Email address" name="email">
            <button type="submit" id="submitButton" class="btn btn-primary" name="submit">Register</button>
            <p class="message">Already registered? <a href="index.php?option=login">Sign In</a></p>
        </form>
    </div>