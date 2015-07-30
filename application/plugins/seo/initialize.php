<?php

// initialize seo
include("seo.php");

$seo = new SEO(array(
    "title" => "Visual Website Analyser",
    "keywords" => "Visual website analyser, visual sitemap, visualize website" ,
    "description" => "Nodes Showing how your website appears",
    "author" => "",
    "robots" => "INDEX,FOLLOW",
    "photo" => CDN . "img/logo.png"
));

Framework\Registry::set("seo", $seo);