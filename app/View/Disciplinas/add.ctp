<div class="disciplinas form">
<?php echo $this->Form->create('Disciplina'); ?>
	<fieldset>
		<legend><?php echo __('Add Disciplina'); ?></legend>
	<?php
		echo $this->Form->input('disciplinaDescricao');
		echo $this->Form->input('disciplinaCargaHoraria');
		echo $this->Form->input('disciplinaEmenta');
		echo $this->Form->input('disciplinaReferencias');
		echo $this->Form->input('n_aulas_teoricas');
		echo $this->Form->input('n_aulas_praticas');
		echo $this->Form->input('n_aulas_laboratorio');
		echo $this->Form->input('n_semanas');
		echo $this->Form->input('curso_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Disciplinas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planos'), array('controller' => 'planos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plano'), array('controller' => 'planos', 'action' => 'add')); ?> </li>
	</ul>
</div>
