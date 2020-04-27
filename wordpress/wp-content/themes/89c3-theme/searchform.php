
<form role="search" method="get" class="header__search-form" action="<?= esc_url(home_url('/')) ?>">
    <label>
        <span class="hide-content">Rechercher</span>
        <input type="search" class="search-field" placeholder="Qu'est ce que vous recherchez" value="" name="s" title="Qu'est ce que vous recherchez" autocomplete="off">
    </label>
    <input type="submit" class="search-submit" value="Go !">
</form>