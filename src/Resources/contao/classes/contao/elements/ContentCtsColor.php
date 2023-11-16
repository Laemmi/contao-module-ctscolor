<?php
/**
 * @package     Contao Themes-Shop
 * @filesource  ContentCtsColor.php
 * @version     1.0.0
 * @since       21.09.15 - 15:43
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2015
 * @license     EULA
 */
namespace esit\ctscolor\classes\contao\elements;

use \esit\ctscore\classes\contao\helper\TemplateHelper;

/**
 * Class ContentCtsColor
 * @package ctscolor\classes\contao\elements
 */
class ContentCtsColor extends \ContentElement
{


    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_ctscolor';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->genBeOutput();
        } else {
            $this->genFeOutput();
        }
    }


    /**
     * Erzeugt die Ausgebe für das Backend.
     * @return string
     */
    private function genBeOutput()
    {
        $this->strTemplate        = 'be_wildcard';
        $this->Template           = new \BackendTemplate($this->strTemplate);
        $this->Template->title    = $this->headline;
        $this->Template->wildcard = "### ContentCtsColor ###";
    }


    /**
     * Erzeugt die Ausgebe für das Frontend.
     * @return string
     */
    private function genFeOutput()
    {
        $this->Template = TemplateHelper::setupTemplate($this->strTemplate, $this->arrData);
    }
}
