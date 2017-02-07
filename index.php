<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Faculty Page Customization</title>
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/site.css">
		<script type="text/javascript" src="js/site.js"></script>
		<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
		<script src="http://www.w3schools.com/lib/w3data.js"></script>
	</head>

	<body id="body">
		<div class="row" id="buttonDiv">
			<div class="large-12 columns">
				<div class="primary callout">
					<a id="thirdWidthButton" class="button" onclick="appendThirdWidth()">Add Third Width</a>
					<a id="halfWidthButton" class="button" onclick="appendHalfWidth()">Add Half Width</a>
					<a id="fullWidthButton" class="button" onclick="appendFullWidth()">Add Full Width</a>
					<a id="removeLastButton" class="button" onclick="removeLast()">Remove Last Element</a>
				</div>
			</div>
		</div>

		<div w3-include-html="templates/TemplateOne.html"></div> 

		<script>
		w3IncludeHTML();
		</script>

		<div class="row" id="saveButtonDiv">
			<div class="large-12 columns">
				<div class="primary callout">
					<a class="button" onclick="previewFull()">Preview Current Layout</a>
					<a id="saveButton" class="button" onclick="saveLayout()">Save Current Layout</a>
				</div>
			</div>
		</div>
</html>