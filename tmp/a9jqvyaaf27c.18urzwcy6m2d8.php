<!--
    Author: Awesome Four (Adolfo, Alec, Bo, Keith)
    Date:   4/25/2019
    File: confirmation.html
    
    Confirmation  page.
    -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Confirmation</title>
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- Bootstrap -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet"
				href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet"
				href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
		<script src="/vendors/formvalidation/dist/js/plugins/Bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Custom css styles -->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
		<!-- Main container for confirmation page -->
		<div class="container" id="main">
			<h2>Please Confirm your information</h2>
			<hr>
			<!-- Participant Name and Contact Info -->
			<div class="flex-md-row">
				<h4>Participant Information</h4>
				<br />
				<p>
					Name: <?= ($SESSION['clientFirst']) ?> <?= ($SESSION['clientLast'])."
" ?>
					<br />
					Email and Phone: <?= ($SESSION['clientEmail']) ?>, <?= ($SESSION['clientPhone'])."
" ?>
					<br />
					Address: <?= ($SESSION['clientAddress']) ?>, <?= ($SESSION['clientCity']) ?> <?= ($SESSION['clientState']) ?> <?= ($SESSION['clientZip'])."
" ?>
				</p>
			</div>
			<!-- Provider name and contact info. -->
			<div class="flex-md-row">
				<hr>
				<h4>Provider Information</h4>
				<br />
				<p>
					Name: <?= ($SESSION['providerFirst']) ?> <?= ($SESSION['providerLast'])."
" ?>
					<br />
					Email and Phone: <?= ($SESSION['providerEmail']) ?> <?= ($SESSION['providerPhone'])."
" ?>
					<br />
					Address: <?= ($SESSION['providerAddress']) ?> <?= ($SESSION['providerCity'])."
" ?>
					<?= ($SESSION['providerState']) ?> <?= ($SESSION['providerZip'])."
" ?>
				</p>
			</div>
			<!-- Legal Guardian name and contact info. -->
			<div class="flex-md-row">
				<hr>
				<h4>Guardian Information</h4>
				<br />
				<p>
					Name: <?= ($SESSION['guardFirst']) ?> <?= ($SESSION['guardLast'])."
" ?>
					<br />
					Email and Phone: <?= ($SESSION['guardEmail']) ?> <?= ($SESSION['guardPhone'])."
" ?>
					<br />
					Address:<?= ($SESSION['guardAddress']) ?> <?= ($SESSION['guardCity'])."
" ?>
					<?= ($SESSION['guardState']) ?> <?= ($SESSION['guardZip'])."
" ?>
				</p>
			</div>
			<!-- NSA info -->
			<div class="flex-md-row">
				<hr>
				<h4>NSA Information</h4>
				<br />
				<p>
					Name: <?= ($SESSION['nsaFirst']) ?> <?= ($SESSION['nsaLast'])."
" ?>
					<br />
					Email and Phone: <?= ($SESSION['nsaEmail']) ?> <?= ($SESSION['nsaPhone'])."
" ?>
				</p>
			</div>
			<!-- Emergency contacts and their contact info. -->
			<div class="flex-md-row">
				<hr>
				<h4>Emergency Contact</h4>
				<br />
				<p>
					Emergency Contact Name: <?= ($SESSION['emergFirst']) ?><?= ($SESSION['emergLast'])."
" ?>
					<br />
					Email and Phone: <?= ($SESSION['emergPhone']) ?><?= ($SESSION['emergAltPhone'])."
" ?>
				</p>
			</div>
			<!-- Medications and Restrictions -->
			<div class="flex-md-row">
				<hr>
				<h4>Medications, Restrictions and Limitations</h4>
				<div class="row">
					<div class="col-4">

						<p>Medication and Dosage: <?php foreach (($SESSION['medications']?:[]) as $med): ?><?= ($med) ?><?php endforeach; ?></p>
					</div>
					<div class="col-4">
						<p>Frequency Taken: <?php foreach (($SESSION['frequencies']?:[]) as $freq): ?>
							<?= ($freq)."
