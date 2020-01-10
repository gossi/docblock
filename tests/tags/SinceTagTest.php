<?php declare(strict_types=1);

namespace gossi\docblock\tests\tags;

use gossi\docblock\tags\SinceTag;
use PHPUnit\Framework\TestCase;

class SinceTagTest extends TestCase {
	public function testReadWrite(): void {
		$since = new SinceTag('1.0 baz');
		$this->assertEquals('@since 1.0 baz', $since->toString());
	}
}
