<!DOCTYPE html>
<html>

<head>

<!--<meta charset="UTF-8">
<meta name="description" content="DEUTERIUM - Website design, Web Application Development, Automation, Intelligent Software, Software Products, Consulting."/>
<meta name="robots" content="noodp,noydir" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="library/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="library/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="library/font-awesome-4.5.0/css/font-awesome.min.css">
<script src="library/js/jquery-2.2.4.min.js"></script>
<script src="library/js/bootstrap.min.js"></script>
<script src="library/js/validation.js"></script>-->
<script src="js/create-account.js"></script>

<link rel="stylesheet" type="text/css" href="css/web-design-fourth-sec.css">
</head>

<body>

<div class="row fourth-sec-row">

<div class="fourth-sec-component-pos">
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#get-started-modal">Get Started</button>
<p class="text-muted"> (No Debit/Credit Card Required) </p>
</div>

<div class="fourth-sec-component-pos">
<p class="fourth-sec-text-styling-1"> OR </p>
</div>

<div class="fourth-sec-component-pos">
<p class="fourth-sec-text-styling-2"><a> Contact Us </a> for more information.</p>
</div>

</div>


<!-- Modal -->
<div class="modal fade" id="get-started-modal" tabindex="-1" role="dialog" aria-labelledby="get-started-Modal-Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="get-started-Modal-Label">Get Started</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="container-fluid">

		      <form data-toggle="validator" novalidate="true" id="create-account" name="create-account">
		      	<div id="message-placeholder">
		      	<div class="form-group row has-feedback">
		      		<div>
				    	<input class="form-control" type="email" id="email-input" name="email-input" placeholder="Email" data-error="Email is mandatory, please enter a valid email." required>
				    	<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			    	</div>
			    	<div class="help-block with-errors"></div>
				</div>
		      	<div class="form-group row has-feedback">
			    	<div>
				    	<input class="form-control" type="tel" id="contact-number-input" name="contact-number-input" placeholder="Contact Number" data-error="Contact Number is mandatory." required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<div class="help-block with-errors"></div>
				</div>
		      	<div class="form-group row has-feedback">
		      		<div>
				    	<input class="form-control" type="text" id="contact-name-input" name="contact-name-input" placeholder="Your Name (or) Business Name" data-error="Name is mandatory." required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			    	</div>
					<div class="help-block with-errors"></div>
				</div>
		      	<div class="form-group row">
			    	<select class="form-control" id="package-select" name="package-select">
  						<option value="1">Package 1</option>
  						<option value="2">Package 2</option>
  						<option value="3">Package 3</option>
  						<option value="custom">I want a Custom Package...</option>
					</select>
				</div>
				<div class="form-group row">
					<div>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Create Account</button>
					</div>
				</div>
				</div>
		      </form>

		</div>
  	  </div>

      </div>

<!--      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div> -->

    </div>
  </div>
</div>



</body>