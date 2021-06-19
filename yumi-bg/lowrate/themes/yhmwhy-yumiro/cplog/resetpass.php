<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Password Resets</h2>
<p class="toggler"><a href="javascript:toggleSearchForm()">Search...</a></p>
<form action="<?php echo $this->url ?>" method="get" class="search-form">
	<?php echo $this->moduleActionFormInputs($params->get('module'), $params->get('action')) ?>
	<p>
		<label for="use_request_after">Request Date Between:</label>
		<input type="checkbox" name="use_request_after" id="use_request_after"<?php if ($params->get('use_request_after')) echo ' checked="checked"' ?> />
		<?php echo $this->dateField('request_after') ?>
		<label for="use_request_before">&mdash;</label>
		<input type="checkbox" name="use_request_before" id="use_request_before"<?php if ($params->get('use_request_before')) echo ' checked="checked"' ?> />
		<?php echo $this->dateField('request_before') ?>
	</p>
	<p>
		<label for="use_reset_after">Reset Date Between:</label>
		<input type="checkbox" name="use_reset_after" id="use_reset_after"<?php if ($params->get('use_reset_after')) echo ' checked="checked"' ?> />
		<?php echo $this->dateField('reset_after') ?>
		<label for="use_reset_before">&mdash;</label>
		<input type="checkbox" name="use_reset_before" id="use_reset_before"<?php if ($params->get('use_reset_before')) echo ' checked="checked"' ?> />
		<?php echo $this->dateField('reset_before') ?>
	</p>
	<p>
		<label for="account_id">Account ID:</label>
		<input type="text" name="account_id" id="account_id" value="<?php echo htmlspecialchars($params->get('account_id')) ?>" />
		...
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" value="<?php echo htmlspecialchars($params->get('username')) ?>" />
		...
		<label for="request_ip">Request IP:</label>
		<input type="text" name="request_ip" id="request_ip" value="<?php echo htmlspecialchars($params->get('request_ip')) ?>" />
		...
		<label for="reset_ip">Reset IP:</label>
		<input type="text" name="reset_ip" id="reset_ip" value="<?php echo htmlspecialchars($params->get('reset_ip')) ?>" />
		
		<?php if (!$auth->allowedToSearchCpResetPass): ?>
		<input type="submit" value="Search" />
		<input type="button" value="Reset" onclick="reload()" />
		<?php endif ?>
	</p>
	<?php if ($auth->allowedToSearchCpResetPass): ?>
	<p>
		<label for="old_password">Old Password:</label>
		<input type="text" name="old_password" id="old_password" value="<?php echo htmlspecialchars($params->get('old_password')) ?>" />
		...
		<label for="new_password">New Password:</label>
		<input type="text" name="new_password" id="new_password" value="<?php echo htmlspecialchars($params->get('new_password')) ?>" />
		
		<input type="submit" value="Search" />
		<input type="button" value="Reset" onclick="reload()" />
	</p>
	<?php endif ?>
</form>
<?php if ($resets): ?>
<?php echo $paginator->infoText() ?>
<?php foreach ($resets as $reset): ?>
    <table class="yhmwhy-table" width="100%">
        <tr>
            <th width="105"><?php echo $paginator->sortableColumn('log.account_id', 'Account ID') ?></th>
            <td align="right">
                <?php if ($auth->actionAllowed('account', 'view')): ?>
                    <?php echo $this->linkToAccount($reset->account_id, $reset->account_id) ?>
                <?php else: ?>
                    <?php echo $reset->account_id ?>
                <?php endif ?>
            </td>
            <th width="75"><?php echo $paginator->sortableColumn('userid', 'Username') ?></th>
            <td width="90">
                <?php if ($reset->userid): ?>
                    <?php echo htmlspecialchars($reset->userid) ?>
                <?php else: ?>
                    <span class="not-applicable">Unknown</span>
                <?php endif ?>
            </td>
        </tr>
        <?php if (Flux::config('CpResetLogShowPassword') && $auth->allowedToSeeCpResetPass): ?>
            <tr>
                <th><?php echo $paginator->sortableColumn('old_password', 'Old Password') ?></th>
                <td><?php echo htmlspecialchars($reset->old_password) ?></td>
                <th><?php echo $paginator->sortableColumn('new_password', 'New Password') ?></th>
                <td><?php echo htmlspecialchars($reset->new_password) ?></td>
            </tr>
        <?php endif ?>
        <tr>
            <th><?php echo $paginator->sortableColumn('request_date', 'Request Date') ?></th>
            <td><?php echo $this->formatDateTime($reset->request_date) ?></td>
            <th><?php echo $paginator->sortableColumn('request_ip', 'Request IP') ?></th>
            <td><?php echo htmlspecialchars($reset->request_ip) ?></td>
        </tr>
        <tr>
            <th><?php echo $paginator->sortableColumn('reset_date', 'Reset Date') ?></th>
            <td>
                <?php if ($reset->reset_date): ?>
                    <?php echo $this->formatDateTime($reset->reset_date) ?>
                <?php else: ?>
                    <span class="not-applicable">None</span>
                <?php endif ?>
            </td>
            <th><?php echo $paginator->sortableColumn('reset_ip', 'Reset IP') ?></th>
            <td>
                <?php if ($reset->reset_ip): ?>
                    <?php echo htmlspecialchars($reset->reset_ip) ?>
                <?php else: ?>
                    <span class="not-applicable">None</span>
                <?php endif ?>
            </td>
        </tr>
    </table>
<?php endforeach ?>
<?php echo $paginator->getHTML() ?>
<?php else: ?>
<p>No password resets found. <a href="javascript:history.go(-1)">Go back</a>.</p>
<?php endif ?>