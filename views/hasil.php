<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $this->session->userdata('username') ?></td>
      <td><?php echo $this->session->userdata('password') ?></td>
      <td><a href="index.html"><button type="button" class="btn btn-primary">Edit</button></a></td>
    </tr>
  </tbody>
</table>
	</div>
</body>
</html>