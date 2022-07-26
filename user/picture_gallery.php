<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b>ছবি গ্যালারী</b>
					</div>
					<div class="body-text">
						<div class="row">
							<div class="col-6">
								<div class="picture-box">
									<div uk-lightbox id="photo-box">
									    <a class="uk-button uk-button-default" href="../assets/image/photoGallery/1.jpg">
									    	<img src="../assets/image/photoGallery/1.jpg" class="img-fluid">
									    	<span>বৃক্ষরোপণ অভিযান</span>
									    </a>
									</div>
								</div>
							</div>
						</div>
						<div>
        <samp>
            <span>Current page:</span>
            <span id="page-number-1"></span>
        </samp>

        <div id="pagination-1"></div>
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