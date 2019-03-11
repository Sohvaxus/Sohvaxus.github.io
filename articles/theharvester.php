<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../favicon/favicon.ico"/>
    <title>TheHarvester Information Gathering Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../typewriter.js"></script>
    <link rel="stylesheet" type="text/css" href="../stacksec.css">
    
    <meta charset="UTF-8">
    <meta name="description" content="In-depth explanation and examples from information gathering with TheHarvester.">
    <meta name="keywords" content="theharvester, the harvester, gathering, information gathering, security,hacking,hack,heartbleed,krack,crack,stack,memory,stacksec,it,secure,securing,hacks,hackers,system,systems,computers,documentation,tutorial,explanation,how,to,writeup,document,vulnerability,exploit,metaspoit,kali,linux,windows,mac,vulnerable,exploitable,vuln,meta,sploit,payload,scanning,nmap,black,white,grey,hat,information,info,book,write,WPA2,wifi,protocol,fix,how to">
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
                    <h1>TheHarvester Information Gathering Tool</h1>
                    <hr />
                    <!-- BREADCRUMBS -->
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="../data.php">Docs</a></li>
                        <li class="breadcrumb-item active">TheHarvester</li>
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
                                        <td>Author:</td>
                                        <td>Christian Martorella</td>
                                    </tr>
                                    <tr>
                                        <td>License:</td>
                                        <td>GPLv2</td>
                                    </tr>
                                    <tr>
                                        <td>Software:</td>
                                        <td>TheHarvester</td>
                                    </tr>
                                    <tr>
                                        <td>Date created:</td>
                                        <td>2011</td>
                                    </tr>
                                    <tr>
                                        <td>Updated:</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>GitHub:</td>
                                        <td><a href="https://github.com/laramies/theHarvester">TheHarvester GitHub</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row top-buffer">
                        <!-- ARTICLE CONTENT -->
                        <ol>
                            <li><h5>Description</h5></li>
                            <p>TheHarvester is an OSINT tool for gathering subdomains, email addresses, open ports, banners, employee names, and much more from different pulic sources. (Google, Bing, PGP key servers, ...). In order to gather this information it will do active and passive information gathering.</p>
                            <p>You would want to use this tool when you are curious about the visibility of your company on the internet or for information gathering purposes during a penetration test.</p>
                            <li><h5>Cheatsheet</h5></li>
                             <code>
                                <p># Syntax</p>
                                <p>theharvester -d [domain] -l [amount of depthness] -b [search engines] -f [filename]</p>
                            </code>
                            <br />
                            <code>
                                <p># Basic scan of the given domain, returns 500 results for each search engine.</p>
                                <p>theharvester -d google.com -l 500 -b all</p>
                            </code>
                            <br />
                            <code>
                                <p># Output your scan results to a visual report in HTML format
                                <p>theharvester -d google.com -l 500 -b all -f results.html</p>
                            </code>
                            <br />
                            <p>-d : Specifies the domain to scan</p>
                            <p>-l : Specifies how deep the scan should go. More is better but slower! :)</p>
                            <p>-b : Specifies the search engine to search on. (options as of may 2018: google, googleCSE, bing, bingapi, pgp, linkedin, google-profiles, jigsaw, twitter, googleplus, all)
                            <p>-f : Specifies an output file for the found results. This file will be saved in the current directory from your terminal, unless specified otherwise, in the HTML format.</p>
                            
                            <li><h5>Passive gathering sources:</h5></li>
                            <p>- <a href="https://www.threatcrowd.org/">ThreadCrowd</a>: Open source threat intelligence</p>
                            <p>- <a href="https://www.crt.sh">crtsh</a>: Comodo certificate search</p>
                            <p>- <a href="https://www.google.com">Google</a>: Google search engine</p>
                            <p>- GoogleCSE: Google custom search engine</p>
                            <p>- Google-profiles: Google search engine, specified search for Google profiles</p>
                            <p>- <a href="https://www.bing.com">Bing</a>: Microsoft search engine</p>
                            <p>- BingAPI: Microsoft search engine API</p>
                            <p>- <a href="https://www.dogpile.com">Dogpile</a>: Dogpile search engine</p>
                            <p>- PGP: PGP key server</p>
                            <p>- LinkedIn: Google search engine, specified search for LinkedIn users</p>
                            <p>- <a href="https://www.shodanhq.com">Shodan</a>: Shodan search engine, will search for ports and banners of the discovered hosts.</p>
                            <p>- <a href="https://www.baidu.com">Baidu</a>: Baidu search engine</p>
                            <p>- <a href="https://www.yahoo.com">Yahoo</a>: Yahoo search engine</p>
                            <p>- vhost: Bing virtual hosts search</p>
                            <p>- Twitter: Searches for Twitter accounts related to a certain domain, uses Google search</p>
                            <p>- <a href="https://plus.google.com/discover">Google+</a>: Searches for users that work in the target company, uses Google search</p>
                            
                            <li><h5>Active gathering sources:</h5></li>
                            <p>- Port scanning and takeover options</p>
                            <p>- DNS bruteforce: A plugin that will run a dictionary brute force enumeration attack.</p>
                            <p>- DNS reverse lookup: Reverse lookup of discovered IP's to find hostnames.</p>
                            <p>- DNS TLD (Top-level domain) expansion: TLD dictionary brute force enumeration.</p>
                            
                            <li><h5>Modules that require API keys:</h5></li>
                            <p>- GoogleCSE: You need to create a Google Custom Search engine(CSE), and add your
 Google API key and CSE ID in the plugin (discovery/googleCSE.py)</p>
                            <p>- Shodan: You need to provide your API key in discovery/shodansearch.py</p>
                        </ol>
                        <center><b><p>** For more information, check out the extra links and sources. **</p></b></center>
                        <h5>50URC35:<h5>
                        <ul id="sources">
                            <li><a href="https://github.com/laramies/theHarvester">TheHarvester GitHub</a></li>
                            <li><a href="https://www.hacking-tutorial.com/tips-and-trick/information-gathering-using-theharvester-in-kali-linux/#sthash.IIH1cA08.dpbs">Information gathering using TheHarvester</a></li>
                            <li><a href="https://xeushack.com/information-gathering-with-theharvester/">Information gathering with TheHarvester</a></li>
                        </ul>
                        <!-- END OF ARTICLE CONTENT -->
                    </div>
                </div>
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
