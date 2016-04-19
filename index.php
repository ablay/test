<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="cssjs/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="cssjs/jquery-1.7.min.js"></script>
		<title>title</title>
    </head>
	<body>
	<?php
	$news_col = 10;
	?>
		<div class="wrap">
			<div class="header">
				<a href="?"><img src="images/1392263233.png" class="logo" /></a>
			</div>
			<div class="kaznet_blog">
				<div class="title">Қазконтент ресми сайтында жарияланған жазбалар</div>
				<div class="scroll_box">
					<?php
						$xml = simplexml_load_file('http://kzcontent.kz/index.php/janaliktar.feed?type=rss');
						$i = 0;
						$k = 0;
						while(count($xml->channel->item) > $i){
							$post[$k]['title'] = (string) $xml->channel->item[$i]->title;
							$post[$k]['link'] = (string) $xml->channel->item[$i]->link;
							$post[$k]['pubDate'] = strtotime($xml->channel->item[$i]->pubDate);
							$post[$k]['site'] = 'kzcontent';
							
							$i++;
							$k++;
						}
						$i = 0;
						foreach($post as $key => $val){
							$sort_arr[$val['pubDate']] = $key;
						}
						foreach($sort_arr as $key => $arr_id){
							if($i >= $news_col){
								break;
							}
							echo '<div class="date">'.date('d.m.Y, H:i', $post[$arr_id]['pubDate']).'</div><a href="'.$post[$arr_id]['link'].'" title="'.$post[$arr_id]['site'].'" target="_blank"><img src="images/'.$post[$arr_id]['site'].'_favicon.png" />'.$post[$arr_id]['title'].'</a>';
							$i++;
						}
					?>
				</div>
			</div>
			<div class="kaznet_blog">
				<div class="title">Bnews.kz сайтында жазияланған соңғы жаңалықтар</div>
				<div class="scroll_box">
					<?php
						$xml = simplexml_load_file('http://bnews.kz/news/default/rss');
						$i = 0;
						$k = 0;
						while(count($xml->channel->item) > $i){
							$post[$k]['title'] = (string) $xml->channel->item[$i]->title;
							$post[$k]['link'] = (string) $xml->channel->item[$i]->link;
							$post[$k]['pubDate'] = strtotime($xml->channel->item[$i]->pubDate);
							$post[$k]['site'] = 'bnews';
							
							$i++;
							$k++;
						}
						$i = 0;
						foreach($post as $key => $val){
							$sort_arr[$val['pubDate']] = $key;
						}
						foreach($sort_arr as $key => $arr_id){
							if($i >= $news_col){
								break;
							}
							echo '<div class="date">'.date('d.m.Y, H:i', $post[$arr_id]['pubDate']).'</div><a href="'.$post[$arr_id]['link'].'" title="'.$post[$arr_id]['site'].'" target="_blank"><img src="images/'.$post[$arr_id]['site'].'_favicon.png" />'.$post[$arr_id]['title'].'</a>';
							$i++;
						}
					?>
				</div>
			</div>
			<div class="kaznet_blog">
				<div class="title">Baq.kz сайтында жазияланған соңғы жаңалықтар</div>
				<div class="scroll_box">
					<?php
						$xml = simplexml_load_file('http://baq.kz/kk/rss');
						$i = 0;
						$k = 0;
						while(count($xml->channel->item) > $i){
							$post[$k]['title'] = (string) $xml->channel->item[$i]->title;
							$post[$k]['link'] = (string) $xml->channel->item[$i]->link;
							$post[$k]['pubDate'] = strtotime($xml->channel->item[$i]->pubDate);
							$post[$k]['site'] = 'baq';
							
							$i++;
							$k++;
						}
						$i = 0;
						foreach($post as $key => $val){
							$sort_arr[$val['pubDate']] = $key;
						}
						foreach($sort_arr as $key => $arr_id){
							if($i >= $news_col){
								break;
							}
							echo '<div class="date">'.date('d.m.Y, H:i', $post[$arr_id]['pubDate']).'</div><a href="'.$post[$arr_id]['link'].'" title="'.$post[$arr_id]['site'].'" target="_blank"><img src="images/'.$post[$arr_id]['site'].'_favicon.png" />'.$post[$arr_id]['title'].'</a>';
							$i++;
						}
					?>
				</div>
			</div>
			<div style="clear: both;"></div>
			<div class="kinostan">
				<iframe src="http://strategy2050.kz/ru/informer/vinformer#horizontal" width="100%" height="161" frameborder="0" vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
			</div>
			<div style="clear: both;"></div>
			<div class="kaznet_blog">
				<div class="title">El.kz сайтында жазияланған соңғы жаңалықтар</div>
				<div class="scroll_box">
					<?php
						$xml = simplexml_load_file('http://el.kz/m/articles/act_rss/');
						$i = 0;
						$k = 0;
						while(count($xml->channel->item) > $i){
							$post[$k]['title'] = (string) $xml->channel->item[$i]->title;
							$post[$k]['link'] = (string) $xml->channel->item[$i]->link;
							$post[$k]['pubDate'] = strtotime($xml->channel->item[$i]->pubDate);
							$post[$k]['site'] = 'el';
							
							$i++;
							$k++;
						}
						$i = 0;
						foreach($post as $key => $val){
							$sort_arr[$val['pubDate']] = $key;
						}
						foreach($sort_arr as $key => $arr_id){
							if($i >= $news_col){
								break;
							}
							echo '<div class="date">'.date('d.m.Y, H:i', $post[$arr_id]['pubDate']).'</div><a href="'.$post[$arr_id]['link'].'" title="'.$post[$arr_id]['site'].'" target="_blank"><img src="images/'.$post[$arr_id]['site'].'_favicon.png" />'.$post[$arr_id]['title'].'</a>';
							$i++;
						}
					?>
				</div>
			</div>
			<div class="kaznet_blog">
				<div class="title">E-history.kz сайтында жазияланған соңғы жаңалықтар</div>
				<div class="scroll_box">
					<?php
						$opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
						$context = stream_context_create($opts);
						$header = file_get_contents('http://e-history.kz/kz/rss',false,$context);
						
						$xml = simplexml_load_string($header);
						$i = 0;
						$k = 0;
						while(count($xml->channel->item) > $i){
							$post[$k]['title'] = (string) $xml->channel->item[$i]->title;
							$post[$k]['link'] = (string) $xml->channel->item[$i]->link;
							$post[$k]['pubDate'] = strtotime($xml->channel->item[$i]->pubDate);
							$post[$k]['site'] = 'ehistory';
							
							$i++;
							$k++;
						}
						$i = 0;
						foreach($post as $key => $val){
							$sort_arr[$val['pubDate']] = $key;
						}
						foreach($sort_arr as $key => $arr_id){
							if($i >= $news_col){
								break;
							}
							echo '<div class="date">'.date('d.m.Y, H:i', $post[$arr_id]['pubDate']).'</div><a href="'.$post[$arr_id]['link'].'" title="'.$post[$arr_id]['site'].'" target="_blank"><img src="images/'.$post[$arr_id]['site'].'_favicon.png" />'.$post[$arr_id]['title'].'</a>';
							$i++;
						}
					?>
				</div>
			</div>
			<div class="kaznet_blog">
				<div class="title">Sanamaq.kz сайтында жазияланған соңғы жаңалықтар</div>
				<div class="scroll_box">
					<?php
						$xml = simplexml_load_file('http://sanamaq.kz/rss.xml');
						$i = 0;
						$k = 0;
						while(count($xml->channel->item) > $i){
							$post[$k]['title'] = (string) $xml->channel->item[$i]->title;
							$post[$k]['link'] = (string) $xml->channel->item[$i]->link;
							$post[$k]['pubDate'] = strtotime($xml->channel->item[$i]->pubDate);
							$post[$k]['site'] = 'sanamaq';
							
							$i++;
							$k++;
						}
						$i = 0;
						foreach($post as $key => $val){
							$sort_arr[$val['pubDate']] = $key;
						}
						foreach($sort_arr as $key => $arr_id){
							if($i >= $news_col){
								break;
							}
							echo '<div class="date">'.date('d.m.Y, H:i', $post[$arr_id]['pubDate']).'</div><a href="'.$post[$arr_id]['link'].'" title="'.$post[$arr_id]['site'].'" target="_blank"><img src="images/'.$post[$arr_id]['site'].'_favicon.png" />'.$post[$arr_id]['title'].'</a>';
							$i++;
						}
					?>
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
		<p>for git</p>
	</body>
</html>