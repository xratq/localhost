<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

?>

<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <?=$arResult["DETAIL_TEXT"]?>
        </div>
        <div class="review-autor">
            <?php if (!empty($arResult["NAME"]) && is_string($arResult["NAME"])): ?>
                <?= $arResult["NAME"] ?>
            <?php endif; ?>
            
            <?php if (!empty($arResult["DISPLAY_ACTIVE_FROM"]) && is_string($arResult["DISPLAY_ACTIVE_FROM"])): ?>
                <?= $arResult["DISPLAY_ACTIVE_FROM"] ?>
            <?php endif; ?>
            
            <?php if (!empty($arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]) && is_string($arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"])): ?>
                <?= $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"] ?>
            <?php endif; ?>
            <?php if (!empty($arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]) && is_string($arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"])): ?>
                <?= $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"] ?>
            <?php endif; ?>
            
        </div>
    </div>



    <div style="clear: both;" class="review-img-wrap">
        <?
      if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) {
        ?>
<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
<?  }
else  { ?>

    <img src="<?=SITE_TEMPLATE_PATH?>/img/no_photo.jpg" alt="img">

<? } ?>
    </div>
</div>



<?php if (!is_null($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"]) && is_array($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"])):  ?>

    <div class="exam-review-doc">
        <p><?= GetMessage("TITLE"); ?>:</p>
        
        <?php 
        $fileValues = $arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"];
        if (!is_array($fileValues) || isset($fileValues["SRC"])) {
            $fileValues = array($fileValues);
        }
        foreach ($fileValues as $val): ?>
            <div class="exam-review-item-doc">
                <img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
                <a href="<?= $val["SRC"] ?>"><?= $val["ORIGINAL_NAME"] ?></a>
            </div>
        <?php endforeach; ?>
    </div>

<?php endif; ?>
