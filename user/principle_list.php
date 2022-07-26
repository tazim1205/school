<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="divider">
					<div class="left-body-boxtitle">
						<i class="fa fa-caret-right"></i><b>অধ্যক্ষ তালিকা</b><span style="color: yellow;"></span>
					</div>
					<div class="teacher-info-box">
						<div class="row">
							<div class="col-6">
								<div class="teacher_info-single-box">
									<div class="teacher_image">
										<img src="../assets/image/teacher.jpg" class="img-fluid">
									</div>
									<div class="information">
										<table class="table table-bordered">
											<tr>
												<td>Name</td>
												<td>Mostafizur Rahman</td>
											</tr>
											<tr>
												<td>Designation</td>
												<td>Lecturer</td>
											</tr>
											<tr>
												<td>Mobile</td>
												<td>+8801575434262</td>
											</tr>
											<tr>
												<td>Email</td>
												<td>info.sbit@gmail.com</td>
											</tr>
											<tr>
												<td colspan="2" style="text-align:center;">
													<a href="view_teacherinfo.php" class="btn btn-outline-success">Details</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
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