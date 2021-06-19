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


$dbprefix = 'smf_';
$sql = new Connection('127.0.0.1','root','maazfaith786','boardhigh'); //events=6, news=4

$sql->Query('SELECT MAX(poster_time) FROM '.$dbprefix.'messages WHERE id_board = 2 OR id_board = 3 OR id_board = 5');
$sql->GetResults($results);
$lastModificationDate = date('r',$results[0]['MAX(poster_time)']);
echo <<<EOF
<?xml version="1.0"?>
<?xml-stylesheet type="text/css" href="rss.css"?>
<rss version="2.0">
	<channel>
		<title>CavaleRO Highrate</title>
		<link>http://www.cavalero.us/high/</link>
		<description/>
		<language>en-us</language>
		<copyright>Copyright 2011  Cavalero.us</copyright>
		<lastBuildDate>{$lastModificationDate}</lastBuildDate>
EOF;

$sql->Query('SELECT body, subject, poster_time, id_topic FROM '.$dbprefix.'messages WHERE id_board = 2 ORDER BY poster_time DESC LIMIT 0,3');
$results = null;
$sql->GetResults($results);
if($results != null) {
	foreach($results as $result) {
	$date = date("r",$result['poster_time']);
	$link = 'http://cavalero.us/boardhigh/index.php?topic='.$result['id_topic'];
	echo <<<EOF
		<item>
			<title>{$result['subject']}</title>
			<link>{$link}</link>
			<description>{$result['body']}</description>
			<pubDate>{$date}</pubDate>
			<guid>{$link}</guid>
			<category>News</category>
		</item>
EOF;
	}
}
$sql->Query('SELECT body, subject, poster_time, id_topic FROM '.$dbprefix.'messages WHERE id_board = 3 ORDER BY poster_time DESC LIMIT 0,3');
$results = null;
$sql->GetResults($results);
if($results != null) {
	foreach($results as $result) {
	$date = date("r",$result['poster_time']);
	$link = 'http://cavalero.us/boardhigh/index.php?topic='.$result['id_topic'];
	echo <<<EOF
		<item>
			<title>{$result['subject']}</title>
			<link>{$link}</link>
			<description>{$result['body']}</description>
			<pubDate>{$date}</pubDate>
			<guid>{$link}</guid>
			<category>Updates</category>
		</item>
EOF;
	}
}

$sql->Query('SELECT body, subject, poster_time, id_topic FROM '.$dbprefix.'messages WHERE id_board = 5 ORDER BY poster_time DESC LIMIT 0,3');
$results = null;
$sql->GetResults($results);
if($results != null) {
	foreach($results as $result) {
	$date = date("r",$result['poster_time']);
	$link = 'http://cavalero.us/boardhigh/index.php?topic='.$result['id_topic'];
	echo <<<EOF
		<item>
			<title>{$result['subject']}</title>
			<link>{$link}</link>
			<description>{$result['body']}</description>
			<pubDate>{$date}</pubDate>
			<guid>{$link}</guid>
			<category>Events</category>
		</item>
EOF;
	}
}


echo <<<EOF
	</channel>
</rss>
EOF;

?>