<?php

namespace Chewett\PhpCphulk;

class CPHulkTest extends \PHPUnit_Framework_TestCase {

    public function ip2CphulkFormatProvider() {
        return [
            ["192.168.0.1", hex2bin("00000000000000000000ffffC0A80001")],
            ["192.168.0.4", hex2bin("00000000000000000000ffffC0A80004")],
            ["0.0.0.0", hex2bin("00000000000000000000ffff00000000")],
            ["1.2.3.4", hex2bin("00000000000000000000ffff01020304")]
        ];
    }

    /** @dataProvider ip2CphulkFormatProvider */
    public function testIp2CphulkFormat($input, $expectedOutput) {
        $out = CPHulk::ip2CphulkFormat($input);
        $this->assertEquals($expectedOutput, $out);
    }

}