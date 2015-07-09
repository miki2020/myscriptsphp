<?
// exec('zip -r zipfile.zip /'.$_GET['zip'], $out, $rv);
exec('unzip '.$_GET['zip'], $out, $rv);
//exec('rm -rf '.$_GET['f'], $out, $rv);
print"<h1>$rv</h1>";
print"<pre>";
print_r($out);
print"</pre>";
?>
