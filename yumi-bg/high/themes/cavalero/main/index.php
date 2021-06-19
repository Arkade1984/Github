<?php if (!defined('FLUX_ROOT')) exit; ?>

<?php

class Connection
{
	private $hSql;
	private $queryResult = null;
	
	public function __construct($host, $user, $pass, $db)
	{
		$this->hSql = mysql_connect($host,$user,$pass);
		if(!$this->hSql)
			die(mysql_error());
		if(!mysql_select_db($db,$this->hSql))
			die(mysql_error());
	}
	
	public function Escape($str)
	{
		return mysql_real_escape_string($str);
	}
	
	public function Query($statement)
	{
		$this->queryResult = mysql_query($statement,$this->hSql);
		if(!$this->queryResult)
			die(mysql_error());
		return true;
	}
	
	public function GetRowCount()
	{
		if($this->queryResult == null)
			return 0;
		return mysql_num_rows($this->queryResult);
	}
	
	public function GetResults(&$arr)
	{
		if($this->queryResult == null)
			return 0;
		$i=0;
		for(; $row = mysql_fetch_assoc($this->queryResult); $i++) {
			$arr[$i] = $row;
		}
		return $i;
	}
	
	public function ParseSQLDump($url)
	{
		$file_content = file($url);
		foreach($file_content as $sql_line){
			if(trim($sql_line) != "" && strpos($sql_line, "--") === false){
				$this->Query($sql_line);
			}
		}
	}
	
	public function Destroy()
	{
		if($this->hSql)
			mysql_close($this->hSql);
	}
}


$dbprefix = '';
$sql = new Connection('127.0.0.1','yumitrin_board','Yumiro@1','yumitrin_board'); //events=7, news=4

$sql->Query('SELECT p.post, t.title, t.tid, t.title_seo, t.start_date FROM '.$dbprefix.'posts AS p, '.$dbprefix.'topics AS t WHERE p.topic_id = t.tid AND p.new_topic = 1 AND t.forum_id = 4 ORDER BY t.start_date DESC LIMIT 0,3');
$results = null;
$sql->GetResults($results);
echo <<<EOF
					<div id="news">
EOF;
if($results != null) {
	foreach($results as $result) {
		$date = date("o-n-j",$result['start_date']);
		$link = 'http://yumi-ro.com/forum/index.php?/forum/1-a-test-category/'.$result['tid'].'-'.$result['title_seo'];
		echo <<<EOF
						<a href="{$link}">{$result['title']}</a><span class="neu-timestamp">{$date}</span><br />
EOF;
	}
}
$sql->Query('SELECT p.post, t.title, t.tid, t.title_seo, t.start_date FROM '.$dbprefix.'posts AS p, '.$dbprefix.'topics AS t WHERE p.topic_id = t.tid AND p.new_topic = 1 AND t.forum_id = 5 ORDER BY t.start_date DESC LIMIT 0,3');
$results = null;
$sql->GetResults($results);
echo <<<EOF
					</div>
					<div id="events">
EOF;
if($results != null) {
	foreach($results as $result) {
		$date = date("o-n-j",$result['start_date']);
		$link = 'http://cavalero.us/forumhigh/index.php?/topic/'.$result['tid'].'-'.$result['title_seo'];
		echo <<<EOF
						<a href="{$link}">{$result['title']}</a><span class="neu-timestamp">{$date}</span><br />
EOF;
	}
}
echo <<<EOF
					</div>
					<div id="updates">
EOF;
$sql->Query('SELECT p.post, t.title, t.tid, t.title_seo, t.start_date FROM '.$dbprefix.'posts AS p, '.$dbprefix.'topics AS t WHERE p.topic_id = t.tid AND p.new_topic = 1 AND t.forum_id = 7 ORDER BY t.start_date DESC LIMIT 0,3');
$results = null;
$sql->GetResults($results);
if($results != null) {
	foreach($results as $result) {
		$date = date("o-n-j",$result['start_date']);
		$link = 'http://cavalero.us/forumhigh/index.php?/topic/'.$result['tid'].'-'.$result['title_seo'];
		echo <<<EOF
						<a href="{$link}">{$result['title']}</a><span class="neu-timestamp">{$date}</span><br />
EOF;
	}
}
echo <<<EOF
					</div>
EOF;

?>
