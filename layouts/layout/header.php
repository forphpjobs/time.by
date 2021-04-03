<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>FreeCssTemplate.net</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="../assets/css/_web.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="screen" />


</head>
<body>

<div id="cont"><div class="inner_copy"></div>
    <p class="buttons" id="handles4">
        <span><a href='/'>Home</a></span>
        <span><a href='about'>About</a></span>
        <span><a href='blog'>Blog</a></span>
        <span><a href='portfolio'>Portfolio</a></span>
        <span><a href='contact'>Contact</a></span>
        <span><?php


            $date=new DateTime('now', new DateTimeZone('Europe/Minsk'));
            $time=$date->format('l: d M Y H:i');
            echo $time;

            ?></span>
    </p>
    <h4> 	&#160; <span id="info4"></span></h4>
    <div class="sample">
        <div class="mask3">
            <div id="box4">
                <!--begin HOME page-->
                <div>
                    <h3>Home Page</h3>
                    <img src="../assets/images/image1.jpg" alt="Photo" />
                    <p>
                        This website template is repeased under a Creative Commons Attribution 2.5 License<br/><br/>We request you retain the full copyright notice below including the link to www.freecsstemplate.net. This not only gives respect to the large amount of time given freely by the developers but also helps build interest, traffic and use of our free and paid designs. If you cannot (for good reason) retain the full copyright we request you at least leave in place the Website Templates line, with Website Templates linked to www.freecsstemplate.net. If you refuse to include even this then support may be affected.<br/><br/>You are allowed to use this design only if you agree to the following conditions:<br/>- You cannot remove copyright notice from this design without our permission.<br/>- If you modify this design it still should contain copyright because it is based on our work.<br/>- You may copy, distribute, modify, etc... this tem plate as long as link to our website remains untouched.<br/>
                    </p>				</div>



            </div>
        </div>
    </div>
</div>

