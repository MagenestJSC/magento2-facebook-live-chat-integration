<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 06/05/2017
 * Time: 15:55
 */
namespace Magenest\FacebookSupportLive\Block\Chatbox;

use Magento\Framework\View\Element\Template;

/**
 * Class FacebookSupport
 * @package Magenest\FacebookSupportLive\Block\Chatbox
 */
class FacebookSupport extends Template
{

    /**
     * FacebookSupport constructor.
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
    
        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     */
    public function getLinkPage()
    {
        return $this->_scopeConfig->getValue('chatbox/config/link_page');
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->_scopeConfig->getValue('chatbox/config/app_id_page');
    }

    /**
     * @return mixed
     */
    public function getTitleOpenTab()
    {
        return $this->_scopeConfig->getValue('chatbox/config/title_open');
    }

    /**
     * @return mixed
     */
    public function getTitleCloseTab()
    {
        return $this->_scopeConfig->getValue('chatbox/config/title_close');
    }

    /**
     * @return mixed
     */
    public function getTabColor()
    {
        return $this->_scopeConfig->getValue('chatbox/config/tab_color');
    }

    /**
     * @return mixed
     */
    public function getTextColor()
    {
        return $this->_scopeConfig->getValue('chatbox/config/text_color');
    }

    /**
     * @return mixed
     */
    public function getEnableShadow()
    {
        return $this->_scopeConfig->getValue('chatbox/config/enable_shadow');
    }

    /**
     * @return mixed
     */
    public function getEnableTimeline()
    {
        return $this->_scopeConfig->getValue('chatbox/config/enable_timeline');
    }

    /**
     * @return mixed
     */
    public function getEnableEvent()
    {
        return $this->_scopeConfig->getValue('chatbox/config/enable_event');
    }

    /**
     * @return mixed
     */
    public function getCountEvent()
    {
        return $this->_scopeConfig->getValue('chatbox/config/count_event');
    }

    /**
     * @return mixed
     */
    public function getEnableMessenger()
    {
        return $this->_scopeConfig->getValue('chatbox/config/enable_mess');
    }

    /**
     * @return mixed
     */
    public function getEnableChatbox()
    {
        return $this->_scopeConfig->getValue('chatbox/config/enable_fb');
    }

    /**
     * @return string
     */
    public function getDataUserUrl()
    {
        return $this->getUrl("facebooksupportlive/index/user");
    }
}
