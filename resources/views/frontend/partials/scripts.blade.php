<script src="{{ asset('../code.jquery.com/jquery-1.12.0.min.js') }}"></script>

<script>
	window.jQuery || document.write('<script src='+'"'+'{{ asset("public/js/vendor/jquery-1.12.0.min.js") }}'+'"'+'><\/script>')
</script>

<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/plugins.js') }}"></script>
<script src="{{ asset('public/js/main.js') }}"></script>

<script src="{{ asset('public/js/vendor/modernizr-2.8.3.min.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118649422-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());
	gtag('config', 'UA-118649422-1');
</script>