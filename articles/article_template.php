<!DOCTYPE html>
<html lang="en">
<head>
    <title>CHANGEME</title>
    <link rel="shortcut icon" href="../favicon/favicon.ico"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../typewriter.js"></script>
    <link rel="stylesheet" type="text/css" href="../stacksec.css">
    
    <meta charset="UTF-8">
    <meta name="description" content="CHANGEME">
    <meta name="keywords" content="security,hacking,hack,heartbleed,krack,crack,stack,memory,stacksec,it,secure,securing,hacks,hackers,system,systems,computers,documentation,tutorial,explanation,how,to,writeup,document,vulnerability,exploit,metaspoit,kali,linux,windows,mac,vulnerable,exploitable,vuln,meta,sploit,payload,scanning,nmap,black,white,grey,hat,information,info,book,write,secu,bleeding,heart,protect,exploitation,information security">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<!-- BODY -->
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- HEADER -->
            <?php include '../PHP/header.php'?>
            <!-- END OF HEADER -->
            <div class="col-sm-2">
                <!-- NAV -->
                <?php include '../PHP/navbar.php'?>
                <!-- END OF NAV -->
            </div>
            <!-- CONTENT -->
            <div class="col-sm-7">
                <div class="container-fluid">
                    <h1>CHANGEME</h1>
                    <hr />
                    <!-- BREADCRUMBS -->
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="../data.php">Docs</a></li>
                        <li class="breadcrumb-item active">CHANGEME</li>
                    </ol>
                    <div class="row top-buffer">
                        <div class="col-sm-8">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th colspan="2">0x5UMM4RY</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Software:</td>
                                        <td><a href="https://www.openssl.org/">OpenSSL</a></td>
                                    </tr>
                                    <tr>
                                        <td>Date found:</td>
                                        <td>April 1, 2014 11:09 UTC</td>
                                    </tr>
                                    <tr>
                                        <td>Vulnerable version(s):</td>
                                        <td>1.0.1 to 1.0.1f</td>
                                    </tr>
                                    <tr>
                                        <td>Date patched:</td>
                                        <td>April 7, 2014</td>
                                    </tr>
                                    <tr>
                                        <td>Patched version(s):</td>
                                        <td>1.0.1g</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-4">
                            <center><img src="../images/heartbleed.png" alt="Heartbleed" height="175" width="150"></center>
                        </div>
                    </div>
                    <div class="row top-buffer">
                        <!-- ARTICLE CONTENT -->
                        <p>0xL1NK#~ <a href="#">CHANGEME</a></p>
                        
                        <!-- START CONTENT HERE -->
                        
                        <center><b><p>** For more information, check out the extra links and sources. **</p></b></center>
                        <h5>50URC35:<h5>
                        <ul id="sources">
                            <li><a href="https://en.wikipedia.org/wiki/Heartbleed">Heartbleed Wikipedia</a></li>
                        </ul>
                        <!-- END OF ARTICLE CONTENT -->
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <h4>0xR3L4T3D_L1NK5<h4>
                <br />
                <ul id="links">
                        <li><a href="http://heartbleed.com/">heartbleed.com</a></li>
                </ul>
            </div>
            <!-- END OF CONTENT -->
            <!-- SCRIPTS -->
            <script src="../chaffle/chaffle.min.js" charset="utf-8"></script>
            <script>
                var elements = document.querySelectorAll('[data-chaffle]');
                var elm = document.querySelectorAll('[data-chaffle-onLoad]');

                Array.prototype.forEach.call(elements, function (el) {
                    var chaffle = new Chaffle(el)
                    el.addEventListener('mouseover', function () {
                        chaffle.init();
                    });
                });

                Array.prototype.forEach.call(elm, function (el) {
                    var chaffle = new Chaffle(el, {
                        delay: 200
                    })
                    setInterval(function(){
                        chaffle.init();
                    }, 8000)
                });
            </script>
            <!-- END OF SCRIPTS -->
        </div>
    </div>
<!-- END OF BODY -->
</body>
</html>
