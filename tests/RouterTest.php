<?php

declare(strict_types=1);

include __DIR__ . '/../public/include/router.php';

use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase
{
    public function testItConvertsUrlsToFilenames()
    {
        $result = route_to_page('/members');
        $this->assertSame($result, PAGE_DIR . 'members.html.php');
    }

    public function testItConvertsSlashToHome()
    {
        $result = route_to_page('/');
        $this->assertSame($result, PAGE_DIR . 'home.html.php');
    }

    public function testItConversUnknownPathsTo404()
    {
        $result = route_to_page('/foo');
        $this->assertSame($result, PAGE_DIR . '404.html.php');
    }

    public function testThePagesItReturnsExist()
    {
        $result = route_to_page('/gallery');
        $fileExists = file_exists($result);
        $this->assertTrue($fileExists);
    }

    public function testsWithoutALeadingSlashReturnNull()
    {
        $result = route_to_page('gallery');
        $this->assertNull($result);
    }
};
