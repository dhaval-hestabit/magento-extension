<?php
namespace Hestabit\Slider\Model;
class Slide extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'hestabit_slider_slide';

	protected $_cacheTag = 'hestabit_slider_slide';

	protected $_eventPrefix = 'hestabit_slider_slide';

	protected function _construct()
	{
		$this->_init('Hestabit\Slider\Model\ResourceModel\Slide');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
