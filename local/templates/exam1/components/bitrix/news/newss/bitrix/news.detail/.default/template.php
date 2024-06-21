<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

?>

<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <?=$arResult["DETAIL_TEXT"]?>
        </div>
        <div class="review-autor">
            <?=$arResult["NAME"]?>
            <?= $arResult["DISPLAY_ACTIVE_FROM"]?>
            <?
            if (isset($arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"])) {
                $position = $arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"];
                if (is_string($position) && $position  != "") {
                    $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"];
                }
            }?>
            <?
            if (isset($arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"])) {
                $company = $arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"];
                if (is_string($company) && $company  != "") {
                    $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"];
                }
            }?>
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

<?php if (!is_null($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"]) && is_array($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"])):  ?>

    <div class="exam-review-doc">
        <p><?= GetMessage("Title") ?>:</p>

        <?php foreach ($arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"] as $val): ?>
            <div class="exam-review-item-doc">
                <img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
                <a href="<?= $val["SRC"] ?>"><?= $val["ORIGINAL_NAME"] ?></a>
            </div>
        <?php endforeach; ?>
    </div>

<?php endif; ?>