<?php if (!defined('FLUX_ROOT')) exit;       ?>
<h2>Add Page</h2>
<?php if (!empty($errorMessage)): ?>
    <p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>

<form action="<?php echo $this->urlWithQs ?>" method="post">
<table class="yhmwhy-table" width="100%"> 
        <tr>
            <th width="100"><label for="register_server">Page Path</label></th>
            <td><input type="text" name="page_path" size="40"/></td>
        </tr>
        <tr>
            <th width="100"><label for="register_server">Page Title</label></th>
            <td><input type="text" name="page_title" size="40"/></td>
        </tr> 
        <tr>
            <th width="100"><label for="register_server">Page Body</label></th>
            <td>
                <textarea name="page_body" id="markItUp" cols="40" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Add" /></td>
        </tr>
    </table>
</form>