<div class="planos index">
	<h2><?php echo __('Planos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('planoAno'); ?></th>
			<th><?php echo $this->Paginator->sort('planoSemestre'); ?></th>
			<th><?php echo $this->Paginator->sort('planoRecuperacao'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplina_id'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivo_geral'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivos_especificos'); ?></th>
			<th><?php echo $this->Paginator->sort('avaliacao_plano_id'); ?></th>
			<th><?php echo $this->Paginator->sort('comentario_plano_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('statusCoordenador'); ?></th>
			<th><?php echo $this->Paginator->sort('statusPedagogo'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cargahoraria'); ?></th>
			<th><?php echo $this->Paginator->sort('ementa'); ?></th>
			<th><?php echo $this->Paginator->sort('referencias'); ?></th>
			<th><?php echo $this->Paginator->sort('n_aulas_teoricas'); ?></th>
			<th><?php echo $this->Paginator->sort('n_aulas_praticas'); ?></th>
			<th><?php echo $this->Paginator->sort('n_aulas_laboratorio'); ?></th>
			<th><?php echo $this->Paginator->sort('n_semanas'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($planos as $plano): ?>
	<tr>
		<td><?php echo h($plano['Plano']['id']); ?>&nbsp;</td>
		<td><?php echo h($plano['Plano']['planoAno']); ?>&nbsp;</td>
		<td><?php echo h($plano['Plano']['planoSemestre']); ?>&nbsp;</td>
		<td><?php echo h($plano['Plano']['planoRecuperacao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($plano['Disciplina']['id'], array('controller' => 'disciplinas', 'action' => 'view', $plano['Disciplina']['id'])); ?>
		</td>
		<td><?php echo h($plano['Plano']['objetivo_geral']); ?>&nbsp;</td>
		<td><?php echo h($plano['Plano']['objetivos_especificos']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($plano['AvaliacaoPlano']['id'], array('controller' => 'avaliacao_planos', 'action' => 'view', $plano['AvaliacaoPlano']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($plano['ComentarioPlano']['id'], array('controller' => 'comentario_planos', 'action' => 'view', $plano['ComentarioPlano']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($plano['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $plano['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($plano['Plano']['statusCoordenador']); ?>&nbsp;</td>
		<td><?php echo h($plano['Plano']['statusPedagogo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($plano['Curso']['id'], array('controller' => 'cursos', 'action' => 'view', $plano['Curso']['id'])); ?>
		</td>
		<td><?php echo h($plano['Plano']['cargahoraria']); ?>&nbsp;</td>
		<td><?php echo h($plano['Plano']['ementa']); ?>&nbsp;</td>
		<td><?php echo h($plano['Plano']['referencias']); ?>&nbsp;</td>
		<td><?php echo h($plano['Plano']['n_aulas_teoricas']); ?>&nbsp;</td>
		<td><?php echo h($plano['Plano']['n_aulas_praticas']); ?>&nbsp;</td>
		<td><?php echo h($plano['Plano']['n_aulas_laboratorio']); ?>&nbsp;</td>
		<td><?php echo h($plano['Plano']['n_semanas']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $plano['Plano']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $plano['Plano']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $plano['Plano']['id']), array(), __('Are you sure you want to delete # %s?', $plano['Plano']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Plano'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Avaliacao Planos'), array('controller' => 'avaliacao_planos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Avaliacao Plano'), array('controller' => 'avaliacao_planos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentario Planos'), array('controller' => 'comentario_planos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario Plano'), array('controller' => 'comentario_planos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instrumentos'), array('controller' => 'instrumentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrumento'), array('controller' => 'instrumentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
