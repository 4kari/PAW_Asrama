<?php 
$this->load->view('user/musahil/header');
?>
<H1>Anda Telah Log in Sebagai Musahil</H1>
<H3>dengan user <?php echo $_SESSION['user']; ?></H3><br>
<a href="<?= site_url('login/logout'); ?>"><input class="btn btn-primary" value="Logout" type="submit"></a>
</body>
</html>