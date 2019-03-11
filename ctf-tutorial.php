<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="favicon/favicon.ico"/>
    <title>StackSec - Tutorials</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="typewriter.js"></script>
    <link rel="stylesheet" type="text/css" href="stacksec.css">
    
    <meta charset="UTF-8">
    <meta name="description" content="Write-ups from multipe CTF challenges. Retired HackTheBox machines, Vulnhub, ...">
    <meta name="keywords" content="security,hacking,hack,heartbleed,krack,crack,stack,memory,stacksec,it,secure,securing,hacks,hackers,system,systems,computers,documentation,tutorial,explanation,how,to,writeup,document,vulnerability,exploit,metaspoit,kali,linux,windows,mac,vulnerable,exploitable,vuln,meta,sploit,payload,scanning,nmap,black,white,grey,hat,information,info,book,write,secu,write,docu,information security">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<!-- BODY -->
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- HEADER -->
            <?php include './PHP/header.php'?>
            <!-- END OF HEADER -->
            <div class="col-sm-2">
                <!-- NAV -->
                <?php include './PHP/navbar.php';?>
                <!-- END OF NAV -->
            </div>
            <!-- CONTENT -->
            <div class="col-sm-8">
                <div class="container-fluid">
                    <h1>Tutorials</h1>
                    <hr />
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Tutorial</li>
                    </ol>
                    <center><p>This is the location to search for CTF tutorials.</p></center>
                    <br />
                    <h4>Recon</h4>
                    <br /><br />
                    <br />
                    <h4>Exploitation</h4>
                    <br /><br />
                    <br />
                    <h4>Post Exploitation / Priv Esc</h4>
                    <br /><br />
                    <div class="row top-buffer">
                        <div class="col-sm-2">
                            <img src="images/linux.png" alt="Heartbleed" height="90" width="90">
                        </div>
                        <div class="col-sm-10">
                            <a href="CTF/tutorial/ubuntulinux.php">Linux - LinEnum.sh</a>
                            <p>A tutorial for enumeration with LinEnum.sh</p>
                        </div>
                    </div>
                    <br />
                    <h4>Maintaining Access</h4>
                    <br /><br />
                    <br />
                    <h4>Covering Tracks</h4>
                    <br /><br />
                    <br />
                    <h4>Misc</h4>
                    <br /><br />
                    <br />
                </div>
            </div>
            <!-- END OF CONTENT -->
            <!-- SCRIPTS -->
            <script src="chaffle/chaffle.min.js" charset="utf-8"></script>
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
<!-- END OF BODY -->
</body>
</html>
