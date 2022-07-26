<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b>ইতিহাস</b>
					</div>
					<?php 
					$sql = $db->link->query("SELECT * FROM history WHERE `id`=1");
					if($sql)
					{
						$showdata = $sql->fetch_assoc();
					}
					?>
					<div class="body-text">
						<?php echo $showdata['description']; ?>
					</div>
				</div>
			</div>
		</div>

		<!-- left body -->
		<div class="col-lg-3 col-md-3 col-12">
			<?php include("right_body.php"); ?>
		</div>
		<!-- left body -->

	</div>
</div>
<?php 
include 'footer.php';
?>