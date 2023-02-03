 
        <?php
          $nome=$_POST['nome'];
          $peso= $_POST['peso'];
          $altura=$_POST['altura'];
          
          $imc = $peso / pow($altura,2) ;
        
          $imc = round($imc,1);  
          echo "<h1> Bem vindo $nome </h1> " ; 
          echo "<h3>Seu peso  = $peso </h3>  "; 
          echo "<h3>Sua altura  = $altura </h3>  "; 
          echo "<h3> SEU IMC = $imc </h3>" ;
          
          
          if ( $imc<18.5) 
          {
            echo "<h3> IMC =  $imc =  Magreza  </h3>";
          }
          elseif ( $imc>=18.5 and $imc < 24.9) 
          {
            echo "<h3> IMC = $imc =  peso normal </h3>";
          }
          elseif ($imc > 24.9) 
          {
            echo  "<h3> IMC = $imc Exesso de peso ,  <em>!!! ATENCAO !!! procure orientacao medica </em> </h3>" ;
          } 
          
  

          

         ?> 
         

            


           

       
    
    
