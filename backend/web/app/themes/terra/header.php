<!DOCTYPE html>
<html lang="<?php echo get_language_attributes(); ?>">
<head>
    <meta charset="<?php echo get_bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo get_bloginfo("description"); ?>">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . "/favicon.png"; ?>">
    <?php wp_head(); ?>
</head>
<body class="<?php echo join(" ", get_body_class()); ?>">
    <?php wp_body_open(); ?>
