<?php
$result = -1;

if ($result == 50) {
    echo "You Got $result, you have Passed";
} elseif ($result < 50 and $result >= 0) {
    echo "You Got $result, you have failed";
} elseif ($result > 60 && $result < 75) {
    echo "You Got $result, your Grade is Good";
} elseif ($result >= 75 && $result <= 85) {
    echo "You Got $result, your grade is very Good";
} elseif ($result >= 85 && $result <= 100) {
    echo "You Got $result, your Grade is Exellent";
} else {
    echo "Invalid Result";
}
