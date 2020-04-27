<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body id="top">
    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">



        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.php">
                        <img src="wp-content/themes/89c3-theme/assets/images/logo.svg" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

                <a class="header__search-trigger" href="#0"></a>

                <div class="header__search">


                    <form role="search" method="get" class="header__search-form" action="#">
                        <label>
                            <span class="hide-content">Rechercher</span>
                            <input type="search" class="search-field" placeholder="Qu'est ce que vous recherchez" value="" name="s" title="Qu'est ce que vous recherchez" autocomplete="off">
                        </label>
                        <input type="submit" class="search-submit" value="Go !">
                    </form>

                    <a href="#0" title="Fermez la fenêtre" class="header__overlay-close">Close</a>

                </div> <!-- end header__search -->


                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->
    </section> <!-- end s-pageheader -->