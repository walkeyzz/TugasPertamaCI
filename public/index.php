<?php
// File: app/Views/index.php

// Load the head section
echo view('layouts/head');

// Load the navigation header
echo view('layouts/navheader');

// Load the navbar section
echo view('layouts/navbar');

// Load the content section (home.php, about.php, service.php, etc.)
echo view($content);

// Load the footer section
echo view('layouts/footer');

// Load scripts
echo view('layouts/scripts');
