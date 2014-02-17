<?php

$installer = $this;
$installer->startSetup();

// create the mdg_giftregistry/registry table
$tableName = $installer->getTable('mdg_giftregistry/entity');

// check if the table already exists
if($intaller->getConnection()->isTableExists($tableName) != true) {
	$table = $installer-getConnection()
					->newTable($tableName)
					->addColumn('entity_id', Varian_Db_Ddl_Table::TYPE_INTEGER, null,
										array(
											'identity' => true,
											'unsigned' => true, 
											'nullable' => false,
											'primary' => true
										),
										'Entity Id'
									)
					->addColumn('customer_id', Varian_Db_Ddl_Table::TYPE_INTEGER, null,
										array(
											'unsigned' => true,
											'nullable' => false,
											'default' => 0
										),
										'Customer Id'
									)
					->addColumn('type_id', Varian_Db_Ddl_Table::TYPE_SMALLINT, null,
										array(
											'unsigned' => true,
											'nullable' => false,
											'default' => 0
										),
										'Type Id'
									)
					->addColumn('website_id', Varian_Db_Ddl_Table::TYPE_SMALLINT, null,
										array(
											'unsigned' => true,
											'nullable' => false,
											'default' = 0
										),
										'Website Id'
									)
					->addColumn('event_name', Varian_Db_Ddl_Table::TYPE_TEXT, 255,
										array(),
										'Event Name'
									)
					->addColumn('event_date', Varian_Db_Ddl_Table::TYPE_DATE, null,
										array(),
										'Event Date'
									)
					->addColumn('event_country', Varian_Db_Ddl_Table::TYPE_TEXT, 3,
										array(),
										'Event Country'
									)
					->addColumn('event_location', Varian_Db_Ddl_Table::TYPE_TEXT, 255,
										array(),
										'Event Country'
									)
					->addColumn('created_at', Varian_Db_Ddl_Table:TYPE_TIMESTAMP, null,
										array(
											'nullable' => false
										),
										'Created At'
									)
					->addIndex($installer->getIdxName('mdg_giftregistry/entity',
							array('customer_id')),
							array('customer_id'))
					->addIndex($installer->getIdxName('mdg_giftregistry/entity',
							array('website_id')),
							array('website_id'))
					->addIndex($installer->getIdxName('mdg_giftregistry/entity',
							array('type_id')),
							array('type_id'))
					->addForiegnKey
					
}