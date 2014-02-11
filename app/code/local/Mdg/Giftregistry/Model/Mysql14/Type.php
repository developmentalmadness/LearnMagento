<?php
	class Mdg_Giftregistry_Type_Mysql14 extends Mage_Core_Model_Mysql14_Abstract {
		public function _construct(){
			$this->_init('mdg_giftregistry/type', 'type_id');
		}
	}
?>