<?php
// Online PHP compiler to run PHP program online
// Print "Hello World!" message

function spiral($mat)
{

    $rowOffset = 0;
    $colOffset = 0;
    $rowLimit = sizeof($mat) - 1;
    $colLimit = sizeof($mat[0]) - 1;

    $result = [];
    $len = ($rowLimit + 1) * ($colLimit + 1);
    for ($count = 0; $count < $len;) {

        for ($i = $colOffset; $i <= $colLimit; $i++) {
            $result[] = $mat[$rowOffset][$i];
            $count++;
        }
        $rowOffset++;
        for ($i = $rowOffset; $i <= $rowLimit; $i++) {
            $result[] = $mat[$i][$colLimit];
            $count++;
        }
        $colLimit--;
        for ($i = $colLimit; $i >= $colOffset; $i--) {
            $result[] = $mat[$rowLimit][$i];
            $count++;
        }

        $rowLimit--;
        for ($i = $rowLimit; $i >= $rowOffset; $i--) {
            $result[] = $mat[$i][$colOffset];
            $count++;
        }
        $colOffset++;
        // break;
    }
    return $result;
}

print_r(
    spiral(
        [
            [1, 2, 3, 4],
            [5, 6, 7, 8],
            [9, 10, 11, 12],
            [13, 14, 15, 16]
        ]
    )
);
