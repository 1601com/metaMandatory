<?php

// config.php

$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('LayoutClass', 'modifiedPageLayout');
$GLOBALS['TL_HOOKS']['getContentElement'][] = array('ContentClass', 'modifiedImages');

class LayoutClass
{
    /**
     * @param PageModel $objPage
     * @param LayoutModel $objLayout
     * @param PageRegular $objPageRegular
     */
    public function modifiedPageLayout(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
        if($objPage->pageTitle === "*" || $objPage->pageTitle === "FooBar")
        {
            $objPage->pageTitle = $objPage->title;
        }

        if($objPage->description === "*" || $objPage->description === "FooBar")
        {
            $objPage->description = "";
        }
    }
}

class ContentClass
{
    public function modifiedImages($objElement, $strBuffer)
    {
        if($objElement->imageTitle === "*" || $objElement->imageTitle === "FooBar" || $objElement->alt === "*" || $objElement->alt === "FooBar")
        {
            $strBuffer = str_replace(['title="*"','title="FooBar"','alt="*"','alt="FooBar"'],['title=""','title=""','alt=""','alt=""'],$strBuffer);
        }

        return $strBuffer;
    }
}
