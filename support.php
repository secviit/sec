<?php
 include('include/header.php');
 include('include/navbar.php');
?>
<div class="hero"style="height:40vh;">
	<p class="hero-text"style="top: 25%;">Support</p>
</div>
<div class="container content">
<?php

if(isset($_SESSION['success'])&&$_SESSION['success']!=""){
	echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].'</h2>';
	unset($_SESSION['success']);
}
if(isset($_SESSION['status'])&&$_SESSION['status']!=""){
	echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
	unset($_SESSION['status']);
}
?>
	<div class="well offset-2">
		<section>
			<p> <strong>What is SEC?</strong><br><br>
			SEC is an interactive cell to help students step out of their comfort zone and perform things they
			think are not their cup of tea. The cell aims to empower students and keep them self-motivated,
			self-determined by focusing on soft skills, communication skills, personal growth, team work and
			analyse and understand their issues.</p>

		
			<p>  <strong>Why SEC?</strong><br><br>
			Having the process to follow is good but executing it turns the concept into reality. SEC provides the
			platform to practice the skills and enhance the abilities, recognize their strengths and practice them
			regularly as well as focus and conquer their weaknesses.</p>	  

		
			<p><strong>How SEC works?</strong><br><br>
			To build anything we require a plan for development. SEC aims to work with each and every
			individual to lead them to a confident tomorrow by shaping their personality, communication skills
			and organizing their strengths in a positive direction today. SEC will first conduct the sessions based
			on these skills, identify its ratio according to particular individual and then focus on particular skill as
			per the analysis done.
			</p>
		</section> 	
	</div>
	<div class="well offset-2">
		<section>
			<div class="container-fluid pt-5 ">
				<div class="row">
					<div class="col-lg-3">
					</div>
					<div class="col-lg-6">
						<form action="code.php">
							<div class="row">
								<div class="col">
									<div class="form-group pb-2">
										<input type="text" name="name"class="form-control btn-custom px-3 py-3" placeholder="Name" required>
									</div>
								</div>
								<div class="col">
									<div class="form-group pb-2">
										<input type="email" name="email" class="form-control btn-custom px-3 py-3" placeholder="Email" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control btn-custom" name="query"rows="3" placeholder="Message" required></textarea>
							</div>
							<p class="text-center"><button type="Submit"  name="query_btn"class="btn btn-custom px-3 py-2 submit">Submit</button></p>
						</form>
					</div>
					<div class="col-lg-3">
					</div>
				</div>
			</div>
		</section> 	
	</div>
</div>

<?php
 include('include/footer.php');
 include('include/scripts.php');
?>