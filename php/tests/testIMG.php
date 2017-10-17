<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * TEST IMG
 */
final class imgTest extends TestCase
{
    /* assertDirectoryExists(string $directory[, string $message = ''])    
    Reports an error identified by $message if the directory specified by $directory does not exist. */
    public function testDirectory()
    {
        $img = new IMG('name','#','email','/uploads');
        $this->assertDirectoryNotExists($img->destination);
    }
    public function testUpload()
    {
        
    }
    

    
}
