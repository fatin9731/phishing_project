<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

<section class="vh-100" style="background-color: #470ab1;">
<div class="grandParentContaniner">
<div class="parentContainer">
	<form method="POST">
		<div class="form-group">
		<div class="mb-3">
              <h1><center><i style="color: white; font-size: 1.5em;"></i><i style="color: white"> Delete Schedule </h1></center>
    		<label for="InputEmail4">Permutation</label>
    		<input type="email" name="email" class="form-control" id="InputEmail4">
 		</div>
  		<div class="mb-3">
    		<label for="InputPassword4">Ip Address</label>
    		<input type="password"  name="password" class="form-control" id="InputPassword4">
  		</div>
  		<div class="mb-3">
    		<label for="InputPassword4">Timestamp</label>
    		<input type="password"  name="password" class="form-control" id="InputPassword4">
  		</div>
  		<button type="submit" class="btn btn-primary">Delete Schedule</button>
  		</div>
	</form>
</div>
</div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>