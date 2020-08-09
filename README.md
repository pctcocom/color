## Install
```
composer require pctco/color dev-master
```

## Color table
1. china-tradition - 中国传统色彩
2. japan-tradition - 日本传统色彩
3. pick - 配色导航
4. gradient - 渐变色导航

```
use Pctco\Color\Scheme;
$data = Scheme::ColorTable();
$data['data']['china-tradition'];
```

## Color conversion
- RGB TO CMYK
- RGB TO HEX

- CMYK TO RGB
- CMYK TO HEX

- HEX TO RGB
- HEX TO CMYK


## Picture picking
```
use Pctco\Color\Pick;
Pick::ImageMainColor('/strawberry.jpg');
```
