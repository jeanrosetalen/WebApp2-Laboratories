<?php

// LABORATORY #02 TASKS

// 1.) Variables
$name = 'Jean Rose Talen';
$age = 19;
$address = 'Libmanan, Camarines Sur';
$hobbies = ['watching dramas', 'eating sweets', 'sleeping', 'daydreaming'];
$pet_peeve = 'someone who thinks highly of themself';

    echo "<pre>";
    echo "TASK 1. Variables";
    echo "</pre>";

    echo "<pre>";
    echo $name;
    echo "</pre>";

    echo "<pre>";
    echo $age;
    echo "</pre>";

    echo "<pre>";
    echo $address;
    echo "</pre>";

    echo "<pre>";
    echo $hobbies;
    echo "</pre>";

    echo "<pre>";
    echo $pet_peeve;
    echo "</pre>";


// 2.) Single-line comment

    echo "<pre>";
    echo "TASK 2. Single-line comment";
    echo "</pre>";

// $hobbies = ['watching dramas', 'eating sweets', 'sleeping', 'daydreaming'];
#  $pet_peeve = 'someone who thinks highly of themself';

// 3.) Constants
    echo "<pre>";
    echo "TASK 3. CONSTANT";
    echo "</pre>";

define('NAME', 'Jean Rose talen');
    echo "<pre>";
    echo NAME;
    echo "</pre>";

define('AGE', 19);
    echo "<pre>";
    echo AGE;
    echo "</pre>";

define('ADDRESS', 'Libmanan, Camarines Sur');
    echo "<pre>";
    echo ADDRESS;
    echo "</pre>";

define('HOBBIES', ['watching dramas', 'eating sweets', 'sleeping', 'daydreaming']);
    echo "<pre>";
    echo HOBBIES;
    echo "</pre>";

define('PET_PEEVE', 'someone who thinks highly of themself');
    echo "<pre>";
    echo PET_PEEVE;
    echo "</pre>";

// 4. var_dump

    echo "<pre>";
    echo "TASK 4. VAR_DUMP";
    echo "</pre>";

    function toPrint($data) {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }
    
    toPrint("Hi my name is " . NAME);
    toPrint("And I'm currently ". AGE . " years old.");
    toPrint("I was born and raised in ". ADDRESS . ", a proud Bicolana.");
    echo "<pre>";
    echo "Hobbies are: ";
    echo "</pre>";
    toPrint(HOBBIES);
    toPrint("And its not like I really hate ". PET_PEEVE . ". I just don't like them ><");

// TASK 5. Multi-line comment
    echo "<pre>";
    echo "TASK 5. Multi-line comment";
    echo "</pre>";

    /* 
    "Someone who thinks highly of themself"
        Its not that I would really hate the person who's like that. I just don't like it, when someone 
        is being like that I can't stand it. Specially when you know the truth about them. Like there's 
        no point in bragging about yourself just to make you look superior from others. I just think that
        its not appropriate and it will not bring you any good, when they found out about your true self. 
        
        Let's just stay humble. Wala ka dapat patunayan sa mga tao, wala silang maisisisi sayo dahil hindi
        mo pinangunahan ang kakayahan mo.  It might come a time where you don't have to brag, 
        bacause people will come to you and praise you.

    */

    echo "<pre>";
    echo "<****************T*H*E*****E*N*D************************>";
    echo "</pre>";


