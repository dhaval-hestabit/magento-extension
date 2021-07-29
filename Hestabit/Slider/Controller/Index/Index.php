<?php
namespace Hestabit\Slider\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_slideFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Hestabit\Slider\Model\SlideFactory $slideFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_slideFactory = $slideFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$slide = $this->_slideFactory->create();
		$collection = $slide->getCollection();
		foreach($collection as $item){
			echo "<pre>";
			print_r($item->getData());
			echo "</pre>";
		}
		exit();
		return $this->_pageFactory->create();
	}
}
