<div class="primary">
<?php
if (!empty($this->featured)) :
foreach ($this->featured as $company) : ?>
    <div class="item" style="padding-top:15px;">
        <div class="meta">
            <span class="meta-item meta-item--sponsored meta-item--tag meta-item--small">Paid Listing</span>
        </div><!-- /.meta -->
        <h3 class="item__title u-break-word"><?= $company['companyName'] ?></h3>
        <div class="item__body">
            <div class="row">
                <div class="sm__1/2">
                    <div class="relative">
                        <?php
                        if (isset($company['image'])): ?>
                            <div class="crop--4x3">
                                <div class="cropped">
                                    <img src="<?= $company['image'] ?>" class="img--block" alt="<?= $company['companyName'] ?> banner image">
                                </div><!-- /.cropped -->
                            </div><!-- /.crop__4x3 -->
                            <?php
                        unset($company['image']);
                        endif;
                        if (isset($company['logo'])): ?>
                            <span class="thumb-frame u-position-absolute" style="left:8px;top:8px;">
                                            <img src="<?= $company['logo'] ?>" alt="<?= $company['companyName'] ?> logo">
                                        </span>
                            <?php
                        unset($company['logo']);
                        endif ?>
                    </div>
                </div>
                <div class="sm__1/2">
                    <dl class="dl dl--small">
                        <?php
                        if (!empty($company['address1'])) : ?>
                            <dt>Address</dt>
                            <dd itemscope itemtype="http://schema.org/PostalAddress">
                                <?= (!empty($company['address1'])) ? '<span itemprop="streetAddress">' . $company['address1'] . '</span>' : '' ?>
                                <?= (!empty($company['address2'])) ? $company['address2'] : '' ?>
                                <?= (!empty($company['city'])) ? '<span itemprop="addressLocality">' . $company['city'] . '</span>, ' : '' ?>
                                <?= (!empty($company['state'])) ? '<span itemprop="addressRegion">' . $company['state'] . '</span>' : '' ?>
                                <?= (!empty($company['zip'])) ? '<span itemprop="postalCode">' . $company['zip'] . '</span>' : '' ?>
                            </dd>
                            <?php
                        endif;
                        if (!empty($company['phone'])) : ?>

                            <?php
                            $phone = $company['phone'];

                            if (ctype_digit($phone)) {
                                switch (strlen($phone)) {
                                    case 10:
                                        $phone = "(" . substr($phone, 0, 3) . ") " . substr($phone, 3, 3) . "-" . substr($phone, 6);
                                        break;
                                    case 11:
                                        $phone = substr($phone, 0, 1) . " (" . substr($phone, 1, 3) . ") " . substr($phone, 4, 3) . "-" . substr($phone, 7);
                                        break;
                                    default:
                                        break;
                                }
                            }
                            ?>
                            <dt>Phone</dt>
                            <dd class="u-ellipsis" itemprop="telephone">
                                <a href="tel:<?= $phone ?>" target="_blank" rel="nofollow"><?= $phone?></a>
                            </dd>
                            <?php
                        endif;
                        if (!empty($company['email'])) : ?>
                            <dt>Email</dt>
                            <dd class="u-ellipsis" itemprop="email">
                                <a href="<?= $company['email'] ?>" target="_blank" rel="nofollow"><?= $company['email'] ?></a>
                            </dd>
                            <?php
                        endif;
                        if (!empty($company['website'])) : ?>
                            <dt>Website</dt>
                            <dd class="u-ellipsis" itemprop="website">
                                <a href="http://<?= $company['website'] ?>" itemprop="url" target="_blank" rel="nofollow"><?= $company['website'] ?></a>
                            </dd>
                            <?php
                        endif;
                        if(!empty($company['meta'])){
                            foreach ($company['meta'] as $name => $value){
                                if($value && strtolower($name) !== 'directory') {
                                    ?>
                            <dt><?= $name ?></dt>
                            <dd class="u-ellipsis" itemprop="<?= $name ?>">
                                <?= $value ?>
                            </dd>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </dl>
                    <?php
                    if (!empty($company['companyDescription'])) : ?>
                        <div class="item__teaser">
                            <?= $company['companyName'] ?>&nbsp<?= $company['companyDescription'] ?>
                        </div>
                        <?php
                    endif;
                    if (!empty($company['companyPromoText'])) : ?>
                        <div class="item__teaser">
                            <?= $company['companyName'] ?>&nbsp<?= $company['companyPromoText'] ?>
                        </div>
                        <?php
                    endif ?>
                </div><!-- col -->
            </div><!-- /.row -->
        </div><!-- /.item-body -->
    </div><!-- /.item -->
<?php endforeach; ?>
<hr>
<?php endif;
if (!empty($this->dataset['entries'])) : ?>

    <!-- place this in partials/datasets ... possibly -->
    <div class="row row--default-gutters row--has-2-cols@sm row--has-1-cols@md-only row--has-2-cols@lg">
        <?php
        foreach ($this->dataset['entries'] as &$company) : ?>
            <div class="sm__1/2 md__1/1 lg__1/2">
                <div class="module">
                    <div class="item">
                        <h3 class="item__title item__title--small text--upper u-break-word">
                            <?= $company['companyName'] ?>
                        </h3>
                        <div class="item__teaser">
                            <dl class="dl dl--small">
                                <?php
                                if (!empty($company['address1'])) : ?>
                                    <dt>Address</dt>
                                    <dd itemscope itemtype="http://schema.org/PostalAddress">
                                        <?= (!empty($company['address1'])) ? '<span itemprop="streetAddress">' . $company['address1'] . '</span><br>' : '' ?>
                                        <?= (!empty($company['address2'])) ? $company['address2'] . '' : '' ?>
                                        <?= (!empty($company['city'])) ? '<span itemprop="addressLocality">' . $company['city'] . '</span>, ' : '' ?>
                                        <?= (!empty($company['state'])) ? '<span itemprop="addressRegion">' . $company['state'] . '</span>' : '' ?>
                                        <?= (!empty($company['zip'])) ? '<span itemprop="postalCode">' . $company['zip'] . '</span>' : '' ?>
                                    </dd>
                                    <?php
                                endif;
                                if (!empty($company['phone'])) :
                                    $phone = $company['phone'];
                                    if (ctype_digit($phone)) {
                                        switch (strlen($phone)) {
                                            case 10:
                                                $phone = "(" . substr($phone, 0, 3) . ") " . substr($phone, 3, 3) . "-" . substr($phone, 6);
                                                break;
                                            case 11:
                                                $phone = substr($phone, 0, 1) . " (" . substr($phone, 1, 3) . ") " . substr($phone, 4, 3) . "-" . substr($phone, 7);
                                                break;
                                            default:
                                                break;
                                        }
                                    }
                                    ?>
                                    <dt>Phone</dt>
                                    <dd class="u-ellipsis" itemprop="telephone">
                                        <a href="tel:<?= $phone ?>" target="_blank" rel="nofollow"><?= $phone ?></a>
                                    </dd>
                                    <?php
                                endif;
                                if (!empty($company['email'])) : ?>
                                    <dt>Email</dt>
                                    <dd class="u-ellipsis" itemprop="email">
                                        <a href="<?= $company['email'] ?>" target="_blank" rel="nofollow"><?= $company['email'] ?></a>
                                    </dd>
                                    <?php
                                endif;
                                if (!empty($company['website'])) : ?>
                                    <dt>Website</dt>
                                    <dd class="u-ellipsis" itemprop="website">
                                        <a href="http://<?= $company['website'] ?>" itemprop="url" target="_blank" rel="nofollow"><?= $company['website'] ?></a>
                                    </dd>
                                    <?php
                                endif;
                                if(!empty($company['meta'])){
                                    foreach ($company['meta'] as $name => $value){
                                        if($value && strtolower($name) !== 'directory') : ?>
                                            <dt><?= $name ?></dt>
                                            <dd class="u-ellipsis" itemprop="<?= $name ?>">
                                                <?= $value ?>
                                            </dd>
                                <?php
                                        endif;
                                    }
                                } ?>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endforeach ?>
    </div><!-- /.row -->
    <!-- place this in partials/datasets ... possibly -->
    <?php
endif ?>
</div><!-- /.primary -->
