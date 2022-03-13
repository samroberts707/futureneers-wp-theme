<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Set character encoding for the document -->
    <meta charset="utf-8">

    <!-- Viewport for responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <!-- Document Title -->
    <!-- <title>Page Title less than 55 characters</title> -->

    <!-- Meta Description -->
    <meta name="description" content="Description of the page less than 150 characters">

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <nav id="navigation">
      <div id="navbar">
        <div class="logo-wrapper">
          <a href="/">
            <img class="logo" alt="The Futureneers" src="<?php echo get_template_directory_uri().'/src/images/futureneers_logo_white.svg'; ?>" />
          </a>
        </div>
        <div class=hamburger onclick="toggleNav();">
          <svg id="Hamburger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65.601" height="36.495" viewBox="0 0 65.601 36.495">
            <defs>
              <clipPath id="clip-path">
                <path id="Path_235" data-name="Path 235" d="M0,10.348H65.6v-36.5H0Z" transform="translate(0 26.147)" fill="none" stroke="#707070" stroke-width="1"/>
              </clipPath>
            </defs>
            <g id="Group_179" data-name="Group 179" clip-path="url(#clip-path)">
              <g id="Group_178" data-name="Group 178" transform="translate(2.792 2.792)">
                <path id="Path_234" data-name="Path 234" d="M.479,0C11.9.039,23.281,1.66,34.7,1.251,42.447.974,50.192.6,57.933,0l.028,0M-1.211,15.353c11.614-1.006,23.138.535,34.739.833a165.831,165.831,0,0,0,24.612-1.4l.609-.077M-.367,29.311s26.472,1.392,42.5,1.59c13.237.163,16.674-1.59,16.674-1.59" transform="translate(1.211)" fill="none" stroke="#224286" stroke-linecap="round" stroke-width="4"/>
              </g>
            </g>
          </svg>
        </div>
      </div>
      <div id="nav_menu">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'navbarMenuLocation'
          ));
        ?>
      </div>
    </nav>