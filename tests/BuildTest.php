<?php
declare(strict_types=1);

namespace CosmoQuestX\Tests;

use Unnamed\Applesauce;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

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
        include(__DIR__ . "/../csb/csb-accounts/auth.php");
        $db = new class {
            public function runQueryWhere() {
                return [['name' => 'name']];
            }
        };
        $toCheck = chk_UserId($db,"id","name");
        $this->assertEquals(TRUE, $toCheck);
    }

    public function testAuthClass()
    {
        $this->assertEquals(1,1);

    }


}
