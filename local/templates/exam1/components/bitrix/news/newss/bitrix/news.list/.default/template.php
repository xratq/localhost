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
<div class="news-list">

<?php
if (empty($arResult["ITEMS"])) {
    return;
}
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="review-text">
							
			<div class="review-block-title">
				<span class="review-block-name">
					<a href=<?echo $arItem["DETAIL_PAGE_URL"]?>>
						<?=$arItem ["NAME"];?>
					</a>
				</span>
				<span class="review-block-description">
					<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
					<?php
        if (!empty($arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]) && is_string($arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"])) {
			echo $arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"];
		}
		if (!empty($arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]) && is_string($arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"])) {
			echo $arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"];
		}
		?>
					
				</span>
			</div>
			
			<div class="review-text-cont">
			<?php
        if (isset($arItem["PREVIEW_TEXT"])) {
            $text = $arItem["PREVIEW_TEXT"];
            if (is_string($text) && $text  != "") {
                echo  $text;
            }
		}
		?>
				
			</div>
		</div>
		<div class="review-img-wrap">
			<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
			
			<?
            if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) {
            ?>
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
            <?  }
            else  { ?>

                <img src="<?=SITE_TEMPLATE_PATH?>/img/no_photo.jpg" alt="img">

            <? } ?>

        </a>
	</div>
	</div>
	<?endforeach;?>
<?=$arResult["NAV_STRING"]?>
