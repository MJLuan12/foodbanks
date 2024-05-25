<?php
	include("connect.php");
?>
<html>
	<body>
		<ul>
			<li><a href="index.php?pg=main">Homepage</a></li>
			<li><a href="index.php?pg=pantry">My Virtual Pantry</a></li>
			<li><a href="index.php?pg=community">Community</a></li>
			<li><a href="index.php?pg=preserve">Food Preservation</a></li>
			<li><a href="index.php?pg=about">About Us</a></li>
			<li><a href="index.php?pg=account">My Account</a></li>
		</ul>
		<hr>
		<div style="height:300px;width:600px;border:1px solid black;">
			<?php
			if($pg == "main")include("main.php");
			else if($pg == "pantry")include("pantry.php");
			else if($pg == "community")include("community.php");
			else if($pg == "preserve")include("preserve.php");
			else if($pg == "about")include("about.php");
			else if($pg == "account")include("account.php");
			?>
		</div>
		<hr/>
		<ul>
			<li><a href="index.php?pg=main">Homepage</a></li>
			<li><a href="index.php?pg=pantry">My Virtual Pantry</a></li>
			<li><a href="index.php?pg=community">Community</a></li>
			<li><a href="index.php?pg=preserve">Food Preservation</a></li>
			<li><a href="index.php?pg=about">About Us</a></li>
			<li><a href="index.php?pg=account">My Account</a></li>
		</ul>
	</body>
</html>