<?php
   require APPROOT . '/views/includes/head.php';
?>
<div class="navbar dark">
    <?php
        require APPROOT . '/views/includes/navigation.php';
        ?>
</div>
<div class="container">
    <a class="btn green" href="<?php echo URLROOT; ?>/posts/create">
        Create
    </a>

    <?php foreach ($data['post_data'] as $post): ?>
        <div class="container-item">
            <!-- Title of the post -->
            <h2>
                <?php echo $post->title;  ?>
            </h2>

            <!-- time of the post -->
            <h3>
                <?php echo 'Created On:'.date('F j h:m',strtotime($post->created_at)) ;?>
            </h3>


            <!-- body if the post -->
            <p>
                <?php  echo $post->body   ?>
            </p>
        </div>
    <?php endforeach; ?>
</div>




