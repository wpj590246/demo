<?php

define('CAPTCHA_SESSION_ID', 'captcha');

class Captcha {

    private $aFonts;
    private $iWidth;
    private $iHeight;
    private $bUseColour;
    private $iNumLines;
    private $iNumChars;
    private $sCode;
    private $aCharSet;
    private $iMinFontSize = 16;
    private $iMaxFontSize = 25;
    private $bCaseInsensitive;
    private $sFileType = 'jpeg';
    private $oImage;
    private $boundary = 10;
    private $chinese = false;

    function __construct($iWidth=100, $iHeight=50) {
        $b = dirname(dirname(__FILE__)) . '/fonts';

        $this->aFonts = array(
            "$b/W5.ttc",
            "$b/W5.ttc",
            "$b/W5.ttc",
            "$b/W5.ttc",
        );
        $this->SetNumLines(75);
        $this->SetNumChars(4);
        $this->SetWidth($iWidth);
        $this->SetHeight($iHeight);
    }

    function SetWidth($iWidth) {
        $this->iWidth = $iWidth;
        if ($this->iWidth > 500)
            $this->iWidth = 500; // to prevent perfomance impact
        $this->CalculateSpacing();
    }

    function SetHeight($iHeight) {
        $this->iHeight = $iHeight;
        if ($this->iHeight > 200)
            $this->iHeight = 200; // to prevent performance impact
    }

    function CalculateSpacing() {
        $this->iSpacing = (int) ($this->iWidth / $this->iNumChars );
    }

    function UseChinese() {
        $this->chinese = TRUE;
        $this->aCharSet = array('就', '是', '这', '些', '东', '西', '换', '不', '合', '好', '吧', '那', '么');
    }

    function SetNumLines($iNumLines) {
        $this->iNumLines = $iNumLines;
    }

    function DrawLines() {
        for ($i = 0; $i < $this->iNumLines; $i++) {
            // allocate colour
            if ($this->bUseColour) {
                $iLineColour = imagecolorallocate($this->oImage, rand(100, 250), rand(100, 250), rand(100, 250));
            } else {
                $iRandColour = rand(100, 250);
                $iLineColour = imagecolorallocate($this->oImage, $iRandColour, $iRandColour, $iRandColour);
            }

            // draw line
            imageline($this->oImage, rand(0, $this->iWidth), rand(0, $this->iHeight), rand(0, $this->iWidth), rand(0, $this->iHeight), $iLineColour);
        }
    }

    function SetNumChars($iNumChars) {
        $this->iNumChars = $iNumChars;
        $this->CalculateSpacing();
    }

    function UseColour($bUseColour) {
        $this->bUseColour = $bUseColour;
    }

    function SetFileType($sFileType = 'jpeg') {
        // check for valid file type
        if (in_array($sFileType, array('gif', 'png', 'jpeg'))) {
            $this->sFileType = $sFileType;
        } else {
            $this->sFileType = 'jpeg';
        }
    }

    function GenerateCode() {
        // reset code
        $this->sCode = '';

        // loop through and generate the code letter by letter
        for ($i = 0; $i < $this->iNumChars; $i++) {
            if (count($this->aCharSet) > 0) {
                // select random character and add to code string
                $this->sCode .= $this->aCharSet[array_rand($this->aCharSet)];
            } else {
                // select random character and add to code string
                $this->sCode .= chr(rand(65, 90));
            }
        }

        // save code in session variable
        if ($this->bCaseInsensitive) {
            $_SESSION[CAPTCHA_SESSION_ID] = strtoupper($this->sCode);
        } else {
            $_SESSION[CAPTCHA_SESSION_ID] = $this->sCode;
        }
    }

    function DrawCharacters() {
        // loop through and write out selected number of characters
//        $log = new LOG();
//        $log->err(strlen($this->sCode));
        for ($i = 0; $i < $this->iNumChars; $i++) {
            // select random font
            $sCurrentFont = $this->aFonts[array_rand($this->aFonts)];

            // select random colour
            if ($this->bUseColour) {
                $iTextColour = imagecolorallocate($this->oImage, rand(0, 100), rand(0, 100), rand(0, 100));
            } else {
                $iRandColour = rand(0, 100);
                $iTextColour = imagecolorallocate($this->oImage, $iRandColour, $iRandColour, $iRandColour);
            }

            // select random font size
            $iFontSize = rand($this->iMinFontSize, $this->iMaxFontSize);

            // select random angle
            $iAngle = rand(-30, 30);
            if ($this->chinese) {
                $code = $this->sCode[$i * 3] . $this->sCode[$i * 3 + 1] . $this->sCode[$i * 3 + 2];
            } else
                $code = $this->sCode[$i];


            // get dimensions of character in selected font and text size
            $aCharDetails = imageftbbox($iFontSize, $iAngle, $sCurrentFont, $code, array());

            // calculate character starting cochrinates
            $iX = $this->iSpacing / 8 + $i * $this->iSpacing;
            $iCharHeight = $aCharDetails[2] - $aCharDetails[5];
            $iY = $this->iHeight / 2 + $iCharHeight / 4;

            // write text to image
            imagefttext($this->oImage, $iFontSize, $iAngle, $iX, $iY, $iTextColour, $sCurrentFont, $code, array());
        }
    }

    function WriteFile($sFilename) {
        if ($sFilename == '') {
            // tell browser that data is jpeg
            header("Content-type: image/$this->sFileType");
        }

        switch ($this->sFileType) {
            case 'gif':
                $sFilename != '' ? imagegif($this->oImage, $sFilename) : imagegif($this->oImage);
                break;
            case 'png':
                $sFilename != '' ? imagepng($this->oImage, $sFilename) : imagepng($this->oImage);
                break;
            default:
                $sFilename != '' ? imagejpeg($this->oImage, $sFilename) : imagejpeg($this->oImage);
        }
    }

    function Create($sFilename = '') {

        // create new image
        $this->oImage = imagecreate($this->iWidth, $this->iHeight);


        // allocate white background colour
        imagecolorallocate($this->oImage, 255, 255, 255);

        $this->DrawLines();

        $this->GenerateCode();

        $this->DrawCharacters();
        // write out image to file or browser
        $this->WriteFile($sFilename);

        // free memory used in creating image
        imagedestroy($this->oImage);
        
        return true;
    }

    static function Validate($sUserCode, $bCaseInsensitive = false) {
        if ($bCaseInsensitive) {
            $sUserCode = strtoupper($sUserCode);
        }
        if (!empty($_SESSION[CAPTCHA_SESSION_ID]) && $sUserCode == $_SESSION[CAPTCHA_SESSION_ID]) {
            // clear to prevent re-use
            unset($_SESSION[CAPTCHA_SESSION_ID]);
            
            return 'true';
        }

        return 'false';
    }

}

?>
