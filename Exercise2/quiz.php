<?php //access the global array called $_POST to get the values from the text fields
    //user answers from html
    $a1 = $_POST['q1'];
    $a2 = $_POST['q2'];
    $a3 = $_POST['q3'];
    $a4 = $_POST['q4'];
    $a5 = $_POST['q5'];

    $totalCorrect = 0;
    $possibleCorrect = 5;
    //determines if the user got a question correct, if they do a point is added
    if($a1 == "B") {$totalCorrect++;}
    if($a2 == "D") {$totalCorrect++;}
    if($a3 == "A") {$totalCorrect++;}
    if($a4 == "D") {$totalCorrect++;}
    if($a5 == "D") {$totalCorrect++;}

    //correct answers for easier use in displaying results
    $correct1 = "pamplemousse";
    $correct2 = "achètrais";
    $correct3 = "Passé simple";
    $correct4 = "immédiat";
    $correct5 = "19";

    //depending on what the user answered, $userAns is assigned that option for each question
    $userAns1 = " ";
    if($a1 == "A"){ $userAns1 = "fruit de grape";
    }elseif ($a1 == "B") {$userAns1 = "pamplemousse";
    }elseif($a1 == "C"){$userAns1 = "frambroise";
    }elseif ($a1 == "D") {$userAns1 = "raisin"; }

    $userAns2 = " ";
    if($a2 == "A"){$userAns2 = "achtèrai" ;
    }elseif($a2 == "B") {$userAns2 = "achèteriez";
    }elseif($a2 == "C"){$userAns2 = "achetons";
    }elseif ($a2 == "D") {$userAns2 = "achètrais"; }

    $userAns3 = " ";
    if($a3 == "A"){ $userAns3 = "Passé simple";
    }elseif ($a3 == "B") {$userAns3 = "Imparfait";
    }elseif($a3 == "C"){$userAns3 = "Présent de l'indicatif";
    }elseif ($a3 == "D") {$userAns3 = "Conditionnel"; }

    $userAns4 = " ";
    if($a4 == "A"){ $userAns4 = "grandeur";
    }elseif ($a4 == "B") {$userAns4 = "sain";
    }elseif($a4 == "C"){$userAns4 = "leçon";
    }elseif ($a4 == "D") {$userAns4 = "immédiat"; }

    $userAns5 = " ";
    if($a5 == "A"){ $userAns5 = "21";
    }elseif ($a5 == "B") {$userAns5 = "Ha, got eem";
    }elseif($a5 == "C"){$userAns5 = "yeet";
    }elseif ($a5 == "D") {$userAns5 = "19"; }

    //displays total correct along with %
    echo "<div id='results'>$totalCorrect / 5 correct   " . $totalCorrect / $possibleCorrect * 100 . "%<br></div>";

    echo "<br><div id='q1'>Question 1: How do you say \"grapefruit\" in French? <br>
        You answered: " . $userAns1 . "<br>
        Correct answer: " . $correct1 .
    "<br></div>";

    echo "<br><div id='q2'>Question 2: What is the correct conditional tense conjugation for \"acheter\" in the first person? <br>
        You answered: " . $userAns2 . "<br>
        Correct answer: " . $correct2 .
    "<br></div>";

    echo "<br><div id='q3'>Question 3: Which of these is a verb tense that is more often written than spoken nowadays? <br>
        You answered: " . $userAns3 . "<br>
        Correct answer: " . $correct3 .
    "<br></div>";

    echo "<br><div id='q4'>Question 4: Which word does not contain a nasal vowel? <br>
        You answered: " . $userAns4 . "<br>
        Correct answer: " . $correct4 .
    "<br></div>";

    echo "<br><div id='q5'>Question 5: What's 9 plus 10? <br>
        You answered: " . $userAns5 . "<br>
        Correct answer: " . $correct5 .
    "<br></div>";

?>
