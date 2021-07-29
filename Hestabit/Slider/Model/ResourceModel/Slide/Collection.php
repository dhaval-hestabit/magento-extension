<?php
namespace Hestabit\Slider\Model\ResourceModel\Slide;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'slide_id';
	protected $_eventPrefix = 'hestabit_slider_slide_collection';
	protected $_eventObject = 'slide_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Hestabit\Slider\Model\Slide', 'Hestabit\Slider\Model\ResourceModel\Slide');
	}

}
