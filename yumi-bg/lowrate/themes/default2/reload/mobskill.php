<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php if (!empty($errorMessage)): ?>
<div class="myTextError"><?php echo htmlspecialchars($errorMessage) ?></div>
<?php else: ?>
<p><?php echo htmlspecialchars(sprintf(Flux::message('ReloadMobSkillsInfo'), number_format(filesize($mobDB)))) ?></p>
<?php endif ?>