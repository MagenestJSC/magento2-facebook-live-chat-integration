<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 20/05/2017
 * Time: 07:35
 */
namespace Magenest\FacebookSupportLive\Controller\Adminhtml\Chatbox;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package Magenest\ShopByBrand\Controller\Adminhtml\Dashboard
 */
class Dashboard extends \Magento\Backend\App\Action
{

    /**
     * @var PageFactory
     */
    protected $_resultPageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Dashboard'));
        return $resultPage;
    }
}
