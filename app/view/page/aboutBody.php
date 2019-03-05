<?php
namespace app\view\page;
?>

<div class="jumbotron jumbotron-flud text-center">
    <div class="container">;
        <h1 class="display-4">
            <?php About::getData('title') ?>
        </h1>
        <p class="lead">
            <?php About::getData('description') ?></p>
            <p>Version: <strong><?php About::getData('version')?></strong>
            </p>
    </div>
</div>'; 