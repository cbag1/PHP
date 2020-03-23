// Afficher pour tester le contenu de la variable
            // echo "<h1>Nombre Premiers inferieurs à la moyenne</h1>";
            // $test=0;
            // echo "<table border=1>";
            // for ($i=0; $i < count($T['inferieur']); $i++) {
            //   if($test==0){
            //     echo "<tr>";
            //     echo "<td>".$T['inferieur'][$i]."</td>";
            //     $test++;
            //   }else{
            //     if ($test==9) {
            //       echo "<td>".$T['inferieur'][$i]."</td>";
            //       echo "</tr>";
            //       $test=0;
            //     }else {
            //       echo "<td>".$T['inferieur'][$i]."</td>";
            //       $test++;
            //     }
            //   }
            // }
            // echo "</table>";

            // echo "<h1>Nombre Premiers superieurs</h1>";
            // $test=0;
            // echo "<table border=1>";
            // for ($i=0; $i < count($T['superieur']); $i++) {
            //   if($test==0){
            //     echo "<tr>";
            //     echo "<td>".$T['superieur'][$i]."</td>";
            //     $test++;
            //   }else{
            //     if ($test==9) {
            //       echo "<td>".$T['superieur'][$i]."</td>";
            //       echo "</tr>";
            //       $test=0;
            //     }else {
            //       echo "<td>".$T['superieur'][$i]."</td>";
            //       $test++;
            //     }
            //   }
            // }
            // echo "</table>";


            // else{

//   $page=$_GET['page'];
//   echo "Bonjour ";
//   echo $page;

  // $test=0;
  // for ($i=101; $i < 150; $i++) { 
  //   if($test==0){
  //     echo "<tr>";
  //     echo "<td>".$T['inferieur'][$i]."</td>";
  //     $test++;
  //   }else{
  //     if ($test==9) {
  //       echo "<td>".$T['inferieur'][$i]."</td>";
  //       echo "</tr>";
  //       $test=0;
  //     }else {
  //       echo "<td>".$T['inferieur'][$i]."</td>";
  //       $test++;
  //     }
  //   }
  // }
// }




// for ($i=0; $i < 100; $i++) { 
              //   if($test==0){
              //     echo "<tr>";
              //     echo "<td>".$T['inferieur'][$i]."</td>";
              //     $test++;
              //   }else{
              //     if ($test==9) {
              //       echo "<td>".$T['inferieur'][$i]."</td>";
              //       echo "</tr>";
              //       $test=0;
              //     }else {
              //       echo "<td>".$T['inferieur'][$i]."</td>";
              //       $test++;
              //     }
              //   }
              // }
              // echo "Superieur";
            }

            // echo "</table>";
            //  session_destroy();









          $_SESSION['tab']=[];
            $valeur=(int)$_POST['nombre'];
            $tab=premier($valeur);
            // var_dump($tab);

            $T=[
              'inferieur'=>[],
              'superieur'=>[]
            ];
            // Moyenne + ajout des nombres premiers inferieurs ou superieurs à la moyenne
            $moyenne=moyenne($tab);
            for ($i=0; $i < count($tab); $i++) {
              if($tab[$i]<$moyenne){
                $T['inferieur'][]=$tab[$i];
              }else {
                $T['superieur'][]=$tab[$i];
              }
            }
            
            // Affichage par 100
            $nbpagesinf=(int)(count($T['inferieur'])/100);
            $nbpagessup=(int)(count($T['superieur'])/100);
            $_SESSION['nbpinf']=$nbpagesinf;
            $_SESSION['nbsup']=$nbpagessup;

            echo $nbpagesinf," ";
            echo $nbpagessup;


            if (empty($_SESSION['tab'])) {
              $_SESSION['tab']=$T;
              // Inferieur
              echo "Inferieur";
              affichertab(0,$T['inferieur']);
              for ($i=1; $i <= $nbpagesinf; $i++) { 
                echo "<a href='exo1.php?ind_inf=$i&ind_sup=0'>".$i." </a>";
              }

              // Superieur
              echo "superieur";
              affichertab(0,$T['superieur']);
              for ($i=1; $i <= $nbpagessup; $i++) { 
                echo "<a href='exo1.php?ind_sup=$i&ind_inf=0'>".$i." </a>";
              }
            }


        