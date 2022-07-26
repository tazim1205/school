<?php 
include 'header.php';
?>
<style type="text/css">
	.teacher_image img{
		height: 183px;
		width: 183px;
		border-radius: 100%;
		border: 3px solid green;
	}
	.divider{
		margin-top: 0px;
	}
	.teacher_info-single-box{
		margin-top: 0px;
	}
</style>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="divider">
					<div class="teacher-info-box">
						<div class="row">
							<div class="col-12">
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
												<td>Fathers Name</td>
												<td>....</td>
											</tr>
											<tr>
												<td>Mothers Name</td>
												<td>....</td>
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
												<td>Gender</td>
												<td>Male</td>
											</tr>
											<tr>
												<td>Religion</td>
												<td>Islam</td>
											</tr>
											<tr>
												<td>Relationship</td>
												<td>Married</td>
											</tr>
											<tr>
												<td>Join Date</td>
												<td>...</td>
											</tr>
											<tr>
												<td>Present Adress</td>
												<td>Motua Chowdhury Bari, Motua, Chhagalnaiya, Feni</td>
											</tr>
											<tr>
												<td>Permenant Adress</td>
												<td>Motua Chowdhury Bari, Motua, Chhagalnaiya, Feni</td>
											</tr>
											<tr>
												<td>Education</td>
												<td>B.A (Hons), M.A-Bengali</td>
											</tr>
											<!-- <tr>
												<td colspan="2" style="text-align:center;">
													<a href="view_teacherinfo.php" class="btn btn-outline-success">Details</a>
												</td>
											</tr> -->
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