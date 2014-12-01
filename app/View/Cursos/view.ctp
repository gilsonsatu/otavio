<div class="cursos view">
<h2><?php echo __('Curso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CursoDescricao'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['cursoDescricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Curso'), array('action' => 'edit', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Curso'), array('action' => 'delete', $curso['Curso']['id']), array(), __('Are you sure you want to delete # %s?', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planos'), array('controller' => 'planos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plano'), array('controller' => 'planos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Disciplinas'); ?></h3>
	<?php if (!empty($curso['Disciplina'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('DisciplinaDescricao'); ?></th>
		<th><?php echo __('DisciplinaCargaHoraria'); ?></th>
		<th><?php echo __('DisciplinaEmenta'); ?></th>
		<th><?php echo __('DisciplinaReferencias'); ?></th>
		<th><?php echo __('N Aulas Teoricas'); ?></th>
		<th><?php echo __('N Aulas Praticas'); ?></th>
		<th><?php echo __('N Aulas Laboratorio'); ?></th>
		<th><?php echo __('N Semanas'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($curso['Disciplina'] as $disciplina): ?>
		<tr>
			<td><?php echo $disciplina['id']; ?></td>
			<td><?php echo $disciplina['disciplinaDescricao']; ?></td>
			<td><?php echo $disciplina['disciplinaCargaHoraria']; ?></td>
			<td><?php echo $disciplina['disciplinaEmenta']; ?></td>
			<td><?php echo $disciplina['disciplinaReferencias']; ?></td>
			<td><?php echo $disciplina['n_aulas_teoricas']; ?></td>
			<td><?php echo $disciplina['n_aulas_praticas']; ?></td>
			<td><?php echo $disciplina['n_aulas_laboratorio']; ?></td>
			<td><?php echo $disciplina['n_semanas']; ?></td>
			<td><?php echo $disciplina['curso_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'disciplinas', 'action' => 'view', $disciplina['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'disciplinas', 'action' => 'edit', $disciplina['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'disciplinas', 'action' => 'delete', $disciplina['id']), array(), __('Are you sure you want to delete # %s?', $disciplina['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Planos'); ?></h3>
	<?php if (!empty($curso['Plano'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('PlanoAno'); ?></th>
		<th><?php echo __('PlanoSemestre'); ?></th>
		<th><?php echo __('PlanoRecuperacao'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th><?php echo __('Objetivo Geral'); ?></th>
		<th><?php echo __('Objetivo Especifico'); ?></th>
		<th><?php echo __('Avaliacao Plano Id'); ?></th>
		<th><?php echo __('Comentario Plano Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('StatusCoordenador'); ?></th>
		<th><?php echo __('StatusPedagogo'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('DisciplinaCargaHoraria'); ?></th>
		<th><?php echo __('DisciplinaEmenta'); ?></th>
		<th><?php echo __('DisciplinaReferencias'); ?></th>
		<th><?php echo __('N Aulas Teoricas'); ?></th>
		<th><?php echo __('N Aulas Praticas'); ?></th>
		<th><?php echo __('N Aulas Laboratorio'); ?></th>
		<th><?php echo __('N Semanas'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($curso['Plano'] as $plano): ?>
		<tr>
			<td><?php echo $plano['id']; ?></td>
			<td><?php echo $plano['planoAno']; ?></td>
			<td><?php echo $plano['planoSemestre']; ?></td>
			<td><?php echo $plano['planoRecuperacao']; ?></td>
			<td><?php echo $plano['disciplina_id']; ?></td>
			<td><?php echo $plano['objetivo_geral']; ?></td>
			<td><?php echo $plano['objetivo_especifico']; ?></td>
			<td><?php echo $plano['avaliacao_plano_id']; ?></td>
			<td><?php echo $plano['comentario_plano_id']; ?></td>
			<td><?php echo $plano['usuario_id']; ?></td>
			<td><?php echo $plano['statusCoordenador']; ?></td>
			<td><?php echo $plano['statusPedagogo']; ?></td>
			<td><?php echo $plano['curso_id']; ?></td>
			<td><?php echo $plano['disciplinaCargaHoraria']; ?></td>
			<td><?php echo $plano['disciplinaEmenta']; ?></td>
			<td><?php echo $plano['disciplinaReferencias']; ?></td>
			<td><?php echo $plano['n_aulas_teoricas']; ?></td>
			<td><?php echo $plano['n_aulas_praticas']; ?></td>
			<td><?php echo $plano['n_aulas_laboratorio']; ?></td>
			<td><?php echo $plano['n_semanas']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'planos', 'action' => 'view', $plano['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'planos', 'action' => 'edit', $plano['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'planos', 'action' => 'delete', $plano['id']), array(), __('Are you sure you want to delete # %s?', $plano['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Plano'), array('controller' => 'planos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
