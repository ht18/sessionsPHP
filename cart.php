<?php
require 'inc/head.php';
require 'inc/data/products.php';

if (empty($_SESSION['loginname'])) {
    header("Location: login.php");
} else { ?>
    <section class="cookies container-fluid">
        <div class="row">
            <?php
            echo $catalog[$_SESSION['name']]['name'];
            ?>
        </div>
    </section>
    <?php require 'inc/foot.php'; ?>
<?php

}
