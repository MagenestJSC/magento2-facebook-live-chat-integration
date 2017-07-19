<?php
/**
 * Created by PhpStorm.
 * User: nguyenhoang
 * Date: 13/05/2017
 * Time: 09:43
 */

namespace Magenest\FacebookSupportLive\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Class InstallSchema
 * @package Magenest\FacebookSupportLive\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        $table = $installer->getConnection()->newTable(
            $installer->getTable('magenest_userdata')
        )->addColumn(
            'user_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            10,
            [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary'  => true,
            ],
            'User ID'
        )->addColumn(
            'user_name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [  'nullable' => false ],
            'Name'
        )->addColumn(
            'user_email',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [ 'nullable' => false ],
            'User Email'
        )->addColumn(
            'user_birthday',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'User Birthday'
        )->addColumn(
            'user_location',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'User Location'
        )->addColumn(
            'user_linkfb',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'User Link Facebook'
        )->addColumn(
            'user_age',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'User Age'
        );
        $installer->getConnection()->createTable($table);
        //
        $table = $installer->getConnection()->newTable(
            $installer->getTable('magenest_userage')
        )->addColumn(
            'age_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            10,
            [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary'  => true,
            ],
            'Age ID'
        )->addColumn(
            'user_age',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [  'nullable' => false ],
            'Age'
        )->addColumn(
            'total',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            10,
            [ 'nullable' => false ],
            'Total'
        );
        $installer->getConnection()->createTable($table);
        //
        $table = $installer->getConnection()->newTable(
            $installer->getTable('magenest_userlocation')
        )->addColumn(
            'location_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            10,
            [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary'  => true,
            ],
            'Location ID'
        )->addColumn(
            'user_location',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [  'nullable' => false ],
            'Location'
        )->addColumn(
            'total',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            10,
            [ 'nullable' => false ],
            'Total'
        );
        $installer->getConnection()->createTable($table);
        //
        $installer->endSetup();
    }
    //end install()
}
