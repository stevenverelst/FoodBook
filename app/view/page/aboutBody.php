<?php
namespace app\view\page;
?>

<div class="jumbotron jumbotron-flud text-center text-white bg-success">
    <div class="container">;
        <h1 class="display-4">
            <?php About::getData('_title') ?>
        </h1>
        <p class="lead">
            <?php About::getData('_description') ?></p>
        <p>Version: <strong><?php About::getData('_version') ?></strong>
        </p>
    </div>
</div>';