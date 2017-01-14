<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Slider - Custom handle</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
        #custom-handle {
            width: 3em;
            height: 1.6em;
            top: 50%;
            margin-top: -.8em;
            text-align: center;
            line-height: 1.6em;
        }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            var A, B, C, D,E;
            A=B=C=D=E = 0;
            var handle = $( "#custom-handle" );
            $( "#slider" ).slider({
                create: function() {
                    handle.text( $( this ).slider( "value" ) );
                },
                slide: function( event, ui ) {
                    handle.text( "$"+ui.value );
                    A=ui.value;
                    $(".com_amt").html("$"+A);
                    B = 0.2*A;

                    $(".age_amt").html("$"+B);
                    C = (A*0.8)* (.95);
                    $(".adv_amt").html("$"+C);
                    D = (A*0.8)-C;

                    $(".dis_amt").html("$"+D);
                    E=A-D;
                    $(".net_amt").html("$"+E);
                }
            });
        } );
    </script>
</head>
<body>

<div id="slider" min="10" max="1000">
    <div id="custom-handle"  class="ui-slider-handle"></div>

</div>
<br><br>
<div class="static">Commission Amount:<div class="com_amt"></divclass></div>
    <div class="static">agent Amount:<div class="age_amt"></divclass></div>
        <div class="static">advance Amount:<div class="adv_amt"></divclass></div>
            <div class="static">discount Amount:<div class="dis_amt"></divclass></div>
                <div class="static">net Amount:<div class="net_amt"></divclass></div>
                    <div class="custom_value"></div>

</body>
</html>