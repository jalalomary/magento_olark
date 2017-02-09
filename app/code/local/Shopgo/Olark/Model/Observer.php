<?php

class Shopgo_Olark_Model_Observer
{
    public function addChat($observer)
    {
        $controller         = $observer->getAction();

        $this->_addMainJavascript($controller);
        

    }    

    protected function _addMainJavascript($controller)
    {
        $layout             = $controller->getLayout();
        $before_body_end    = $layout->getBlock('before_body_end');

        $block              = $layout->createBlock('adminhtml/template')
        ->setTemplate('shopgo_olark/js-chat.phtml');

        if($before_body_end)
        {
            $before_body_end->append($block);    
        }
    }
}
