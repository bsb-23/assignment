<?php

function findPairWithSum($nums, $target) {
    $numMap = [];

    foreach ($nums as $num) {
        $complement = $target - $num;

        if (isset($numMap[$complement])) {
            echo "Pair found ($num, $complement)\n";
            return;
        }

        $numMap[$num] = true;
    }

    echo "Pair not found.\n";
}

$nums1 = [8, 7, 2, 5, 3, 1];
$target1 = 10;
findPairWithSum($nums1, $target1);

$nums2 = [5, 2, 6, 8, 1, 9];
$target2 = 12;
findPairWithSum($nums2, $target2);

?>
