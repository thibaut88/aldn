<?php
class Helper
{
	public function title($txt){
		return "<title>$txt</title>";
	}
	public function link($txt,$options){	
		return "<a href='".$options['href']."'title='".$options['title']."'alt='".$options['alt']."'>".$txt."</a>";
	}
	public function image(array $vals,$width=auto,$height=auto){
		return "<img src='".$vals['src']."' width='".$width."' height='".$height."' alt='".$vals['alt']."' border='".$vals['border']."'>";
	}

	public function heading($txt,$type){
		return '<h'.$type.'>'.$txt.'</h'.$type.'>';
	}
	public function script($script){
		return "<script type='text/javascript'>$script</script>";
	}
	public function listU($list,$addTitle, $type='none'){
		$txt = isset($addTitle)?"<h1>$addTitle</h1><ul style='list-style-type:".$type."'>":"<ul style='list-style-type:".$type."'>";
		for($i=0;$i<count($list);$i++){
		$txt .= '<li>'.$list[$i].'</li>';}
		$txt .= '</ul>';
		return $txt;
		}

}

$helper = new Helper();

$array=['title'=>'machin','alt'=>'machiin','href'=>'http://www.google.fr'];
echo $helper->link('un lien',$array);
echo $helper->heading('titre de niveau 2',2);
$vals=['src'=>'../ressources/images/partenaires/android.png','alt'=>'alternatif texte','border'=>'2'];
echo $helper->image($vals,"250px","250px");
$script = "document.getElementById('p').style.color='red';";
echo $helper->script($script);
$list =array('poj','poj','poj','gggg','gggfdspovkdpof');
echo $helper->listU($list,'Titre de niveau 1');


?>


