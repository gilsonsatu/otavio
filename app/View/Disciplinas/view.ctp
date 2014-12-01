<div class="disciplinas view">
<h2><?php echo __('Disciplina'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DisciplinaDescricao'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['disciplinaDescricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DisciplinaCargaHoraria'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['disciplinaCargaHoraria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DisciplinaEmenta'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['disciplinaEmenta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DisciplinaReferencias'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['disciplinaReferencias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('N Aulas Teoricas'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['n_aulas_teoricas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('N Aulas Praticas'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['n_aulas_praticas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('N Aulas Laboratorio'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['n_aulas_laboratorio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('N Semanas'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['n_semanas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disciplina['Curso']['id'], array('controller' => 'cursos', 'action' => 'view', $disciplina['Curso']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Disciplina'), array('action' => 'edit', $disciplina['Disciplina']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Disciplina'), array('action' => 'delete', $disciplina['Disciplina']['id']), array(), __('Are you sure you want to delete # %s?', $disciplina['Disciplina']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planos'), array('controller' => 'planos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plano'), array('controller' => 'planos', 'action' => 'add')); ?> </li>
	</ul>
</div>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Plano'), array('controller' => 'planos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
