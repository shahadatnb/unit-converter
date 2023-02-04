<?php

namespace AsianCoder\UnitConverter;
use PHPUnit\Framework\TestCase;
use AsianCoder\UnitConverter\Weight;

class WeightTest extends TestCase
{

    public function test_convert_kilograms_to_lbs(){
        $lbs = Weight::formKilograms(100)->toLbs();

        $this->assertEquals(220.46230000000003,$lbs);
    }

}
