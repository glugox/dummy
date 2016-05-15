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

class Edit extends \{{CompanyName}}\{{ModuleName}}\Controller\Adminhtml\Items
{

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->_objectManager->create('{{CompanyName}}\{{ModuleName}}\Model\Items');

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This item no longer exists.'));
                $this->_redirect('{{companyName}}_{{moduleName}}/*');
                return;
            }
        }
        // set entered data if was error when we do save
        $data = $this->_objectManager->get('Magento\Backend\Model\Session')->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }
        $this->_coreRegistry->register('current_{{companyName}}_{{moduleName}}_items', $model);
        $this->_initAction();
        $this->_view->getLayout()->getBlock('items_items_edit');
        $this->_view->renderLayout();
    }
}
