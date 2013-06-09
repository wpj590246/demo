<?php

/*
 * 对于不同格式的图片解析时用相应的imagecreatefrom{$type}  可是这跟生成的格式无关 即image{$type} 都行
 */

class ImageShortCut {
    const TEST='test';
    public static $r = 'dasd';
    private $filename;
    private $ext;
    private $x;
    private $y;
    private $dst_width;
    private $dst_height;
    private $width = 124;
    private $height = 124;
    private $jpeg_quality = 90;

    /**
     * 构造器 
     * 
     *  
     */
    public function __construct($w=124, $h=124) {
        $this->width = $w;
        $this->height = $h;
    }

    /**
     * 初始化截图对象 
     * @param filename 源文件路径全明 
     * @param width  截图的宽 
     * @param height  截图的高 
     * @param x  开始横坐标 
     * @param y  开始纵坐标 
     * @param dst_width  宽度
     * @param dst_height  长度
     *  
     */
    public function init($filename, $x, $y, $dst_width, $dst_height) {
        if (file_exists($filename)) {
            $this->filename = $filename;
            $pathinfo = pathinfo($filename);
            $this->ext = $pathinfo['extension'];
        } else {
            $e = new Exception('the file is not exists!', 1050);
            throw $e;
        }
        $this->x = $x;
        $this->y = $y;
        $this->dst_width = $dst_width;
        $this->dst_height = $dst_height;
    }

    /**
     * 生成截图 
     * 根据图片的格式，生成不同的截图 
     */
    public function generate_short() {

        switch ($this->ext) {
            case 'jpg':
                return $this->generate_jpg();
                break;
            case 'png':
                return $this->generate_png();
                break;
            case 'gif':
                return $this->generate_gif();
                break;
            default:
                return false;
        }
    }

    /**
     * 得到生成的截图的文件名 
     *  
     */
    private function get_short_name() {
        $pathinfo = pathinfo($this->filename);
        $fileinfo = explode('.', $pathinfo['basename']);
        $filename = $fileinfo[0] . '_small.' . $this->ext;
        return $pathinfo['dirname'] . '/' . $filename;
    }

    /**
     * 生成jpg格式的图片 
     *  
     */
    private function generate_jpg() {
        $short_name = $this->get_short_name();
        $img_r = imagecreatefromjpeg($this->filename);
        $dst_r = ImageCreateTrueColor($this->width, $this->height);
        $color = imagecolorallocate($dst_r
                , 255
                , 255
                , 255
        );

        imagecopyresampled($dst_r, $img_r, 0, 0, $this->x, $this->y, $this->width, $this->height, $this->dst_width, $this->dst_height);
        imagejpeg($dst_r, $short_name, $this->jpeg_quality);
        imagedestroy($dst_r);
        return $short_name;
    }

    /**
     * 生成gif格式的图片 
     *  
     */
    private function generate_gif() {
        $short_name = $this->get_short_name();
        $img_r = imagecreatefromgif($this->filename);
        $dst_r = ImageCreateTrueColor($this->width, $this->height);

        imagecopyresampled($dst_r, $img_r, 0, 0, $this->x, $this->y, $this->width, $this->height, $this->dst_width, $this->dst_height);
        imagegif($dst_r, $short_name);
        return $short_name;
    }

    /**
     * 生成png格式的图片 
     *  
     */
    private function generate_png() {
        echo 'png';
        $short_name = $this->get_short_name();
        $img_r = imagecreatefrompng($this->filename);
        $dst_r = ImageCreateTrueColor($this->width, $this->height);
        $color = imagecolorallocate($dst_r
                , 255
                , 255
                , 255
        );
        //imagefill($dst_r, 0, 0, $color);
        imagecopyresampled($dst_r, $img_r, 0, 0, $this->x, $this->y, $this->width, $this->height, $this->dst_width, $this->dst_height);
        imagepng($dst_r, $short_name);
        return $short_name;
    }

}

?>
