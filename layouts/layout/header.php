<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset=utf-8">
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





