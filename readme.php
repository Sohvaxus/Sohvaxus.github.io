<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="favicon/favicon.ico"/>
    <title>StackSec - ReadMe.txt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="typewriter.js"></script>
    <link rel="stylesheet" type="text/css" href="stacksec.css">
    
    <meta charset="UTF-8">
    <meta name="description" content="StackSec security documentation">
    <meta name="keywords" content="security,hacking,hack,heartbleed,krack,crack,stack,memory,stacksec,it,secure,securing,hacks,hackers,system,systems,computers,documentation,tutorial,explanation,how,to,writeup,document,vulnerability,exploit,metaspoit,kali,linux,windows,mac,vulnerable,exploitable,vuln,meta,sploit,payload,scanning,nmap,black,white,grey,hat,information,info,book,write">
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
                <?php include './PHP/navbar.php'?>
                <!-- END OF NAV -->
            </div>
            <!-- CONTENT -->
            <div class="col-sm-7">
                <div class="container-fluid">
                    <h1>0xR34DM3.TXT</h1>
                    <hr />
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">ReadMe.txt</li>
                    </ol>
                    <div class="row top-buffer">
                        <p href="" class="typewrite" data-period="2000" data-type='["Disclaimer:"]'><span class="wrap"></span></p>
                        <br />
                        <center><p> All data presented on this site is put here for educational purposes. Whatever you learn here, can be used in a good way, or in a bad way. I'm not your dad so i can't tell you what to do or what not to do. Also me, or any authors on this site can not be held responsible for your actions. So use this information responsibly.</p>
                        <p>This website is a collection of documentation about subjects that i find interesting. I learn best by taking a subject, and then write a bunch of documentation about it. Also by documenting these subjects, it's very easy to look them up in the future, should i've forgotten some commands or details.</p>
                        <p>The reason i put this documentation online, is because maybe other people can benefit from it somehow. I try to be as detailed as possible, because that's how in the end you really understand a subject. If you see any mistakes in my documentation, feel free to let me know via email: mistakes@stacksec.info, and i will adjust my documentation accordingly.</p>
                        <p>Enjoy the free information! :)</p>
                        </center>
                    </div>
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
    </div>
<!-- END OF BODY -->
</body>
</html>
