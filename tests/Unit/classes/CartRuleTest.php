<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

namespace PrestaShop\PrestaShop\Tests\Unit\Classes;

use PrestaShop\PrestaShop\Tests\TestCase\UnitTestCase;
use PHPUnit_Framework_TestCase;

use Adapter_Tools;

use CartRule;
use Cart;
use Context;


class CartRuleTest extends UnitTestCase
{
	public function setup()
	{
		parent::setup();

		$this->cart_rule = new CartRule();

		$this->cart_rule->id = 1;
		$this->cart_rule->quantity = 1;
		$this->cart_rule->quantity_per_user = 1;
		$this->cart_rule->active = 1;
		$this->cart_rule->date_from = time() - 3600;
		$this->cart_rule->date_to = time() + 3600;

		$this->context = new Context();
		$this->context->cart = new Cart();
		$this->context->cart->id = 1;
	}

	public function test_dummy_with_display_error_false()
	{
		$this->assertTrue($this->cart_rule->checkValidity($this->context, false, false));
	}

	public function test_dummy_with_display_error_true()
	{
		$this->assertFalse($this->cart_rule->checkValidity($this->context, false, true));
	}
}