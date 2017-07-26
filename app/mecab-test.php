<html>
<head>
<title>PHP Mecab Test</title>
</head>
 
<body>
<?php
$str = "完璧な文章などといったものは存在しない。完璧な絶望が存在しないようにね。";
 
echo $str." の形態素解析:<br><br>";
 
$mecab = new \MeCab\Tagger();
$nodes = $mecab->parseToNode($str);
 
foreach ($nodes as $i) {
        $word = $i->getSurface();
        $info = $i->getFeature();
        echo $word." ".$info."<br>";
}
?>
</body>
</html>