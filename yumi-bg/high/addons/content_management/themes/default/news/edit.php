<?php if (!defined('FLUX_ROOT')) exit;
$news_class = array('servers','events','updates');
?> 
<?php if (!empty($errorMessage)): ?>
    <p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>
<form action="<?php echo $this->urlWithQs?>" method="post">
<input type="hidden" value="<?php echo $news_id?>" name="news_id"/>
<table class="vertical-table" width="100%"> 
        <tr>
            <th width="100"><label for="register_server">News Title</label></th>
            <td><input type="text" name="news_title" size="40" value="<?php echo $news_title?>"/></td>
        </tr>
        <tr>
            <th width="100"><label for="register_server">News Class</label></th>
            <td>
                <select name="news_class">
                    <option value="">-Select Class</option>
                    <?php foreach($news_class as $nclass):?>
                        <option value="<?php echo $nclass?>" <?php echo $nclass == $newsclass ? 'selected' : ''?>><?php echo $nclass?></option>
                    <?php endforeach?>
                </select>
            </td>
        </tr>
        <tr>
            <th width="100"><label for="register_server">News Body</label></th>
            <td>
                <textarea name="news_body" id="markItUp"><?php echo $news_body?></textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Update" /></td>
        </tr>
    </table>
</form>