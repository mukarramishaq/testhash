<?php

use Mukarramishaq\TestHash\Helpers\TestHash;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass Mukarramishaq\TestHash\Helpers\TestHash
 */
class TestHashTest extends TestCase
{
    /**
     * data provider for function testHash
     *
     * @return array
     */
    public function hashProvider(){
        return array(
            array(
                'dataSet' => array(
                    'params' => array(
                        'stringToBeHashed' => '',
                        'hashSize' => 20,
                    ),
                ),
                'expectedResult' => array(
                    'hashedValue' => '00000000000000000000',
                ),
            ),
            array(
                'dataSet' => array(
                    'params' => array(
                        'stringToBeHashed' => '',
                    ),
                ),
                'expectedResult' => array(
                    'hashedValue' => '00000000000000000000000000000000000000000000000000',
                ),
            ),
            array(
                'dataSet' => array(
                    'params' => array(
                        'stringToBeHashed' => 'hello',
                        'hashSize' => 62,
                    ),
                ),
                'expectedResult' => array(
                    'hashedValue' => 'KPUZ49ejotyDINSX27chmrwBGLQV05afkpuzEJOTY38dinsxCHMRW16bglqvAF',
                ),
            ),
            array(
                'dataSet' => array(
                    'params' => array(
                        'stringToBeHashed' => 'hello',
                        'hashSize' => 0,
                    ),
                ),
                'expectedResult' => array(
                    'hashedValue' => 'MRW16bglqvAFKPUZ49ejotyDINSX27chmrwBGLQV05afkpuzEJ',
                ),
            ),
            array(
                'dataSet' => array(
                    'params' => array(
                        'stringToBeHashed' => 'hello',
                        'hashSize' => 50,
                    ),
                ),
                'expectedResult' => array(
                    'hashedValue' => 'MRW16bglqvAFKPUZ49ejotyDINSX27chmrwBGLQV05afkpuzEJ',
                ),
            ),
            
        );
    }
    /**
     * it will tests the static function::hash
     * @covers
     * @dataProvider hashProvider
     */
    public function testHash($dataSet, $expectedResult){
        if (empty($dataSet['params']['hashSize'])) {
            $this->assertEquals($expectedResult['hashedValue'], TestHash::hash($dataSet['params']['stringToBeHashed']));
        } else {
            $this->assertEquals($expectedResult['hashedValue'], TestHash::hash($dataSet['params']['stringToBeHashed'], $dataSet['params']['hashSize']));
        }
    }
}
