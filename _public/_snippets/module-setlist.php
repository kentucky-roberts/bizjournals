<?php
if (!empty($this->sets)) {
    ?>
    <div class="module module--ruled">
        <div class="module__header">
            <h3 class="module__title">
                <strong>Directories</strong>
            </h3>
        </div>
        <div class="module__body">
            <div class="row row--default-gutters row--has-2-cols@md">
                <?php foreach ($this->sets as $set): ?>
                <div class="md__1/2">
                    <a href="<?= $set['href'] ?>" class="item item--outlined">
                        <h3 class="item__title"><em class="pull-left"><?= $set['name'] ?></h3></em><i class="icon-angle-right pull-right"></i>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php } ?>
