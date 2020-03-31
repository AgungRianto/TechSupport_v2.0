<script type="application/ld+json">
      {
        "name": "Looper - Bootstrap 4 Admin Theme",
        "description": "Responsive admin theme build on top of Bootstrap 4",
        "author":
        {
          "@type": "Person",
          "name": "Beni Arisandi"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Dashboard",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('fontend/assets/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{ url('frontend/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/vendor/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/vendor/flatpickr/flatpickr.min.css') }}"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{ url('frontend/assets/stylesheets/theme.min.css') }}" data-skin="default">
    <link rel="stylesheet" href="{{ url('frontend/assets/stylesheets/theme-dark.min.css') }}" data-skin="dark">
    <link rel="stylesheet" href="{{ url('frontend/assets/stylesheets/custom.css') }}">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add flag class to html immediately
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script><!-- END THEME STYLES -->