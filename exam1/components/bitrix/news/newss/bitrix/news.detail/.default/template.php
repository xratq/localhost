<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
echo  '<pre>';
//print_r($arResult);
echo '</pre>';
?>

<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <?=$arResult["DETAIL_TEXT"]?>
        </div>
        <div class="review-autor">
            <?=$arResult["NAME"]?>
            <?= $arResult["DISPLAY_ACTIVE_FROM"]?>
            <?= $arResult["PROPERTIES"]["POSITION"]["VALUE"]?>
            <?= $arResult["PROPERTIES"]["COMPANY"]["VALUE"]?>
            </span>
        </div>
    </div>



    <div style="clear: both;" class="review-img-wrap">
        <?
      if ($arResult["DETAIL_PICTURE"]["SRC"]) {
        ?>
<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
<?  }
else  { ?>

    <img src="/bitrix/templates/exam1/img/no_photo.jpg" alt="img">

<? } ?>
    </div>
</div>
<?php
//var_dump($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"]);
?>

<?php // echo count($arResult["PROPERTIES"]["FILE"]["VALUE"]) ?>

<?php if (!is_null($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"]) && is_array($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"])):  ?>

    <div class="exam-review-doc">
        <p><?= GetMessage("Title") ?>:</p>

        <?php foreach ($arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"] as $val): ?>
            <div class="exam-review-item-doc">
                <img class="rew-doc-ico" src="/bitrix/templates/exam1/img/icons/pdf_ico_40.png">
                <a href="<?= $val["SRC"] ?>"><?= $val["ORIGINAL_NAME"] ?></a>
            </div>
        <?php endforeach; ?>
    </div>

<?php endif; ?>
