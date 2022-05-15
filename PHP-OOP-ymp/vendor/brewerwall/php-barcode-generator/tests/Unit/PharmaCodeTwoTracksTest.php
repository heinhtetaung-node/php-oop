<?php

namespace Test\Unit;

use Brewerwall\Barcode\BarcodeGenerator;
use Brewerwall\Barcode\Constants\BarcodeRender;
use Brewerwall\Barcode\Constants\BarcodeType;
use Test\BaseTestCase;

class PharmaCodeTwoTracksTest extends BaseTestCase
{
    const VALID_CODE = '081231723897';

    public function test_PharmaCodeTwoTracksGeneratesJPGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_PHARMA_CODE_TWO_TRACKS, BarcodeRender::RENDER_JPG);
        $generated = $generator->generate(self::VALID_CODE);

        $this->assertContains('JPEG', $generated);
    }

    public function test_PharmaCodeTwoTracksGeneratesPNGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_PHARMA_CODE_TWO_TRACKS, BarcodeRender::RENDER_PNG);
        $generated = $generator->generate(self::VALID_CODE);

        $this->assertEquals('PNG', substr($generated, 1, 3));
    }

    public function test_PharmaCodeTwoTracksGeneratesHTMLStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_PHARMA_CODE_TWO_TRACKS, BarcodeRender::RENDER_HTML);
        $generated = $generator->generate(self::VALID_CODE);

        $this->assertContains('<div', $generated);
    }

    public function test_PharmaCodeTwoTracksGeneratesSVGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_PHARMA_CODE_TWO_TRACKS, BarcodeRender::RENDER_SVG);
        $generated = $generator->generate(self::VALID_CODE);

        $this->assertContains('<svg', $generated);
    }
}
