<?php namespace wa7eedem\gmdcolors;

/**
 *  get hex colors for Google Material Design in php
 *
 *  A Simple function to return Hex Color Code base on google material design colors
 *  thanks to https://github.com/danlevan/google-material-color
 *
 * to see all colors : https://material.google.com/style/color.html#color-color-palette .
 *
 * example : for more : http://evojira.uqu.edu.sa:8090/display/EVOWB/google+material+design+colors+Helper todo
 * @author atmonshi
 */
class getcolors
{

    /**
     * get a hex color
     *
     * @param string $color the color name , just replace any spaces with _ as : Deep Purple => Deep_Purple
     * @param string $accent the accent of the color you want like 900 or A700 . default is 500
     *
     * @return string
     */
    public function hex($color, $accent = 500)
    {
        $palette = $this->_palette($color);
        if (isset($palette) && isset($palette[ $accent ])) {
            $return = $palette[ $accent ];
        } else {
            $return = '#000';
        }

        return $return;
    }


    /**
     * get an array of randomly select unique colors
     *
     * @param $count integer the count of returned items
     *
     * @return array of hex colors
     */
    public function rand($count)
    {
        $palette = $this->_palette();
        // Remove the Black and White , its ugly !!
        unset($palette['White']);
        unset($palette['Black']);

        // Clone the Colors array Keys
        $newGoogleMaterialColors = array_keys($palette);

        // if only One color
        if ($count == 1) {
            $newColor = array_rand($newGoogleMaterialColors, 1);
            $return   = $palette[ $newGoogleMaterialColors[ $newColor ] ][500];
        } else {
            $newReturn = [];
            for ($i = 1; $i <= $count; $i++) {
                // get a random Color
                $newColor = array_rand($newGoogleMaterialColors, 1);
                // send it to return
                $newReturn[] = $palette[ $newGoogleMaterialColors[ $newColor ] ][300];
                // then remove the picked Color from the Cloned array
                unset($newGoogleMaterialColors[ $newColor ]);
                // if the Colors about to be empty ... then repopulate it
                if (count($newGoogleMaterialColors) < 2) {
                    $newGoogleMaterialColors = array_keys($palette);
                }
            }
            $return = $newReturn;
        }

        return $return;
    }

