<?php include("common.html"); ?>
    
    <div id="content"> 
	<div id="content-left">
    <p> 
    Hi all, This is Gaurav Kumar. I just completed final year, M.Sc(tech) Information Systems from BITS pilani.
    </p>
    
    </div>
    <div id="content-right">
<div id="contenta">
<div id="content-lefta">
<?php
    $url='http://www.moneycontrol.com/sensex/bse/sensex-live';
$ch = curl_init();
$timeout = 50;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$data = curl_exec($ch);
$part = explode('</div>',$data,69) ;
$val = explode('<div>',$part[67]);

echo "<html><body> SENSEX <br/></body> </html>" ;
echo $val[0] ;
$val = explode('<p',$part[68]);
echo $val[0] ;
curl_close($ch);
?>
</div>
</div>
<div id="content-righta">
<?php
$url='http://www.moneycontrol.com/nifty/nse/nifty-live';
$ch = curl_init();
$timeout = 50;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$data = curl_exec($ch);
$part = explode('</div>',$data,69) ;
$val = explode('<div>',$part[67]);

echo "<html><body>NIFTY<br/> </body> </html>" ;
echo $val[0] ;
$val = explode('<p',$part[68]);
echo $val[0] ;


curl_close($ch);

?>
    </div>  
	</div> 
</div>
</div>
</div>
  <?php include("footer.html"); ?> 
</div>
</body>
</html>
