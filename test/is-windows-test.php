<?php

use function Ekiwok\isWindows;

class IsWindowsTest extends \PHPUnit\Framework\TestCase
{
    /** @dataProvider dataProvider_isWindows */
    public function testIsWindows($os, $isWindows)
    {
        $this->assertEquals($isWindows, isWindows($os));
    }

    public function dataProvider_isWindows()
    {
        return [
            ['CYGWIN_NT-5.1', false],
            ['Darwin', false],
            ['FreeBSD', false],
            ['HP-UX', false],
            ['IRIX64', false],
            ['Linux', false],
            ['NetBSD', false],
            ['OpenBSD', false],
            ['SunOS', false],
            ['Unix', false],
            ['WIN32', true],
            ['WINNT', true],
            ['Windows', true]
        ];

    }
}