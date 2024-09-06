<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Boletim 8ª Ano 2024</title>       
    
        <style>
        
            .w3-border-white {
                border: 5px solid white; 
            }

            .custom-table1, .custom-table2  {
                width: 110%;
                text-align: center; 
                white-space: nowrap; 
            }

        </style>
    </head>

    <body>
        <div class="w3-third w3-center w3-animate-top w3-padding">

            <div class="w3-table-all w3-hoverable w3-text-white w3-blue w3-border-white custom-table1">
            <h2> 8ª Ano A</h2>
        </div>
           
            <?php
                $alunos = array(
                    "Nome" => array("Aline", "Alfredo", "Carla", "César", "Daniel", "Esnar", "Henzo", "Pablo", "Wallace", "Zulmira"),
                    "Primeiro Semestre" => array("10", "8", "5", "9", "10", "8", "6", "7", "8", "10"),
                    "Segundo Semestre" => array("9.5", "5", "6.5", "9", "7", "6", "8", "5", "7", "6")
                );
                $num_alunos = count($alunos["Nome"]);
            ?>

            <table class="w3-table-all w3-hoverable w3-text-black w3-border-white custom-table2 ">
                <tr class="w3-blue">
                    <th class="w3-center">Nome</th>
                    <th class="w3-center">Primeiro Semestre</th>
                    <th class="w3-center">Segundo Semestre</th>
                </tr>

                <?php for ($i = 0; $i < $num_alunos; $i++) { ?>
                    <tr>
                        <td class="w3-center"><?php echo htmlspecialchars($alunos["Nome"][$i]); ?></td>
                        <td class="w3-center"><?php echo htmlspecialchars($alunos["Primeiro Semestre"][$i]); ?></td>
                        <td class="w3-center"><?php echo htmlspecialchars($alunos["Segundo Semestre"][$i]); ?></td>
                    </tr>
                <?php } ?>

            </table>       
        </div>
    </body>
</html>
