<?php if (!defined('FLUX_ROOT')) exit;    ?>
<h2>Edit Page</h2>
<?php if (!empty($errorMessage)): ?>
    <p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>
<form action="<?php echo $this->urlWithQs?>" method="post">
<input type="hidden" name="page_id" value="<?php echo $page_id?>" />
<table class="vertical-table" width="100%"> 
        <tr>
            <th width="100"><label for="register_server">Page Path</label></th>
            <td><input type="text" name="page_path" size="40" value="<?php echo $page_path?>"/></td>
        </tr>
        <tr>
            <th width="100"><label for="register_server">Page Title</label></th>
            <td><input type="text" name="page_title" size="40" value="<?php echo $page_title?>"/></td>
        </tr> 
        <tr>
            <th width="100"><label for="register_server">Page Body</label></th>
            <td>
                <textarea name="page_body" id="markItUp" cols="40" rows="10"><?php echo $page_body?></textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Update" /></td>
        </tr>
    </table>
</form>