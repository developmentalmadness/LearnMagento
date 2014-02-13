<?php
	class Mdg_Giftregistry_Type_Mysql4 extends Mage_Core_Model_Mysql4_Abstract {
		public function _construct(){
			$this->_init('mdg_giftregistry/type', 'type_id');
		}
	}
