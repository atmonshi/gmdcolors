# GMDColors
[![Build Status](https://travis-ci.org/wa7eedem/GMDColors.svg?branch=master)](https://travis-ci.org/wa7eedem/GMDColors)
[![Code Climate](https://codeclimate.com/github/wa7eedem/GMDColors/badges/gpa.svg)](https://codeclimate.com/github/wa7eedem/GMDColors)

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

