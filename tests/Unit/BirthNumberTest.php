<?php

namespace Tests\Unit;

use App\Models\Fortune;
use PHPUnit\Framework\TestCase;

class BirthNumberTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_birthNumber(): void
    {
        $this->assertSame(4, Fortune::calcBirthNumber("2000","1","1"));
        $this->assertSame(5, Fortune::calcBirthNumber("2000","1","2"));
        $this->assertSame(6, Fortune::calcBirthNumber("2000","1","3"));
        $this->assertSame(7, Fortune::calcBirthNumber("2000","1","4"));
        $this->assertSame(8, Fortune::calcBirthNumber("2000","1","5"));
        $this->assertSame(9, Fortune::calcBirthNumber("2000","1","6"));
        $this->assertSame(1, Fortune::calcBirthNumber("2000","1","7"));
        $this->assertSame(2, Fortune::calcBirthNumber("2000","1","8"));
        $this->assertSame(3, Fortune::calcBirthNumber("2000","1","9"));
        $this->assertSame(4, Fortune::calcBirthNumber("2000","1","10"));
    }
}
