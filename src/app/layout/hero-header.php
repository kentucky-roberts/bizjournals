<style type="text/css">
    .viewport--xs-only .hero.header--hero-layout.has-artwork,
    .viewport--sm-only .hero.header--hero-layout.has-artwork {
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 25vw), url('<?= $this->hero_image ?>');
    }

    .viewport--md .hero.header--hero-layout.has-artwork {
        background-image: url('<?= $this->hero_image ?>');
    }

    .viewport--xs-only .header--hero-layout.has-artwork,
    .viewport--sm-only .header--hero-layout.has-artwork {
        padding-top: 0;
    }

    .header--hero-layout {
        min-height: 300px;
    }
    .header--hero-layout .hero__title,
    .header--hero-layout .hero__subtitle {
        font-family: 'Graphik Web', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
    }
    .header--hero-layout .hero__title.hero__title {
        padding-top: 3em;
    }
    .viewport--md .header--hero-layout .hero__title.hero__title {
        padding-top: 4em;
    }
    .header--hero-layout .hero__subtitle {
        font-size: .669em;
    }
        .viewport--md .header--hero-layout .hero__subtitle {
            font-size: .825em;
        }

    .viewport--md .header--hero-layout .hero__subtitle {
        width: 66.666666666%;
    }

    .viewport--xs-only .header--hero-layout.has-artwork .hero__body,
    .viewport--sm-only .header--hero-layout.has-artwork .hero__body {
        background: transparent;
    }
    .viewport--md .header--hero-layout.has-artwork .hero__body {
        margin-top: 0;
        padding-bottom: 1.5em;
    }

</style>

    <div class="hero header--hero-layout has-artwork">
        <div class="hero__body">
            <div class="container">
                    <?php //if (!empty($this->showSponsoredBy)) : ?>
                    <div class="xs-only__expander sm-only__expander">
                        <div style="display: -webkit-flex; display: -ms-flexbox; display: flex; -webkit-justify-content: flex-end; -ms-flex-pack: end; justify-content: flex-end;">
                            <div class="section-sponsors section-sponsors--white section-sponsors--<?php echo ($sponsoredByPosition == 'logo') ? 'blog' : 'special-section' ?>">
                                <span class="section-sponsors__label"><?php echo $sponsoredByLabel; ?></span>
                                <?php // if (!empty($ad)) : ?>
                                    <?php // if (!empty($sponsoredByCount)) : ?>
                                    <div class="section-sponsors__logos">
                                        <?php for ($i = 0; $i < $sponsoredByCount; $i++) : ?>
                                            <?php // $this->ad->setParam(str_replace('_1', '', $sponsoredByPosition), ($i + 1)); ?>
                                            <div class="section-sponsors__logo-container section-sponsors__logo-container--framed js-gpt-parent">
                                                <div class="section-sponsors__logo">
                                                    <?php // $this->ad->createTag() ?>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div><!-- /.section-sponsors__logos -->
                                    <?php // endif; ?>
                                <?php // endif; ?>
                            </div><!-- /.section-sponsors -->
                        </div>
                    </div><!-- /.expander -->
                    <?php // endif ?>

                    <div class="header__title">
                        <h1 class="hero__title"><?php echo $title; ?></h1>
                        <div class="hero__subtitle"><?php echo $headerDescription; ?></div>
                    </div>
            </div><!-- /.container -->
        </div><!-- /.hero__body -->
    </div><!-- /.hero -->
