<?php

    include($path."assets/includes/config.php"); 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Philip Henning">
        <meta name="description" content="Philip Henning - junior software developer">     
        <meta name="keywords" content="programming, learning to program, junior developoer, software, software development, junior software developer">
             
            <title><?php echo $siteTitle; ?> | <?php echo $subTitle; ?></title>

        <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>assets/css/general.css?v=004" >
        <link rel="icon" type="image/x-icon" href="<?php echo $path; ?>assets/images/favicon.png">

    </head>

    <body>

        <div class="container">
            
            <section class="headingSection">

                <!-- logo -->
                <header class="logo">
                    <img alt="logo" src="<?php echo $path . $logo; ?>" />
                </header>

                <!-- navigation -->
                <nav class="navigation">
                    <a href="<?php echo $site; ?>">Home</a>
                    &nbsp/&nbsp

                    <a href="<?php echo $site; ?>pages/projects.php">Projects</a>
                    &nbsp/&nbsp

                    <a href="<?php echo $site; ?>pages/blog.php">Blog</a>
                    &nbsp/&nbsp

                    <a href="<?php echo $site; ?>assets/documents/CV -  Software Developer - version 5.pdf" target="blank">CV</a>
                    &nbsp/&nbsp

                    <a href="https://github.com/feeeluk" target="_blank">Git Hub</a>
                    &nbsp/&nbsp

                    <a href="https://stackoverflow.com/users/23801067/phil" target="_blank">Stack Overflow</a>
                    &nbsp/&nbsp  

                    <a href="https://miro.com/app/board/uXjVKUNYNnA=/?share_link_id=222524937653" target="_blank">Whiteboard</a>
                    &nbsp/&nbsp

                    <a href="https://1drv.ms/o/s!Ag9ZukAL9sZOog6eqf_5CXVrdJhz?e=QhPtT8" target="_blank">Notes</a>
                             
                </nav>

            </section>

            <!-- main page -->
            <section>

