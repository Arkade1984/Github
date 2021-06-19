<?php if (!defined('FLUX_ROOT')) exit;    
$this->loginRequired();
?>
   
<h2>News MS</h2>
<table class="yhmwhy-table" width="100%"> 
    <tr>
        <th>Title</th>
        <th>Class</th>    
        <th>Author</th>    
        <th>Date Posted</th>
        <th>Action</th>    
    </tr>
    <?php foreach($news as $nrow):?>
    <tr>
        <td><?php echo $nrow->news_title?></td>
        <td><?php echo $nrow->news_class?></td>
        <td><?php echo $nrow->news_author?></td>
        <td><?php echo date('d-m-Y',strtotime($nrow->news_dateposted))?></td>
        <td>
            <a href="<?php echo $this->url('news', 'edit', array('id' => $nrow->news_id)); ?>">Edit</a> |
            <a href="<?php echo $this->url('news', 'delete', array('id' => $nrow->news_id)); ?>" onclick="return confirm('Are you sure do you want to delete');">Delete</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>