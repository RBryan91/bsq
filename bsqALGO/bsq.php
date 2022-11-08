<?php
$fichier = fopen($argv[1],"r+");
$GRANDTABLEAU = [];


while (($ligne = fgets($fichier, 4096)) !== false) {

    array_push($GRANDTABLEAU,str_split(substr($ligne,0,-1)));   
}
$nombreDeLigne =  $GRANDTABLEAU[0][0];
$nombreDeColonne = count($GRANDTABLEAU[1]);
 
array_shift($GRANDTABLEAU);

for($x=0;$x <$nombreDeLigne; $x++)
{
    for($y=0;$y < $nombreDeColonne;$y++)
    {
        if($GRANDTABLEAU[$x][$y]==".")
        {
            
        }
    }
}
//for($x = 0; $x < $nombreDeLigne; $x++) // $x = a la coordonner 0 de mon tableau en ligne 
//{
//    for($y=0;$y<$nombreDeColonne;$y++) // $y = al la coordonner 0 de mon tableau en colonne
//    {
//        if($GRANDTABLEAU[$x][$y]==".")
//        {
//            $CarrerTaille=1;
//            while( $GRANDTABLEAU[$x][$y]==".")//$x <$nombreDeLigne && $y<$nombreDeColonne
//            {
//                for($x1 = $x; $x1 <= $CarrerTaille; $x1++)
//                {
//                    for($y1=$y;$y1 <= $CarrerTaille;$y1++)
//                    {
//                        
//                        if($GRANDTABLEAU[$x1][$y1]==".")
//                        {
//                            echo $x1.";".$y1."\n";
//
//                        }
//                        else{break;}
//                        
//                    }
//                     
//                }
//            }
//        }
//      
//    }
//}



