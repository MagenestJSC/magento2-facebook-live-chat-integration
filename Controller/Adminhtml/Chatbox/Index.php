<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 13/05/2017
 * Time: 11:29
 */

namespace Magenest\FacebookSupportLive\Controller\Adminhtml\Chatbox;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package Magenest\FacebookSupportLive\Controller\Adminhtml\Chatbox
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

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
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magenest_FacebookSupportLive::chatbox');
        $resultPage->addBreadcrumb(__('User'), __('User'));
        $resultPage->addBreadcrumb(__('Manage Data User'), __('Manage Data User'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Data User'));
        return $resultPage;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_FacebookSupportLive::chatbox');
    }
}
