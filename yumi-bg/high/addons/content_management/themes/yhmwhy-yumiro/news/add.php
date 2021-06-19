<?php if (!defined('FLUX_ROOT')) exit;
$news_class = array('News');
?>   
<?php if (!empty($errorMessage)): ?>
    <p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>

<form action="<?php echo $this->urlWithQs ?>" method="post">
<table class="yhmwhy-table" width="100%"> 
        <tr>
            <th width="100"><label for="register_server">News Title</label></th>
            <td><input type="text" name="news_title" size="40" value="<?php echo htmlspecialchars($news_title) ?>"/></td>
        </tr>
        <tr>
            <th width="100"><label for="register_server">News Class</label></th>
            <td>
                <select name="news_class">
                    <option value="">-Select Class</option>
                    <?php foreach($news_class as $nclass):?>
                        <option value="<?php echo $nclass?>"><?php echo $nclass?></option>
                    <?php endforeach?>
                </select>
            </td>
        </tr>
        <tr>
            <th width="100"><label for="register_server">News Body</label></th>
            <td>
                <textarea name="news_body" style="width:100%" cols="70"></textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Add" /></td>
        </tr>
    </table>
</form>