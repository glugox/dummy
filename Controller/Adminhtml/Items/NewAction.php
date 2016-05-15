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

class NewAction extends \{{CompanyName}}\{{ModuleName}}\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
