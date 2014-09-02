<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Cache
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JCacheView.
 * Generated by PHPUnit on 2009-10-08 at 21:43:26.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Cache
 *
 * @since       11.1
 */
class JCacheControllerViewTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var    JCacheView
	 * @access protected
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		include_once JPATH_PLATFORM . '/joomla/cache/cache.php';
		include_once JPATH_PLATFORM . '/joomla/cache/controller.php';
		include_once JPATH_PLATFORM . '/joomla/cache/controller/view.php';

		$this->object = JCache::getInstance('view', array());
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @return void
	 */
	protected function tearDown()
	{
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGet().
	 *
	 * @return void
	 */
	public function testGet()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement test_makeId().
	 *
	 * @return void
	 */
	public function test_makeId()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}
}
