<?php include("common.html"); ?>
<div id="content">
	<div id="content-left">
<p>
Read,learn and share this
</p>
<br />
<a href="http://docs.google.com/gview?url=gauravbits.com/finance/powerpoint-presentation-investment-basics2732.ppt">powerpoint-presentation-investment-basics2732.ppt</a><br /><br />

<a href="http://www.youtube.com/watch?v=HkD2JO0ZgRM" target="_blank">Credit CRISIS Animation Sub Prime Banks Brokers Mortgages Foreclosure Money and Debt</a><br />
<br /><a href="./the_richest_man_in_babylon.pdf" target="_blank">the_richest_man_in_babylon.pdf</a><br />
<br /><a href="https://speakerdeck.com/keeper575/the-impossible-question">the impossible question</a>
</div>

<div id="content-right">
<?php
$url='http://www.moneycontrol.com/terminal/';
$ch = curl_init();
$timeout = 50;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$data = curl_exec($ch);
$part = explode('Sensex</b>',$data,6) ;
//echo $part[0];
$val = explode('</div>',$part[1]);

echo "<html><body> SENSEX <br/></body> </html>" ;
echo $val[0] ;
//$val = explode('',$part[68]);
//echo $val[1] ;
curl_close($ch);
?>
</div>
</div>
</div>
<p>
<br /><br />
<h5>Currently under experiment</h5>
<div class="coinbase-button" data-code="4a4c73043fae12c2443c01f3db270548" data-button-style="donation_large"></div><script src="https://coinbase.com/assets/button.js" type="text/javascript"></script>
</p>
</body>
</html>
