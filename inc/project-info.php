<?php

$project = filter_var(strip_tags(trim($_GET['i'], "/")), FILTER_SANITIZE_STRING);

if ("" === $project) {
  header('Location: /CV/portfolio');
  exit(0);
}

$projects = array(

  "spottydog" => array(
    "name" => "Spottydog",
    "platform" => "Magento",
    "type" => "Solo",
    "image" => "spottydog",
    "description" => "Responsive Magento project designed multiple storefronts in mind. Users are able to upload
    their custom artwork for each product using a bespoke JavaScript upload process. The site will launch
    spring/summer 2015.",
    "details" => array(
      "Magento ecommerce",
      "Compass/SASS",
      "Bootstrap theme",
      "Custom jQuery artwork uploader"
    )
  ),

  "603copywriting" => array(
    "name" => "603 Copywriting",
    "platform" => "WordPress",
    "type" => "Solo",
    "image" => "603",
    "description" => "The 603 Copywriting project was to take an already successful copy writing blog and convert it
    to a porfolio and business website. The site had to support self-built landing pages and a range of bespoke
    features for each page, but also enhance the already successful SEO strategy in place.",
    "details" => array(
      "Responsive WordPress theme",
      "Custom post types",
      "Custom meta fields",
      "In-site AdWords landing page generation with unique pricing tables",
      "Foundation 5"
    )
  ),

  "shuffskidz" => array(
    "name" => "Shuffs Kidz",
    "platform" => "Magento",
    "type" => "Collaborative",
    "image" => "shuffs",
    "description" => "Shuffs Kidz was a responsive Magento site built to make importing seasonal stock easy. A
    bespoke import process was developed to automatically create configurable products based on available associations
    them with provided products. Images were also uploaded as a zip and automatically matched to products.",
    "details" => array(
      "Magento ecommerce",
      "Compass/SASS",
      "Automatic creation of configurable products."
    )
  ),

  "teamad" => array(
    "name" => "Team AD",
    "platform" => "WordPress",
    "type" => "Solo",
    "image" => "teamad",
    "description" => "Team AD Global needed a responsive site for their IT management services. The new site allows
    the to manage their content and easily promote clients they work with.",
    "details" => array(
      "Responsive Wordpress",
      "Foundation 5"
    )
  ),

  "londonapartments" => array(
    "name" => "London Apartments",
    "platform" => "WordPress",
    "type" => "Collaborative",
    "image" => "london-apartments",
    "description" => "The London Apartments website is a property rentals site for Uk and European properties. Their
    new site was an extensive overhaul of their existing site, with a brand new properties creation process which
    allowed for seasonal rate bands for each individual property.",
    "details" => array(
      "Responsive WordPress",
      "Foundation 4",
      "Properties custom post type",
      "Properties information meta fields",
      "Bespoke properties search",
      "Automatic exchange rates",
      "Multilingual Support",
      "Google Maps API integration"
    )
  ),

  "wkb" => array(
    "name" => "Wood Knit Bee",
    "platform" => "WooCommerce",
    "type" => "Collaborative",
    "image" => "wkb",
    "description" => "The Wood Knit Bee site was an upgrade to their previous site to add ecommerce support.
    Extensive upgrade-friendly modifications were made to support wholesale customers who required different prices
    and bespoke tax charges.",
    "details" => array(
      "Responsive WooCommerce",
      "Compass/SASS",
      "Wholesale customer customisation",
      "Multilingual"
    )
  ),

  "tecla" => array(
    "name" => "Tecla Languages",
    "platform" => "WooCommerce",
    "type" => "Collaborative",
    "image" => "tecla",
    "description" => "The Tecla Languages site was a customised WooCommerce implementation that was setup to allow
    students to purchase seats for courses on specific dates. The site also supports Magento Blogging.",
    "details" => array(
      "Bespoke WooCommerce",
      "Compass/SASS",
      "Multilingual (Google Translate)"
    )
  ),

  "cornishwelding" => array(
    "name" => "Cornish Welding Supplies",
    "platform" => "Magento",
    "type" => "Solo",
    "image" => "cornish",
    "description" => "Cornish Welding required their existing CubeCart be replaced with a new Magento site. The
    existing product catalog was imported into Magento, preserving images and up sell associations as well as cleaning
     up product descriptions of inline styling. Products also have individual data sheets which are uploaded as the
     product is created.",
    "details" => array(
      "Compass/SASS",
      "Managed migration from CubeCart",
      "Per-product datasheets uploaded for frontend display"
    )
  ),

  "the-carbon-directory" => array(
    "name" => "The Carbon Directory",
    "platform" => "Bespoke Php",
    "type" => "Solo",
    "image" => "tcd",
    "description" => "The Carbon Directory is a business directory promoting carbon neutral companies. The project
    was a bespoke php site build from the ground up, with a secure administration login are for managing listings.
    The key aspect of the site, the search, is powered by sphinx search which provides accurate search results and
    weighting of database columns. Support for recognising word stemming was added, a feature not fully supported
    at the time.",
    "details" => array(
      "Bespoke admin area with user login",
      "Sphinx Search for accurate search results",
      "Google Maps API, puts the location of search results on a map",
      "SEO friendly and crawlable"
    )
  ),

  "rikkicann" => array(
    "name" => "Rikki Cann",
    "platform" => "Wordpress",
    "type" => "Solo",
    "image" => "rikkicann",
    "description" => "The Rikki Cann site is a bespoke WordPress site pre dating responsive web design. It was
    designed to showcase their varied services, their work and results, and their company history without confusing
    users, and always keeping the hierarchy straight forward.",
    "details" => array(
      "Planning information architecture",
      "Custom Post Types",
      "Custom Fields"
    )
  ),

  "summitglow" => array(
    "name" => "Summitglow Ltd",
    "platform" => "Wordpress",
    "type" => "Solo",
    "image" => "summitglow",
    "description" => "Summitglow needed a responsive website built which they could manage themselves to replace their
  much older static website. The site was built to a tight budget and specification, and fulfilled their requirements
  for the site.",
    "details" => array(
      "Foundation 5"
    )
  )
);

if ((isset($projects[$project]))) {
  $project = $projects[$project];
} else {
  header('Location: /CV/portfolio');
  exit(0);
}