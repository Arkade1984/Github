<?php if (!defined('FLUX_ROOT')) exit;
$title = Flux::message('NewsEditTitle');

$newss = Flux::config('FluxTables.NewsTable');
$id = $params->get('id');
$sql = "SELECT * FROM {$server->loginDatabase}.$newss WHERE news_id = ?";
$sth = $server->connection->getStatement($sql);
$sth->execute(array($id));

$news = $sth->fetch();

if($news)
{
    $news_title = $news->news_title;
    $newsclass = $news->news_class;
    $news_body = $news->news_body;
    
    if(count($_POST))
    {
        $news_title = trim($params->get('news_title'));
        $newsclass = trim($params->get('news_class'));
        $news_body = trim($params->get('news_body'));
        
        if($news_title === '')
        {
            $errorMessage = Flux::Message('NewsTitleError');
        }
        elseif($news_body === '')
        {
            $errorMessage = Flux::Message('NewsBody');
        }
        elseif($news_class === '')
        {
            $errorMessage = Flux::Message('NewsClass');
        }
        else
        {
            $sql = "UPDATE {$server->loginDatabase}.$newss SET ";
            $sql .= "news_class=?,news_title=?, news_body=?";
            $sql .= "WHERE news_id=?";
            $sth = $server->connection->getStatement($sql);
            
            $sth->execute(array($newsclass,$news_title,$news_body,$id));
            
            $session->setMessageData(Flux::message('NewsUpdated'));
            if ($auth->actionAllowed('news', 'index')) {
                $this->redirect($this->url('news','index'));
            }
            else {
                $this->redirect();
            }           
        }
    }
}
?>