    /**
     * return the color with it's accent
     * @param string $name the color name
     * @return array the color hex with it's accent
     */
    private function _palette($name = null)
    {
        $GoogleMaterialColors = [
            'Red'         => [
                '50'   => '#FFEBEE',
                '100'  => '#FFCDD2',
                '200'  => '#EF9A9A',
                '300'  => '#E57373',
                '400'  => '#EF5350',
                '500'  => '#F44336',
                '600'  => '#E53935',
                '700'  => '#D32F2F',
                '800'  => '#C62828',
                '900'  => '#B71C1C',
                'A100' => '#FF8A80',
                'A200' => '#FF5252',
                'A400' => '#FF1744',
                'A700' => '#D50000',
            ],
            'Pink'        => [
                '50'   => '#FCE4EC',
                '100'  => '#F8BBD0',
                '200'  => '#F48FB1',
                '300'  => '#F06292',
                '400'  => '#EC407A',
                '500'  => '#E91E63',
                '600'  => '#D81B60',
                '700'  => '#C2185B',
                '800'  => '#AD1457',
                '900'  => '#880E4F',
                'A100' => '#FF80AB',
                'A200' => '#FF4081',
                'A400' => '#F50057',
                'A700' => '#C51162',
            ],
            'Purple'      => [
                '50'   => '#F3E5F5',
                '100'  => '#E1BEE7',
                '200'  => '#CE93D8',
                '300'  => '#BA68C8',
                '400'  => '#AB47BC',
                '500'  => '#9C27B0',
                '600'  => '#8E24AA',
                '700'  => '#7B1FA2',
                '800'  => '#6A1B9A',
                '900'  => '#4A148C',
                'A100' => '#EA80FC',
                'A200' => '#E040FB',
                'A400' => '#D500F9',
                'A700' => '#AA00FF',
            ],
            'Deep_Purple' => [
                '50'   => '#EDE7F6',
                '100'  => '#D1C4E9',
                '200'  => '#B39DDB',
                '300'  => '#9575CD',
                '400'  => '#7E57C2',
                '500'  => '#673AB7',
                '600'  => '#5E35B1',
                '700'  => '#512DA8',
                '800'  => '#4527A0',
                '900'  => '#311B92',
                'A100' => '#B388FF',
                'A200' => '#7C4DFF',
                'A400' => '#651FFF',
                'A700' => '#6200EA',
            ],
            'Indigo'      => [
                '50'   => '#E8EAF6',
                '100'  => '#C5CAE9',
                '200'  => '#9FA8DA',
                '300'  => '#7986CB',
                '400'  => '#5C6BC0',
                '500'  => '#3F51B5',
                '600'  => '#3949AB',
                '700'  => '#303F9F',
                '800'  => '#283593',
                '900'  => '#1A237E',
                'A100' => '#8C9EFF',
                'A200' => '#536DFE',
                'A400' => '#3D5AFE',
                'A700' => '#304FFE',
            ],
            'Blue'        => [
                '50'   => '#E3F2FD',
                '100'  => '#BBDEFB',
                '200'  => '#90CAF9',
                '300'  => '#64B5F6',
                '400'  => '#42A5F5',
                '500'  => '#2196F3',
                '600'  => '#1E88E5',
                '700'  => '#1976D2',
                '800'  => '#1565C0',
                '900'  => '#0D47A1',
                'A100' => '#82B1FF',
                'A200' => '#448AFF',
                'A400' => '#2979FF',
                'A700' => '#2962FF',
            ],
            'Light_Blue'  => [
                '50'   => '#E1F5FE',
                '100'  => '#B3E5FC',
                '200'  => '#81D4FA',
                '300'  => '#4FC3F7',
                '400'  => '#29B6F6',
                '500'  => '#03A9F4',
                '600'  => '#039BE5',
                '700'  => '#0288D1',
                '800'  => '#0277BD',
                '900'  => '#01579B',
                'A100' => '#80D8FF',
                'A200' => '#40C4FF',
                'A400' => '#00B0FF',
                'A700' => '#0091EA',
            ],
            'Cyan'        => [
                '50'   => '#E0F7FA',
                '100'  => '#B2EBF2',
                '200'  => '#80DEEA',
                '300'  => '#4DD0E1',
                '400'  => '#26C6DA',
                '500'  => '#00BCD4',
                '600'  => '#00ACC1',
                '700'  => '#0097A7',
                '800'  => '#00838F',
                '900'  => '#006064',
                'A100' => '#84FFFF',
                'A200' => '#18FFFF',
                'A400' => '#00E5FF',
                'A700' => '#00B8D4',
            ],
            'Teal'        => [
                '50'   => '#E0F2F1',
                '100'  => '#B2DFDB',
                '200'  => '#80CBC4',
                '300'  => '#4DB6AC',
                '400'  => '#26A69A',
                '500'  => '#009688',
                '600'  => '#00897B',
                '700'  => '#00796B',
                '800'  => '#00695C',
                '900'  => '#004D40',
                'A100' => '#A7FFEB',
                'A200' => '#64FFDA',
                'A400' => '#1DE9B6',
                'A700' => '#00BFA5',
            ],
            'Green'       => [
                '50'   => '#E8F5E9',
                '100'  => '#C8E6C9',
                '200'  => '#A5D6A7',
                '300'  => '#81C784',
                '400'  => '#66BB6A',
                '500'  => '#4CAF50',
                '600'  => '#43A047',
                '700'  => '#388E3C',
                '800'  => '#2E7D32',
                '900'  => '#1B5E20',
                'A100' => '#B9F6CA',
                'A200' => '#69F0AE',
                'A400' => '#00E676',
                'A700' => '#00C853',
            ],
            'Light_Green' => [
                '50'   => '#F1F8E9',
                '100'  => '#DCEDC8',
                '200'  => '#C5E1A5',
                '300'  => '#AED581',
                '400'  => '#9CCC65',
                '500'  => '#8BC34A',
                '600'  => '#7CB342',
                '700'  => '#689F38',
                '800'  => '#558B2F',
                '900'  => '#33691E',
                'A100' => '#CCFF90',
                'A200' => '#B2FF59',
                'A400' => '#76FF03',
                'A700' => '#64DD17',
            ],
            'Lime'        => [
                '50'   => '#F9FBE7',
                '100'  => '#F0F4C3',
                '200'  => '#E6EE9C',
                '300'  => '#DCE775',
                '400'  => '#D4E157',
                '500'  => '#CDDC39',
                '600'  => '#C0CA33',
                '700'  => '#AFB42B',
                '800'  => '#9E9D24',
                '900'  => '#827717',
                'A100' => '#F4FF81',
                'A200' => '#EEFF41',
                'A400' => '#C6FF00',
                'A700' => '#AEEA00',
            ],
            'Yellow'      => [
                '50'   => '#FFFDE7',
                '100'  => '#FFF9C4',
                '200'  => '#FFF59D',
                '300'  => '#FFF176',
                '400'  => '#FFEE58',
                '500'  => '#FFEB3B',
                '600'  => '#FDD835',
                '700'  => '#FBC02D',
                '800'  => '#F9A825',
                '900'  => '#F57F17',
                'A100' => '#FFFF8D',
                'A200' => '#FFFF00',
                'A400' => '#FFEA00',
                'A700' => '#FFD600',
            ],
            'Amber'       => [
                '50'   => '#FFF8E1',
                '100'  => '#FFECB3',
                '200'  => '#FFE082',
                '300'  => '#FFD54F',
                '400'  => '#FFCA28',
                '500'  => '#FFC107',
                '600'  => '#FFB300',
                '700'  => '#FFA000',
                '800'  => '#FF8F00',
                '900'  => '#FF6F00',
                'A100' => '#FFE57F',
                'A200' => '#FFD740',
                'A400' => '#FFC400',
                'A700' => '#FFAB00',
            ],
            'Orange'      => [
                '50'   => '#FFF3E0',
                '100'  => '#FFE0B2',
                '200'  => '#FFCC80',
                '300'  => '#FFB74D',
                '400'  => '#FFA726',
                '500'  => '#FF9800',
                '600'  => '#FB8C00',
                '700'  => '#F57C00',
                '800'  => '#EF6C00',
                '900'  => '#E65100',
                'A100' => '#FFD180',
                'A200' => '#FFAB40',
                'A400' => '#FF9100',
                'A700' => '#FF6D00',
            ],
            'Deep_Orange' => [
                '50'   => '#FBE9E7',
                '100'  => '#FFCCBC',
                '200'  => '#FFAB91',
                '300'  => '#FF8A65',
                '400'  => '#FF7043',
                '500'  => '#FF5722',
                '600'  => '#F4511E',
                '700'  => '#E64A19',
                '800'  => '#D84315',
                '900'  => '#BF360C',
                'A100' => '#FF9E80',
                'A200' => '#FF6E40',
                'A400' => '#FF3D00',
                'A700' => '#DD2C00',
            ],
            'Brown'       => [
                '50'  => '#EFEBE9',
                '100' => '#D7CCC8',
                '200' => '#BCAAA4',
                '300' => '#A1887F',
                '400' => '#8D6E63',
                '500' => '#795548',
                '600' => '#6D4C41',
                '700' => '#5D4037',
                '800' => '#4E342E',
                '900' => '#3E2723',
            ],
            'Grey'        => [
                '50'  => '#FAFAFA',
                '100' => '#F5F5F5',
                '200' => '#EEEEEE',
                '300' => '#E0E0E0',
                '400' => '#BDBDBD',
                '500' => '#9E9E9E',
                '600' => '#757575',
                '700' => '#616161',
                '800' => '#424242',
                '900' => '#212121',
            ],
            'Blue_Grey'   => [
                '50'  => '#ECEFF1',
                '100' => '#CFD8DC',
                '200' => '#B0BEC5',
                '300' => '#90A4AE',
                '400' => '#78909C',
                '500' => '#607D8B',
                '600' => '#546E7A',
                '700' => '#455A64',
                '800' => '#37474F',
                '900' => '#263238',
            ],
            'Black'       => [
                '500'            => '#000000',
                'Text'           => 'rgba(0,0,0,0.87)',
                'Secondary_Text' => 'rgba(0,0,0,0.54)',
                'Icons'          => 'rgba(0,0,0,0.54)',
                'Disabled'       => 'rgba(0,0,0,0.26)',
                'Hint_Text'      => 'rgba(0,0,0,0.26)',
                'Dividers'       => 'rgba(0,0,0,0.12)',
            ],
            'White'       => [
                '500'            => '#ffffff',
                'Text'           => '#ffffff',
                'Secondary_Text' => 'rgba(255,255,255,0.7)',
                'Icons'          => '#ffffff',
                'Disabled'       => 'rgba(255,255,255,0.3)',
                'Hint_Text'      => 'rgba(255,255,255,0.3)',
                'Dividers'       => 'rgba(255,255,255,0.12)',
            ],
        ];

        if (is_null($name)) {
            return $GoogleMaterialColors;
        } else {
            return $GoogleMaterialColors[ $name ];
        }

    }
}