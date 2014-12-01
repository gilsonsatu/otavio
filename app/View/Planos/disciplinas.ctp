    <?php

        $idcurso = $_GET['curso'];

        mysql_connect('localhost','root','');
        mysql_select_db('plano_ensino_ifms');

       $result = mysql_query("SELECT * FROM disciplinas WHERE curso_id = ".$idcurso);

       while($row = mysql_fetch_array($result) ){
            echo "<option value='".$row['id']."'>".$row['disciplinaDescricao']."</option>";

       }

    ?>