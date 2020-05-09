# GMDColors
[![Build Status](https://travis-ci.org/atmonshi/gmdcolors.svg?branch=master)](https://travis-ci.org/atmonshi/gmdcolors)
[![Maintainability](https://api.codeclimate.com/v1/badges/978225dc787a7f6d1645/maintainability)](https://codeclimate.com/github/atmonshi/gmdcolors/maintainability)
[![Latest Stable Version](https://poser.pugx.org/atmonshi/gmdcolors/v/stable?format=flat)](https://packagist.org/packages/atmonshi/gmdcolors)
[![Total Downloads](https://poser.pugx.org/atmonshi/gmdcolors/downloads?format=flat)](https://packagist.org/packages/atmonshi/gmdcolors)
[![License](https://poser.pugx.org/atmonshi/gmdcolors/license?format=flat)](https://packagist.org/packages/atmonshi/gmdcolors)


#### get Google Material Design hex colors for php
see the Color palette in [google material](https://material.io/guidelines/style/color.html#color-color-tool)
## Usage :
### get a single color :

```
$getC = new getcolors;
$hex   = $getC->hex('Blue','100');
// return : string '#BBDEFB'
```

### get a a random colors :


```
$getC = new getcolors;
$rand = $getC->rand(3);

/*return : array (size=3)
0 => string '#BA68C8' (length=7)
1 => string '#FFF176' (length=7)
2 => string '#64B5F6' (length=7)
*/
```

