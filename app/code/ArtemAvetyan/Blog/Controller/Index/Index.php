<?php declare(strict_types=1);

namespace ArtemAvetyan\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\Result\Redirect;

class Index implements HttpGetActionInterface
{

    public function __construct(
        private ForwardFactory $forwardFactory
    )
    {
    }

    public function execute(): Forward
    {
        $forward = $this->forwardFactory->create();
        return $forward->setController('post')->forward('list');
    }
}
