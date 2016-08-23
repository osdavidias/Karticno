<?php

namespace Karticno\Placanje\Model\Adminhtml\Source;

use Magento\Payment\Model\Method\AbstractMethod;


class Plati implements \Magento\Framework\Option\ArrayInterface
{
   
    public function Izbor()
    {
        return [
            [
                'value' => AbstractMethod::ACTION_AUTHORIZE,
                'label' => __('Authorize')
            ]
        ];
    }