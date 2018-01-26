<div class="col-md-12">
    <a href="<?php echo ROOT_URL ?>posts/create" class="btn btn-primary btn-block"> + NEW POST + </a>
</div>

<?php foreach ($viewmodel as $post) : ?>
    <div class="form-group col-md-12 border border-light" style="margin-top: 15px">
        <div class="form-group">
            <h4 class="card-title"><?php echo $post['title'] ?></h4>
            <h6><?php echo $post['created_at']  ?></h6>
        </div>
        <div class="form-group">
            <p><?php echo $post['body'] ?></p>
        </div>
        <div class="form-group text-right">
            <a class="btn btn-light" role="button" href="<?php echo $post['link'] ?>" target="_blank"><i class="fa fa-link"></i> Website </a>
        </div>
    </div>
<?php endforeach ?>
