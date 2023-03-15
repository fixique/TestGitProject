<?php
(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

/**
 * @global $APPLICATION CMain
 * @var $component \Pwd\Components\PwdSectionsNav
 * @var $arResult array
 * @var $arParams array
 */
?>
<!-- Navbar -->
<nav id="navbar" class="container">
    <div class="navbar__content">
        <ul class="tabs-products">
            <?php
            $counter = 0;
            foreach ($component->sections as $section) {
                $counter++;
                $sectionName = (LANGUAGE_ID == 'en' ? $section['UF_ENG_NAME'] : $section['NAME']);
                if (!$sectionName) {
                    $sectionName = $section['NAME'];
                }
                ?>
                <li><a
                        href="/catalog/<?=$section['CODE']?>/"
                        <?php if ($counter === 1) {?>class="e"<?php }?>
                    ><?=$sectionName?></a></li>
            <?php }
            ?>
        </ul>
    </div>
</nav>
<div class="navbar__trigger" id="navbar__trigger"></div>
