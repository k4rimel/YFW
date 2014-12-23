<!DOCTYPE html>
<html lang="en">
    {{ HTML::style('css/vendor/foundation/foundation.min.css'); }}
    {{ HTML::style('css/vendor/foundation/foundation-icons.css'); }}
    {{ HTML::script('js/vendor/foundation/vendor/jquery.js'); }}
    {{ HTML::script('js/vendor/foundation/foundation.min.js'); }}
    {{ HTML::style('css/styles.css'); }}
<head>
    <meta charset="UTF-8">
    <title>YFW</title>
</head>
<body>
	<div class="header row">
		<div class="large-12 columns large-centered"></div>
	</div>
    @yield('content')
</body>
</html>