<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>php aula 5</title>
    </head>
    <body>
        
       <?php
//arrays da tabela!
    $turma[0]="02K01";
    $turma[1]="02J01";
    $turma[2]="02K01";
    
    $disciplinas[0]="Tec Web 2";
    $disciplinas[1]="Linguagem de Programação 1";
    $disciplinas[2]="Linguagem de Programação 1";
    
    $semana [0] = "Segunda";
    $semana [1] = "Terça";
    $semana [2] = "Quarta";
  
    $professores [0] = "Charles";
    $professores [1] = "João"; 
    $professores [2] = "Charles"; 
   
// tabela! com os nomes dos "temas".
        echo "<table width='0' border='1'> 
                    <tr>
                        <td><b>Turma</td>   
                        <td><b>Disciplina</td> 
                        <td><b>Semana</td>
                        <td><b>Professor</td>
                     </tr>";
                //função para o numero de linhas da tabela!
        
                for($i = 0; $i<3; $i = $i + 1){ 
                 echo "
                        <tr> 
                            <td>$turma[$i]</td>   
                            <td>$disciplinas[$i]</td> 
                            <td>$semana[$i]</td> 
                            <td>$professores[$i]</td> 
                        </tr> 
                    "; 
                } 
                echo "</table>";

?>

    </body>
</html>

