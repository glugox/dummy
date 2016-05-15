<?php
/**
 * This file is part of Glugox.
 *
 * (c) Glugox <glugox@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace {{CompanyName}}\{{ModuleName}}\Model\Resource;

class Items extends \Magento\Framework\Model\Resource\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('{{companyName}}_{{moduleName}}_items', 'id');
    }
}
