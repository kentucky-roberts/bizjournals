
<?php
    Bizjournals_Component_Plugin_Header::run(
        [
            'isPageTitle'               => false,
            'show_sponsored_by'         => true,
            'sponsored_by_count'        => 3,
            'responsive'                => true,
            'showTitle'                 => true,
            'tabs'                      => $this->tabs,
            'title'                     => $this->getMarketName() . ' Business Meeting Guide',
            'titleHref'                 => '#',
            'titleHrefIcon'             => 'icon-angle-left',
        ],
        $this
    );
?>
