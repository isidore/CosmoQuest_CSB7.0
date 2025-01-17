<?php
declare(strict_types=1);

namespace CosmoQuestX\Tests;

use CosmoQuestX\Applesauce;
use CosmoQuestX\Api\Authorization;
use PHPUnit\Framework\TestCase;

class BuildTest extends TestCase
{
    /** @test */
    public function testingTest()
    {
        $applesauce = new Applesauce();
        $this->assertEquals(3, $applesauce->TheWordThree());
    }


    /** @test */
    public function testLogin()
    {
        $db = new class {
            public function runQueryWhere() {
                return [['name' => 'name']];
            }
        };
        $toCheck = Authorization::chk_UserId($db, "id", "name");
        $this->assertEquals(TRUE, $toCheck);
    }

    public function testAuthClass()
    {
        $this->assertEquals(1,1);

    }


}
