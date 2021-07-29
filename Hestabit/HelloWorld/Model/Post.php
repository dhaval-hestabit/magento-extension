<?php
namespace Hestabit\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'hestabit_helloworld_post';

	protected $_cacheTag = 'hestabit_helloworld_post';

	protected $_eventPrefix = 'hestabit_helloworld_post';

	protected function _construct()
	{
		$this->_init('Hestabit\HelloWorld\Model\ResourceModel\Post');
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
