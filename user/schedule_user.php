<?php include '../includes/config.php'; ?>
<?php include '../includes/header.php'; ?>


<section class="vh-100" style="background-color: #470ab1;">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
        	<h1><center><i style="color: white; font-size: 1.5em;"></i><i style="color: white"> Schedule </h1></center>
			<table class="table table-dark table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Permutation</th>
			      <th scope="col">IP Address</th>
			      <th scope="col">Timestamp</th>
			      <th scope="col">status</th> 
			      <th scope="col">Noti</th> 
			      <th scope="col">Delete</th>

			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>netbytesec.com</td>
			      <td>192.168.56.109</td>
			      <td>22:00</td>
			      <td>active</td>
			      <td class="actions" data-th="">
                    <a href="/notification.php?action=delete&id=<?php echo $user_id; ?>" class="fas fa-bell"></a> 
            </td>
            <td class="actions" data-th="">
             	<a href="/delete_noti.php?action=delete&id=<?php echo $user_id; ?>" class="fas fa-trash"></a>
            </td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>netbytesec.ga</td>
			      <td>103.16.182.3</td>
			      <td>12:00</td>
			      <td>active</td>
			      <td class="actions" data-th="">
                    <a href="/add_noti.php<?php echo $user_id; ?>" class="fas fa-bell"></a>
                  </td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td colspan="2">netbytesec.ml</td>
			      <td>@twitter</td>
			      <td>not active</td>
			      <td class="actions" data-th="">
                    <a href="/notification.php?action=delete&id=<?php echo $user_id; ?>" class="fas fa-bell"></a>
                  </td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
 </div>
</section>

<?php include '../includes/footer.php'; ?>

</body>
</html>