" ?>
						<?php endforeach; ?></p>
					</div>
					<div class="col-4">
						<p>Time Taken: <?php foreach (($SESSION['times']?:[]) as $time): ?><?= ($time) ?><?php endforeach; ?></p>

						<p>Medication and Dosage:
							<?php foreach (($SESSION['medications']?:[]) as $med): ?><?= ($med) ?><?php endforeach; ?>
						</p>
					</div>
					<div class="col-4">
						<p>Frequency Taken: <?php foreach (($SESSION['frequencies']?:[]) as freq): ?><?= ($freq) ?><?php endforeach; ?> </p>
					</div>
					<div class="col-4">
						<p>Time Taken: <?php foreach (($SESSION['times']?:[]) as $time): ?><?= ($time) ?><?php endforeach; ?></p>

					</div>
				</div>
			</div>
			<div class="flex-md-row">
				<p>
					Medical Alerts: <?= ($SESSION['alerts'])."
" ?>
				</p>
			</div>
			<div class="flex-md-row">
				<p>
					Physical Limitations: <?= ($SESSION['limitations'])."
" ?>
				</p>
			</div>
			<div class="flex-md-row">
				<p>
					Diet Restrictions: <?= ($SESSION['diet'])."
" ?>
				</p>
			</div>
			
			<!-- Title II and SSI amounts -->
			<div class="flex-md-row">
				<hr>
				<h4>Title II and SSI Statement</h4>
				<br />
				<p>
					SSDI Amount: &#36;<?= ($SESSION['ssdiAmount'])."
" ?>
					<br />
					SSI Amount: &#36;<?= ($SESSION['ssiAmount'])."
" ?>
				</p>
			</div>
			<!-- Release of information. -->
			<div class="flex-md-row">
				<hr>
				<h4>Release of Information</h4>
				<br />
				<p>
					Referring Agency: <?= ($SESSION['referring'])."
" ?>
					<br />
					Funding Agency: <?= ($SESSION['funding'])."
" ?>
					<br />
					Employer: <?= ($SESSION['employer'])."
" ?>
					<br />
					Other: <?= ($SESSION['other'])."
" ?>
					<br />
				</p>
			</div>
			<!-- Forms Checklist -->
			<div class="flex-md-row">
				<hr>
				<h4>Form Checklist</h4>
				<br />
				<p>
					<span class="glyphicon glyphicon-ok"></span>&#9;2019 IE Resource Letter
					<br />
				</p>
				<p>
					<span class="glyphicon glyphicon-ok"></span>&#9;Grievance Procedures
					<br />
				</p>
				<p>
					<span class="glyphicon glyphicon-ok"></span>&#9;Handbook Assessment and
					Placement
					<br />
				</p>
				<p>
					<span class="glyphicon glyphicon-ok"></span>&#9;Medical and Emergency
					Information
					<br />
				</p>
				<p>
					<span class="glyphicon glyphicon-ok"></span>&#9;Notice of Rights
					<br />
				</p>
				<p>
					<span class="glyphicon glyphicon-ok"></span>&#9;Photo Release
					<br />
				</p>
				<p>
					<span class="glyphicon glyphicon-ok"></span>&#9;Release DDA
					<br />
				</p>
				<p>
					<span class="glyphicon glyphicon-ok"></span>&#9;Release DVR
					<br />
				</p>
				<p>
					<span class="glyphicon glyphicon-ok"></span>&#9;Title II and SSI Statement of
					Acknowledgement
				</p>
			</div>
			<div class="flex-md-row">
				<hr>
				<br />
				<p>
					By submitting this form you agree that you have received all forms listed
					above, and acknowledge that you have provided us with all the most current
					and correct information.
				</p>
			</div>
			<!-- Final submit button after confirming that info is correct. -->
			<div class="flex-md-row p-3">
				<hr>
				<a href="thank_you" role="button" class="btn-success btn-lg p-3">
					Submit
				</a>
			</div>
		</div>
	</body>
</html>