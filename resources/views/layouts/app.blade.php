<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<script type="text/javascript" src="{{asset('extras/jquery.min.1.7.js')}}"></script>
<script type="text/javascript" src="{{asset('extras/modernizr.2.5.3.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/double-page.css')}}">
</head>
<body>
@yield('content')

<script type="text/javascript">

    function loadApp() {
    
        var flipbook = $('.flipbook');
    
         // Check if the CSS was already loaded
        
        if (flipbook.width()==0 || flipbook.height()==0) {
            setTimeout(loadApp, 10);
            return;
        }
    
        $('.flipbook .double').scissor();
    
        // Create the flipbook
    
        $('.flipbook').turn({
                // Elevation
    
                elevation: 50,
                
                // Enable gradients
    
                gradients: true,
                
                // Auto center this flipbook
    
                autoCenter: true
    
        });
    }
    
    // Load the HTML4 version if there's not CSS transform
    
    yepnope({
        test : Modernizr.csstransforms,
        yep: ['{{asset('lib/turn.min.js')}}'],
        nope: ['{{asset('lib/turn.html4.min.js')}}'],
        both: ['{{asset('lib/scissor.min.js')}}', '{{asset('css/double-page.css')}}'],

        complete: loadApp
    });
    
    </script>


    
</body>
</html>