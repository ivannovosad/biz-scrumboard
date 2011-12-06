<tr>
	<td class="status <?= ($statesObject->ALL == $statesObject->DONE) ? "po-done": "" ?>"></td>
	<td>
		<h3><?php echo $user; ?></h3>
		
		<?php if (($statesObject->ALL == $statesObject->DONE)): ?>
		<div class="po-done">
			ALL TASKS DONE
		</div>
		<?php endif; ?>
	</td>
	<td>
		<div class="po-done"><?php echo $statesObject->DONE; ?> Done</div>
	</td>
</tr>
