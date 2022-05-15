<?php

namespace Brewerwall\Barcode\Types;

use Brewerwall\Barcode\Constants\BarcodeType;
use Brewerwall\Barcode\Exceptions\UnknownTypeException;

class BarcodeTypeFactory
{
    /**
     * Generates a new Barcode Type.
     *
     * @param string $code
     * @param string $type
     *
     * @return BarcodeTypeInterface
     */
    public function generateBarcodeType(string $type): BarcodeTypeInterface
    {
        switch (strtoupper($type)) {
            case BarcodeType::TYPE_CODE_39:  // CODE 39 - ANSI MH10.8M-1983 - USD-3 - 3 of 9.
                return new Code39(false, false);
                break;

            case BarcodeType::TYPE_CODE_39_CHECKSUM:  // CODE 39 with checksum
                return new Code39(true, false);
                break;

            case BarcodeType::TYPE_CODE_39E:  // CODE 39 EXTENDED
                return new Code39(false, true);
                break;

            case BarcodeType::TYPE_CODE_39E_CHECKSUM:  // CODE 39 EXTENDED + CHECKSUM
                return new Code39(true, true);
                break;

            case BarcodeType::TYPE_CODE_93:  // CODE 93 - USS-93
                return new Code93();
                break;

            case BarcodeType::TYPE_STANDARD_2_5:  // Standard 2 of 5
                return new S25(false);
                break;

            case BarcodeType::TYPE_STANDARD_2_5_CHECKSUM:  // Standard 2 of 5 + CHECKSUM
                return new S25(true);
                break;

            case BarcodeType::TYPE_INTERLEAVED_2_5:  // Interleaved 2 of 5
                return new I25(false);
                break;

            case BarcodeType::TYPE_INTERLEAVED_2_5_CHECKSUM:  // Interleaved 2 of 5 + CHECKSUM
                return new I25(true);
                break;

            case BarcodeType::TYPE_CODE_128:  // CODE 128
                return new C128();
                break;

            case BarcodeType::TYPE_CODE_128_A:  // CODE 128 A
                return new C128('A');
                break;

            case BarcodeType::TYPE_CODE_128_B:  // CODE 128 B
                return new C128('B');
                break;

            case BarcodeType::TYPE_CODE_128_C:  // CODE 128 C
                return new C128('C');
                break;

            case BarcodeType::TYPE_EAN_2:  // 2-Digits UPC-Based Extention
                return new EanExt(2);
                break;

            case BarcodeType::TYPE_EAN_5:  // 5-Digits UPC-Based Extention
                return new EanExt(5);
                break;

            case BarcodeType::TYPE_EAN_8:  // EAN 8
                return new EanUpc(8);
                break;

            case BarcodeType::TYPE_EAN_13:  // EAN 13
                return new EanUpc(13);
                break;

            case BarcodeType::TYPE_UPC_A:  // UPC-A
                return new EanUpc(12);
                break;

            case BarcodeType::TYPE_UPC_E:  // UPC-E
                return new EanUpc(6);
                break;

            case BarcodeType::TYPE_MSI:  // MSI (Variation of Plessey code)
                return new MSI();
                break;

            case BarcodeType::TYPE_MSI_CHECKSUM:  // MSI + CHECKSUM (modulo 11)
                return new MSI(true);
                break;

            case BarcodeType::TYPE_POSTNET:  // POSTNET
                return new PostnetPlanet();
                break;

            case BarcodeType::TYPE_PLANET:  // PLANET
                return new PostnetPlanet(true);
                break;

            case BarcodeType::TYPE_RMS4CC:  // RMS4CC (Royal Mail 4-state Customer Code) - CBC (Customer Bar Code)
                return new RMS4CC();
                break;

            case BarcodeType::TYPE_KIX:  // KIX (Klant index - Customer index)
                return new RMS4CC(true);
                break;

            case BarcodeType::TYPE_IMB:  // IMB - Intelligent Mail Barcode - Onecode - USPS-B-3200
                return new IMB();
                break;

            case BarcodeType::TYPE_CODABAR:  // CODABAR
                return new Codabar();
                break;

            case BarcodeType::TYPE_CODE_11:  // CODE 11
                return new Code11();
                break;

            case BarcodeType::TYPE_PHARMA_CODE:  // PHARMACODE
                return new PharmaCode();
                break;

            case BarcodeType::TYPE_PHARMA_CODE_TWO_TRACKS:  // PHARMACODE TWO-TRACKS
                return new PharmaCodeTwoTracks();
                break;

            default:
                throw new UnknownTypeException();
                break;
        }
    }
}
