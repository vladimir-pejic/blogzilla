<div class="col-md-4">
</div>
<div class="col-md-4">
    <h4 style="text-align: center">Login</h4>
    <form method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" aria-describedby="password" placeholder="Password">
        </div>
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary btn-block" value="submit">Submit</button>
        </div>
    </form>
</div>
<div class="col-md-4">
</div>
