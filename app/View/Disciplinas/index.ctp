<div class="disciplinas index">
	<h2><?php echo __('Disciplinas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplinaDescricao'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplinaCargaHoraria'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplinaEmenta'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplinaReferencias'); ?></th>
			<th><?php echo $this->Paginator->sort('n_aulas_teoricas'); ?></th>
			<th><?php echo $this->Paginator->sort('n_aulas_praticas'); ?></th>
			<th><?php echo $this->Paginator->sort('n_aulas_laboratorio'); ?></th>
			<th><?php echo $this->Paginator->sort('n_semanas'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($disciplinas as $disciplina): ?>
	<tr>
		<td><?php echo h($disciplina['Disciplina']['id']); ?>&nbsp;</td>
		<td><?php echo h($disciplina['Disciplina']['disciplinaDescricao']); ?>&nbsp;</td>
		<td><?php echo h($disciplina['Disciplina']['disciplinaCargaHoraria']); ?>&nbsp;</td>
		<td><?php echo h($disciplina['Disciplina']['disciplinaEmenta']); ?>&nbsp;</td>
		<td><?php echo h($disciplina['Disciplina']['disciplinaReferencias']); ?>&nbsp;</td>
		<td><?php echo h($disciplina['Disciplina']['n_aulas_teoricas']); ?>&nbsp;</td>
		<td><?php echo h($disciplina['Disciplina']['n_aulas_praticas']); ?>&nbsp;</td>
		<td><?php echo h($disciplina['Disciplina']['n_aulas_laboratorio']); ?>&nbsp;</td>
		<td><?php echo h($disciplina['Disciplina']['n_semanas']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($disciplina['Curso']['id'], array('controller' => 'cursos', 'action' => 'view', $disciplina['Curso']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $disciplina['Disciplina']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $disciplina['Disciplina']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $disciplina['Disciplina']['id']), array(), __('Are you sure you want to delete # %s?', $disciplina['Disciplina']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planos'), array('controller' => 'planos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plano'), array('controller' => 'planos', 'action' => 'add')); ?> </li>
	</ul>
</div>
