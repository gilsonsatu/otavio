<?php
//echo $this->Html->script('jquery-1.11.1.js');
echo $this->Html->script('jquery-1.3.2.min.js');
echo $this->Html->css('estilos.css');
?>
<head>
    <script type="text/javascript">
        $(function () {
            $("#add").click(function () {

                $('#instrumento').append('<div id="novo1"><label>Instrumento de Avaliação</label><br><br>' +
                        '<?php
echo "&nbsp;&nbsp;<select name=\"instrumento_id\">";
echo "<option>Selecione</option>";
echo "<option>Prova Objetiva</option>";
echo "<option>Prova discursiva</option>";
echo "<option>Prova oral</option>";
echo "<option>Prova prática</option>";
echo "<option>Palestra</option>";
echo "<option>Projeto</option>";
echo "<option>Relatório</option>";
echo "<option>Exercícios e Trabalhos Práticos</option>";
?></div>');
                $('#pontuacao').append('<div id="novo2"><label>Pontuação</label><br><br>' + '<input type="number" required/>&nbsp;&nbsp;<a class="del"><?php echo $this->Html->image('del.png'); ?></a></div>');
                return false;
            });

            $('.del').live('click', function () {
                $('#novo1').remove();
                $('#novo2').remove();
            });
        });
    </script>

</head>
<div id="cabecalho">
    <div id="imgifms">
        <?php echo $this->Html->image("ifms.png"); ?>
    </div>
    <div id="textoifms" align="center">
        <?php
        echo "Ministério da Educação <br>
                             Secretaria de Educação Profissional e Tecnológica <br>
                             Instituto Federal de Mato Grosso do Sul <br>
                             Pró-Reitoria de Ensino e Pós-Graduação <br>
                             Campus Coxim";
        ?>
    </div>
</div>
<?php echo $this->Form->create('Plano'); ?>
<fieldset>
    <legend><?php echo __('PLANO DE ENSINO'); ?></legend>
    <div id="contorno">
        <h4><b>01&nbsp;&nbsp;</b> IDENTIFICAÇÃO</h4>
        <table border="1">
            <tr>
                <td>	
                    <?php // echo $this->Form->input('curso_id', array('label' => 'Curso:', 'empty' => 'Selecione')); ?>

                    <?php
                    //=================Gilson
                    echo $this->Form->input('curso_id', array('id' => 'PlanoCursoId', 'label' => 'Curso:', 'empty' => 'Selecione'));
                    //fim Gilson
                    ?>
                </td>
                <td>
                    <?php echo $this->Form->input('planoAno', array('label' => 'Ano:')); ?>
                </td>
            </tr>
            <tr>	
                <td>
                    <?php //echo $this->Form->input('disciplina_id', array('label' => 'Unidade Curricular:', 'empty' => 'Selecione')); ?>
                    <?php
                    //=================Gilson
                    echo $this->Form->input('disciplina_id', array('id' => 'PlanoDisciplinaId', 'label' => 'Unidade Curricular:', 'empty' => 'Selecione'));
                    //fim gilson
                    ?>
                </td>
                <td>
                    <?php echo $this->Form->input('planoSemestre', array('label' => 'Período:')); ?>
                </td>	

            </tr>
            <tr>
                <td>
                    <?php echo $this->Form->input('n_semanas', array('label' => 'Nº Semanas')); ?>
                    <?php echo $this->Form->input('cargahoraria', array('label' => 'Carga horária total:')); ?>
                </td>
                <td>	
                    <?php echo $this->Form->input('n_aulas_teoricas', array('label' => 'Nº Aulas Teóricas')); ?>
                    <?php echo $this->Form->input('n_aulas_praticas', array('label' => 'Nº Aulas Práticas')); ?>
                    <?php echo $this->Form->input('n_aulas_laboratorio', array('label' => 'Nº Aulas Laboratório')); ?>
                </td>
            </tr>
        </table>
    </div>
    <div id="contorno">
        <table>
            <td><h4><b>02&nbsp;&nbsp;</b> EMENTA</h4></td>
            <tr>
                <td>
                    <?php //echo $this->Form->input('ementa', array('label' => '')); ?>
                    
                    <?php //===============Gilson
                    echo $this->Form->input('ementa', array('id' => 'PlanoEmenta', 'readonly' => 'true', 'type' => 'textarea', 'label' => ''));
                          //fim gilson
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <div id="contorno">		
        <table>
            <td><h4><b>03&nbsp;&nbsp;</b> OBJETIVO GERAL DA UNIDADE CURRICULAR</h4></td>
            <tr>
                <td>
                    <?php echo $this->Form->input('objetivo_geral', array('label' => '')); ?>
                </td>
            </tr>	
        </table>
    </div>
    <div id="contorno">
        <table>
            <td><h4><b>04&nbsp;&nbsp;</b> OBJETIVOS ESPECÍFICOS DA UNIDADE CURRICULAR</h4></td>
            <tr>
                <td>
                    <?php echo $this->Form->input('objetivos_especificos', array('label' => '')); ?>
                </td>
            </tr>	
        </table>
    </div>
    <div id="contorno">
        <h4><b>05&nbsp;&nbsp;</b> AVALIAÇÃO DA APRENDIZAGEM</h4>
        <a id="add"><?php echo $this->Html->image('add.png'); ?></a>
        <table border="1">
            <tr>
                <td>
                    <?php echo $this->Form->input('instrumento_id', array('label' => 'Instrumento de Avaliação', 'empty' => 'Selecione')); ?>
                </td>
                <td>
                    <?php echo $this->Form->input('avaliacaoPontuacao', array('label' => 'Pontuação')); ?>
                </td>		
            </tr>
            <td>
                <div id="instrumento"></div>
            </td>
            <td>
                <div id="pontuacao"></div>
            </td>
            <tr></tr>

        </table>
    </div>
    <div id="contorno">
        <table>
            <td><h4><b>06&nbsp;&nbsp;</b> ESTRATÉGIAS PROPOSTAS PARA A RECUPERAÇÃO DA APRENDIZAGEM </h4></td>
            <tr>
                <td>
                    <?php echo $this->Form->input('planoRecuperacao', array('label' => '')); ?>
                </td>
            </tr>	
        </table>
    </div>
    <div id="contorno">
        <table>
            <td><h4><b>07&nbsp;&nbsp;</b> REFERÊNCIAS </h4></td>
            <tr>
                <td>
                    <?php echo $this->Form->input('referencias', array('label' => '')); ?>
                </td>
            </tr>	
        </table>
    </div>							
</fieldset>
<?php
echo $this->Form->end(__('Salvar'));

//=================Gilson
//Atualizar disciplinas
$this->Js->get('#PlanoCursoId')->event('change', $this->Js->request(array(
            'controller' => 'disciplinas',
            'action' => 'getDisciplinasByCursoId'
                ), array(
            'update' => '#PlanoDisciplinaId',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true, 
                'inline' => true
            ))
        ))
);
//Atualizar ementa
$this->Js->get('#PlanoDisciplinaId')->event('click', $this->Js->request(array(
            'controller' => 'disciplinas',
            'action' => 'getEmentaByDisciplinaId'
                ), array(
            'update' => '#PlanoEmenta',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);


//fim Gilson
?>


