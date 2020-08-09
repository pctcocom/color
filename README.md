## Install
```
composer require pctco/color dev-master
```

## Color table
|$key|note|
|:-|:-|
|china-tradition|中国传统色彩|
|japan-tradition|日本传统色彩|
|pick|配色导航|
|gradient|渐变色导航|

```
use Pctco\Color\Scheme;
$data = Scheme::ColorTable();
$data['data'][$key];
```

## Color conversion

```
use Pctco\Color\Conversion
Conversion::colorconv($input,$mode,$html);
```

|note|$input|$mode|$html|
|:-|:-|:-|:-|
|rgb to hsl|[128,255,255]|rgb2hsl|false|
|hsl to rgb|[180,100,75]|hsl2rgb|false|
|rgb to hex|[128,255,255]|rgb2hex|false|
|hex to rgb|#80ffff|hex2rgb|false|

## Picture picking
```
use Pctco\Color\Pick;
Pick::ImageMainColor('/strawberry.jpg');
```
