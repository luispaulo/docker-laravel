<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\StringService;

class StringServiceTest extends TestCase
{
    public function testRetornaStringsMaisLongas()
    {
        $service = new StringService();

        $inputArray = ['aba', 'aa', 'ad', 'vcd', 'aba'];
        $expectedResult = ['aba', 'vcd', 'aba'];

        $result = $service->todasStringsMaisLongas($inputArray);

        $this->assertEquals($expectedResult, $result);
    }

    public function testRetornaStringUnicaQuandoTodasTemMesmoTamanho()
    {
        $service = new StringService();

        $inputArray = ['aba', 'aax', 'adx', 'vcd', 'aba'];
        $expectedResult = ['aba', 'aax', 'adx', 'vcd', 'aba'];

        $result = $service->todasStringsMaisLongas($inputArray);

        $this->assertEquals($expectedResult, $result);
    }

    public function testRetornaArrayVazioSeArrayVazioForEnviado()
    {
        $service = new StringService();

        $inputArray = [];
        $expectedResult = [];

        $result = $service->todasStringsMaisLongas($inputArray);

        $this->assertEquals($expectedResult, $result);
    }
}
