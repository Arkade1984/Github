<?php if (!defined('FLUX_ROOT')) exit;
$title = Flux::message('EditPage');

$pages = Flux::config('FluxTables.PagesTable');
$id = $params->get('id');
$sql = "SELECT * FROM {$server->loginDatabase}.$pages WHERE page_id = ?";
$sth = $server->connection->getStatement($sql);
$sth->execute(array($id));

$page = $sth->fetch();

if($page)
{
    $page_title = $page->page_title;
    $page_path = $page->page_path;
    $page_body = $page->page_body;
    
    if(count($_POST))
    {
        $page_title = trim($params->get('page_title'));
        $page_body = trim($params->get('page_body'));
        $page_path = trim($params->get('page_path'));
        
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
            $sql  = "UPDATE {$server->loginDatabase}.$pages SET ";
            $sql .= "page_path=?,page_title=?,page_body=?";
            $sql .= "WHERE page_id = ?";
            
            $sth = $server->connection->getStatement($sql);
            $sth->execute(array($page_path,$page_title,$page_body,$id)); 

            $session->setMessageData(Flux::message('PagesUpdated'));
            if ($auth->actionAllowed('pages', 'index')) {
                $this->redirect($this->url('pages','index'));
            }
            else {
                $this->redirect();
            }      
        }
    }
}
?>