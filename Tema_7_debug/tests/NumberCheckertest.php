<?php
namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use App\nivell1_2_phpunit_dataProvider\NumberChecker;

class NumberCheckerTest extends TestCase
{
    public function testNumberIsEven()
    {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());

        $checker = new NumberChecker(6);
        $this->assertTrue($checker->isEven());

        $checker = new NumberChecker(5);
        $this->assertFalse($checker->isEven());

        $checker = new NumberChecker(7);
        $this->assertFalse($checker->isEven());
    }


    public function testNumberIsPositive()
    {
        $checker = new NumberChecker(5);
        $this->assertTrue($checker->isPositive());

        $checker = new NumberChecker(7);
        $this->assertTrue($checker->isPositive());

        $checker = new NumberChecker(-3);
        $this->assertFalse($checker->isPositive());

        $checker = new NumberChecker(0);
        $this->assertFalse($checker->isPositive());
    }


    //using number provider old version and new method to test number checker

    #[DataProvider('numberEvenAndPositive')]
public function testIsEvenAndPositive( $number, bool $expectedEven, bool $expectedPositive)
{
    $checker = new NumberChecker($number);
    $this->assertSame($expectedEven, $checker->isEven());
    $this->assertSame($expectedPositive, $checker->isPositive());
}

public static function numberEvenAndPositive(): array
{
    return [
        [33, false, true],   
        [10, true, true],    
        [11, false, true],   
        [-4, true, false],
    ];
}

   #[DataProvider('isPositiveDataProvider')]
    public function testIsPositiveWithProvider(int $number, bool $expected)
    {
        $checker = new NumberChecker($number);
        $this->assertSame($expected, $checker->isPositive());
    }

    public static function isPositiveDataProvider(): array
    {
        return [
            [6, true],
            [-4, false],
        ];
    }

   
    #[DataProvider('numbersNotNeither')]
    public function testIsNeitherEvenNorPositive(int $number, bool $expectedEven, bool $expectedPositive)
    {
        $checker = new NumberChecker($number);
        $this->assertSame($expectedEven, $checker->isEven());
        $this->assertSame($expectedPositive, $checker->isPositive());
    }

    public static function numbersNotNeither(): array
    {
        return [
            [-9, false, false],
            [-81, false, false],
        ];
    }

    #[DataProvider('isNegative')]
    public function testIsNegative(NumberChecker $checker)
    {
        $this->assertTrue($checker->isEven());
        $this->assertFalse($checker->isPositive());
    }

    public static function isNegative(): array
    {
        return [
            [new NumberChecker(-2)],
            [new NumberChecker(-4)],
        ];
    }

    #[DataProvider('isPositiveProvider')]
    public function testIsPositiveWithObjects(NumberChecker $checker)
    {
        $this->assertTrue($checker->isEven());
        $this->assertTrue($checker->isPositive());
    }

    public static function isPositiveProvider(): array
    {
        return [
            [new NumberChecker(6)],
            [new NumberChecker(4)],
        ];
    }
}


?>