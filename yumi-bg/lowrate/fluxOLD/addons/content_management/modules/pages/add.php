<?php if (!defined('FLUX_ROOT')) exit;       
$title = 'Add Page';

$pages = Flux::config('FluxTables.PagesTable'); 
$page_title = trim($params->get('page_title'));
$page_body = trim($params->get('page_body'));
$page_path = trim($params->get('page_path'));

if(count($_POST))
{
    if($page_title == '')
    {
        $errorMessage = Flux::Message('PageTitleError');
    }
    elseif($page_body == '')
    {
        $errorMessage = Flux::Message('PageBodyError');    
    }
    elseif($page_path == '')
    {
        $errorMessage = Flux::Message('PagePathError');
    }                                                  
    else
    {
        $sql = "INSERT INTO {$server->loginDatabase}.$pages (page_path,page_title,page_body)";
        $sql .= "VALUES (?,?,?)";
        $sth = $server->connection->getStatement($sql);
        $sth->execute(array($page_path,$page_title,$page_body)); 

        $session->setMessageData(Flux::message('PagesAdded'));
        if ($auth->actionAllowed('pages', 'index')) {
            $this->redirect($this->url('pages','index'));
        }
        else {
            $this->redirect();
        }      
    }
}
?>