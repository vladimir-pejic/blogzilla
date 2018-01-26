<div class="col-md-4">
</div>
<div class="col-md-4">
    <h4 style="text-align: center">Register</h4>
    <form method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input name="first_name" type="text" class="form-control" id="first_name" aria-describedby="first_name" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input name="last_name" type="text" class="form-control" id="last_name" aria-describedby="last_name" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" aria-describedby="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input name="confirm_password" type="password" class="form-control" id="confirm_password" aria-describedby="confirm_password" placeholder="Confirm Password">
        </div>
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary btn-block" value="submit">Submit</button>
        </div>
    </form>
</div>
<div class="col-md-4">
</div>
