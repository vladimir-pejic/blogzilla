
<div class="col-md-12">
    <h4 style="text-align: center">Create new post</h4>
    <form method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title" aria-describedby="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="body">Content</label>
            <textarea name="body" rows="10" class="form-control" id="body" placeholder="Enter content"></textarea>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input name="link" type="text" class="form-control" id="link" aria-describedby="link" placeholder="Link">
        </div>
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary btn-block" value="submit">Submit</button> <a href="<?php echo ROOT_URL ?>posts" class="btn btn-danger btn-block">Cancel</a>
        </div>
    </form>
</div>



