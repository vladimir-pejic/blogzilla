<div>
    <a href="<?php echo ROOT_URL ?>posts/create" class="btn btn-success btn-share"> NEW POST </a>
    <?php foreach ($viewmodel as $post) : ?>
    <div class="card">
        <div class="card-block">
            <h4 class="card-title"><?php echo $post['title'] ?></h4>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $post['created_at']  ?></h6>
            <p class="card-text"><?php echo $post['body'] ?></p>
            <a class="btn btn-secondary" role="button" href="<?php echo $post['link'] ?>" target="_blank"> Website >> </a>
        </div>
    </div>
    <?php endforeach ?>
</div>