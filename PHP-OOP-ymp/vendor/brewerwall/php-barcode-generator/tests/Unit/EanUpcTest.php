<?php

namespace Test\Unit;

use Brewerwall\Barcode\BarcodeGenerator;
use Brewerwall\Barcode\Constants\BarcodeRender;
use Brewerwall\Barcode\Constants\BarcodeType;
use Test\BaseTestCase;

class EanUpcTest extends BaseTestCase
{
    const VALID_CODE_EAN_8 = '96385074';
    const VALID_CODE_EAN_13 = '5901234123457';
    const VALID_CODE_UPC_A = '8123175';
    const VALID_CODE_UPC_E = '8123175';

    public function test_EanUpc8GeneratesJPGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_EAN_8, BarcodeRender::RENDER_JPG);
        $generated = $generator->generate(self::VALID_CODE_EAN_8);

        $this->assertContains('JPEG', $generated);
    }

    public function test_EanUpc8GeneratesPNGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_EAN_8, BarcodeRender::RENDER_PNG);
        $generated = $generator->generate(self::VALID_CODE_EAN_8);

        $this->assertEquals('PNG', substr($generated, 1, 3));
    }

    public function test_EanUpc8GeneratesHTMLStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_EAN_8, BarcodeRender::RENDER_HTML);
        $generated = $generator->generate(self::VALID_CODE_EAN_8);

        $this->assertContains('<div', $generated);
    }

    public function test_EanUpc8GeneratesSVGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_EAN_8, BarcodeRender::RENDER_SVG);
        $generated = $generator->generate(self::VALID_CODE_EAN_8);

        $this->assertContains('<svg', $generated);
    }

    public function test_EanUpc13GeneratesJPGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_EAN_13, BarcodeRender::RENDER_JPG);
        $generated = $generator->generate(self::VALID_CODE_EAN_13);

        $this->assertContains('JPEG', $generated);
    }

    public function test_EanUpc13GeneratesPNGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_EAN_13, BarcodeRender::RENDER_PNG);
        $generated = $generator->generate(self::VALID_CODE_EAN_13);

        $this->assertEquals('PNG', substr($generated, 1, 3));
    }

    public function test_EanUpc13GeneratesHTMLStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_EAN_13, BarcodeRender::RENDER_HTML);
        $generated = $generator->generate(self::VALID_CODE_EAN_13);

        $this->assertContains('<div', $generated);
    }

    public function test_EanUpc13GeneratesSVGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_EAN_13, BarcodeRender::RENDER_SVG);
        $generated = $generator->generate(self::VALID_CODE_EAN_13);

        $this->assertContains('<svg', $generated);
    }

    public function test_EanUpcAGeneratesJPGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_UPC_A, BarcodeRender::RENDER_JPG);
        $generated = $generator->generate(self::VALID_CODE_UPC_A);

        $this->assertContains('JPEG', $generated);
    }

    public function test_EanUpcAGeneratesPNGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_UPC_A, BarcodeRender::RENDER_PNG);
        $generated = $generator->generate(self::VALID_CODE_UPC_A);

        $this->assertEquals('PNG', substr($generated, 1, 3));
    }

    public function test_EanUpcAGeneratesHTMLStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_UPC_A, BarcodeRender::RENDER_HTML);
        $generated = $generator->generate(self::VALID_CODE_UPC_A);

        $this->assertContains('<div', $generated);
    }

    public function test_EanUpcAGeneratesSVGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_UPC_A, BarcodeRender::RENDER_SVG);
        $generated = $generator->generate(self::VALID_CODE_UPC_A);

        $this->assertContains('<svg', $generated);
    }

    public function test_EanUpcEGeneratesJPGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_UPC_E, BarcodeRender::RENDER_JPG);
        $generated = $generator->generate(self::VALID_CODE_UPC_E);

        $this->assertContains('JPEG', $generated);
    }

    public function test_EanUpcEGeneratesPNGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_UPC_E, BarcodeRender::RENDER_PNG);
        $generated = $generator->generate(self::VALID_CODE_UPC_E);

        $this->assertEquals('PNG', substr($generated, 1, 3));
    }

    public function test_EanUpcEGeneratesHTMLStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_UPC_E, BarcodeRender::RENDER_HTML);
        $generated = $generator->generate(self::VALID_CODE_UPC_E);

        $this->assertContains('<div', $generated);
    }

    public function test_EanUpcEGeneratesSVGStructure()
    {
        $generator = new BarcodeGenerator(BarcodeType::TYPE_UPC_E, BarcodeRender::RENDER_SVG);
        $generated = $generator->generate(self::VALID_CODE_UPC_E);

        $this->assertContains('<svg', $generated);
    }
}
