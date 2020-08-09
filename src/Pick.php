<?php
namespace Pctco\Color;
/**
 * 取色
 */
class Pick{
   /**
   * @name Image Main Color
   * @describe 取图片主要颜色值(rgb)
   * @param mixed $image
   * @return Array
   **/
   public static function ImageMainColor($image){
      $i=imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'].$image);//图片路径
      for ($x=0;$x<imagesx($i);$x++) {
         if ($x == 0) {
            for ($y=0;$y<imagesy($i);$y++) {
               if ($y == 0) {
                  $rgb = imagecolorat($i,$x,$y);
                  $r = ($rgb>>16) & 0xFF;
                  $g = ($rgb>>8) & 0xFF;
                  $b = $rgb & 0xFF;
                  return [$r,$g,$b];
               }
            }
            return false;
         }
      }
   }
}
