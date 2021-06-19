<?php if (!defined('FLUX_ROOT')) exit;       
$title = 'Add News';

$news = Flux::config('FluxTables.NewsTable');
$news_title = trim($params->get('news_title'));
$news_body = trim($params->get('news_body'));
$news_class = trim($params->get('news_class'));
$user_id = $session->account->userid;

if(count($_POST))
{
    if($news_title == '')
    {
        $errorMessage = Flux::Message('NewsTitleError');
    }
    elseif($news_body == '')
    {
        $errorMessage = Flux::Message('NewsBody');
    }
    elseif($news_class == '')
    {
        $errorMessage = Flux::Message('NewsClass');
    }
    else
    {
        $sql = "INSERT INTO {$server->loginDatabase}.$news (news_class,news_title, news_body, news_author, news_dateposted)";
        $sql .= "VALUES (?, ?, ?, ?, NOW())"; 
        $sth = $server->connection->getStatement($sql);
        $sth->execute(array($news_class,$news_title,$news_body,$user_id));
        
        $session->setMessageData(Flux::message('NewsAdded'));
        if ($auth->actionAllowed('news', 'index')) {
            $this->redirect($this->url('news','index'));
        }
        else {
            $this->redirect();
        }
                  
    }
}
?>