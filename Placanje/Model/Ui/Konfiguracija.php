<?php

namespace Karticno\Placanje\Model\Ui;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\SamplePaymentGateway\Gateway\Http\Client\ClientMock;


final class Konfiguracija implements ConfigProviderInterface
{
    const CODE = 'karticno';

   
    public function getConfig()
    {
        return [
            'payment' => [
                self::CODE => [
                    'transactionResults' => [
                        ClientMock::SUCCESS => __('Uspješno'),
                        ClientMock::FAILURE => __('Greška')
                    ]
                ]
            ]
        ];
    }
}
