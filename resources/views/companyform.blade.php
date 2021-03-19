<!-- <form action="submit" method="POST">
	@csrf

<input type="text" name="name" placeholder="company name">
<br><br>
<input type="text" name="location" placeholder="company address">
<br><br>
<button type="submit">insert</button>
</form> -->

<form action="update" method="POST">
	@csrf

<input type="text" name="name" placeholder="company name">
<br><br>
<input type="text" name="location" placeholder="company address">
<br><br>
<button type="submit">update</button>
</form>
