<?php
defined('_JEXEC') or die;

/**
 * Controlador del component HelloWorld
 *
 * @package     Joomla.Component
 * @subpackage  com_helloworld
 * @since       1.0
 */
class HelloWorldController extends JControllerLegacy
{
    /**
     * Mostra el missatge per defecte
     *
     * @return void
     */
    public function display($cachable = false, $urlparams = [])
    {
        parent::display();
    }
}
