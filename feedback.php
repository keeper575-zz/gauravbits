<?php include("common.html"); ?>

<br /><br />
<br /><br />
<p align="center">
<form action="add_comment.php" method="POST">
  <label for="name">Your Name:</label>
  <input type="text" id="name" name="name" />
<br /><br />
  <label for="name">Email:</label>
  <input type="text" id="email" name="email" />
<br /><br />

  <label for="name">Your Feedback:</label>
  <textarea id="feedback" name="feedback"></textarea>
<br /><br />
  <input type="hidden" name="news_id" value="<?php echo $news_id?>"/>
  <input type="submit" value="Ok" name="save"/>
</form>
<p>
</div>
</body>
</html>


