<?php

    $teks = '';
    $jumlah = 6;
    $teks .= '<table border = 1 >';
        for ($i = 0; $i < 6; $i++) {
            $teks .= '<tr>';
                for ($j = 0; $j < 6; $j++) {
                    $warna = '';
                        if (($i % 2 == 0 && $j % 2 == 0) || ($i % 2 == 1 && $j % 2 == 1)) {
                            $warna = 'lightblue';
                        }
                        else $warna = 'salmon';
                            $teks .= '<td width=30 height=30 bgcolor='.$warna. '></td>';
                }
            $teks .= '</tr>';
        }
    $teks .='</table>';
    echo $teks;

?>