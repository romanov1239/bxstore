<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>

<a href="<?= $arParams['PATH_TO_BASKET'] ?>" rel="nofollow" class="header_basket_item">

    <span>
        В корзине
        <i><?= $arResult['NUM_PRODUCTS'] ?> товар на сумму <?= $arResult['TOTAL_PRICE'] ?></i>
    </span>
</a>


