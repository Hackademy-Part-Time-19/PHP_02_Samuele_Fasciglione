<?php


$Integer = 3;
$Float = 4.5;
$String = 'ciao';
$Boolean = true;



$text_1 = "Marco"; 
$text2 = "hai"; 
$text_3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè"; 
$text6 = '$text2'; 
$text = 'bevuto'; 
$text8 = "tutto";



/*echo $text_1 ." ". $text2 ." ". $text_3 ." ". $text4 ." ". $text5 ." ". $text2 ." ". $text ." ". $text8 ;*/







$words1 = [ 
    'una', 
    'di', 
    'vita', 
    'colle',
    'mi', 
    'rosso', 
    [ 
      'oscura', 
      'era', 
      89, 
      [ 
        'mezzo',
        [ 
          'cammin', 
          'Nel', 
          [ 
            'selva', 
            'la', 
            [ 
              'via', 
              'una', 
              true, 
            ] 
          ], 
        ] 
      ], 
    'ritrovai', 
    'per' 
    ], 
    'diritta' 
  ]; 
  $words2 = [ 
    'elemento1' => 25.89, 
    'elemento2' => 'nostra', 
    'elemento3' => [ 
                      'Virgilio', 
                      'smarrita', 
                      'ché' 
                    ] 
  ];
  
  echo $words1[6][3][1][1] ." ". $words1[6][3][0] ." ". $words1[1] ." ". $words1[6][3][1][0] ." ". $words1[1] ." ". $words2['elemento2'] ." ". $words1[2] ." ". $words1[4] ." ". $words1[6][4] ." ". $words1[6][5] ." ". $words1[6][3][1][2][2][1] ." ". $words1[6][3][1][2][0] ." ". $words1[6][0] ." ". $words2['elemento3'][2] ." ". $words1[6][3][1][2][1] ." ". $words1[7] ." ". $words1[6][3][1][2][2][0] ." ". $words1[6][1] ." ". $words2['elemento3'][1] ; 

 // print_r($words1);

