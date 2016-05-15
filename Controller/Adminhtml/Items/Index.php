<?php
/**
 * This file is part of Glugox.
 *
 * (c) Glugox <glugox@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace {{CompanyName}}\{{ModuleName}}\Controller\Adminhtml\Items;

class Index extends \{{CompanyName}}\{{ModuleName}}\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('{{CompanyName}}_{{ModuleName}}::{{moduleName}}');
        $resultPage->getConfig()->getTitle()->prepend(__('{{CompanyName}} Items'));
        $resultPage->addBreadcrumb(__('{{CompanyName}}'), __('{{CompanyName}}'));
        $resultPage->addBreadcrumb(__('Items'), __('Items'));
        return $resultPage;
    }
}
