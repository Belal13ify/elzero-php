<?php
echo (int)(15.2 + 14.7 + (10.5 + 10.5)); // 50
echo '<br>';
echo gettype((int) (15.2 + 14.7 + (10.5 + 10.5))); // Integer
echo '<br>';
//
var_dump(100);
echo '<br>';
echo gettype(100);
echo '<br>';


echo "//Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
##########################
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo nl2br("We
Love
Elzero
Web
School");
####################################
echo '<br>';
echo '<br>';
echo '<br>';
echo  nl2br(<<<'Now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
Now);
echo '<br>';
echo '<br>';
echo '<br>';
######################################
$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
# Hello \PHP\ We Love Programming
echo '<br>';
echo '<br>';
echo '<br>';
########################################
echo (bool)"Hello PHP";
echo '<br>';
echo gettype((int)"Hello PHP");

// Needed Output
#1
#integer

echo '<br>';
echo '<br>';
echo '<br>';
##########################################
echo '<pre>';
print_r(
    [
        "FrontEnd" =>
        [
            "HTML",
            "CSS",
            "JS" => [
                "VueJs" => [
                    2 => "V2",
                    3 => "V3"
                ],
                0 => "ReactJs",
                1 => "Svelte"
            ]
        ],
        "BackEnd" =>
        [
            0 => "PHP",
            1 =>  "MySQL",
            2 => "Security"
        ],
        0 => "Git",
        1 => "GitHub",
        "Testing" => [
            0 => "Unit Testing",
            1 => "End To End",
            2 => "Integration"
        ]
    ]
);
echo '</pre>';
