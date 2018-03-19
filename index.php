<?php
	include('header.php');
?>
<body>
	<div class="fh5co-hero">
		<div class="fh5co-overlay"></div>
		<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
			<div class="desc animate-box">
				<h2>Create <strong>Good</strong> Things</h2>
				<span>Lovely Crafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FREEHTML5.co</a></span>
				<span><a class="btn btn-primary btn-lg" href="#">Get Started</a></span>
			</div>
		</div>
	</div>
	<!-- end:header-top -->

	<main id="fh5co-main" role="main">
				<div class="container pb-lg">

					<div class="row">
						<div class="col-md-12">
							<div class="fh5co-heading text-center">
									<h2 class="fh5co-heading-title">Our Services <span class="border"></span></h2>
									<!-- <h3 class="fh5co-heading-intro">Design is the creation of a plan or convention for the construction of an object or a system as in architectural blueprints, engineering drawings, business processes, circuit diagrams and sewing patterns.</h3> -->
								</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-main-service">
								<!--
								“Block-level” links in HTML5
								http://html5doctor.com/block-level-links-in-html-5/
								 -->
								<a href="#" class="fh5co-block-links text-center">
									<div class="icon-circle">
										<i class="ti-settings"></i>
									</div>
									<h2>Technical Development</h2>
									<p>Design is the creation of a plan or convention for the construction of an object or a system.</p>
									<p><span class="learn-more">Learn more</span></p>
								</a>
							</div>
						</div>
						<div class="col-md-4">

							<div class="fh5co-main-service">
								<a href="#" class="fh5co-block-links text-center">
									<div class="icon-circle">
										<i class="ti-ruler-pencil"></i>
									</div>
									<h2>User Interface Design</h2>
									<p>Design is the creation of a plan or convention for the construction of an object or a system.</p>
									<p><span class="learn-more">Learn more</span></p>
								</a>
							</div>

						</div>
						<div class="col-md-4">

							<div class="fh5co-main-service">
								<a href="#" class="fh5co-block-links text-center">
									<div class="icon-circle">
										<i class="ti-mobile"></i>
									</div>
									<h2>Mobile Apps Development</h2>
									<p>Design is the creation of a plan or convention for the construction of an object or a system.</p>
									<p><span class="learn-more">Learn more</span></p>
								</a>
							</div>

						</div>

					</div>
				</div>
			</main>

			<button type="button" name="button" class="waves-effect waves-light btn modal-trigger blue" href="#modal1">Modal</button>

			<div id="modal1" class="modal">
				<div class="modal-content">
					<div class="row">
						<form class="" action="" method="post">
							<div class="input-field col s6">
								<input id="1" type="text" name="identifiant" class="validate" value="">
								<label for="1">Identifiant</label>
							</div>
							<div class="input-field col s6">
								<input id="2" type="text" name="mdp" class="validate" value="">
								<label for="2">Mot de Passe</label>
							</div>
						</form>
					</div>
				</div>
			</div>


			<script>$('.ui.modal')
			  .modal()
			;</script>
	<div class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Modal Title
  </div>
  <div class="image content">
    <div class="image">
      An image can appear on left or an icon
    </div>
    <div class="description">
      A description can appear on the right
    </div>
  </div>
  <div class="actions">
    <div class="ui button">Cancel</div>
    <div class="ui button">OK</div>
  </div>
</div>

	<?php
		include('footer.php');
	?>
	<script>
	$('.special.modal')
		.modal({
			centered: false
		})
		.modal('show')
	;
	</script>

</body>
</html>
