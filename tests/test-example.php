<?php

/**
 * Class SampleTest
 *
 * @package Custom_Membership_Id
 */

use Dgd\ExamplePlugin\App\Models\Member;

use function Dgd\ExamplePlugin\customMemberId;

class Test_Example extends WP_UnitTestCase
{
	public function test_example_test()
	{
		$user = self::factory()->user->create([]);
		$this->assertEquals('1', '1');
	}
}
