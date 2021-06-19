<?php if (!defined('FLUX_ROOT')) exit;
$this->loginRequired();   
?>
<h2>Content Management System</h2>
<p>This content management system is an Add-on of Flux Control Panel. This allows you to add, edit, delete pages.</p>
<table class="horizontal-table" width="100%">  
    <tr>
        <th><span>Page Title</span></th>
        <th>Action</th>    
    </tr>
    <?php foreach($pages as $prow):?>
    <tr >
        <td><?php echo $prow->page_title?></td>
        <td align="center">
            <a href="<?php echo $this->url('pages', 'edit', array('id' => $prow->page_id)); ?>">Edit</a> |
            <a href="<?php echo $this->url('pages', 'delete', array('id' => $prow->page_id)); ?>" onclick="return confirm('Are you sure do you want to delete');">Delete</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>