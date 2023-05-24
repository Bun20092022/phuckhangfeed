<?php if(isset($title)){ ?>
    <title><?php echo $title; ?></title>
<?php }else{ ?>
    <title><?php $this->Model_info->get_title(); ?></title>
<?php } ?>
<?php if(isset($description)){ ?>
    <meta name="description" content="<?php echo $description; ?>" />
<?php }else{ ?>
    <name="description" content="<?php $this->Model_info->get_description(); ?>" />
    <?php } ?>
    <?php if(isset($keywords)){ ?>
        <meta name="keywords" content="<?php echo $keywords; ?>" />
    <?php }else{ ?>
        <meta name="keywords" content="<?php $this->Model_info->get_keywords(); ?>" />
    <?php } ?>
    <?php if(isset($title)){ ?>
        <meta name="og:title" content="<?php echo $title; ?>" />
    <?php }else{ ?>
        <meta name="og:title" content="<?php $this->Model_info->get_title(); ?>" />
    <?php } ?>
    <?php if(isset($description)){ ?>
        <meta name="og:description" content="<?php echo $description; ?>" />
    <?php }else{ ?>
        <meta name="og:description" content="<?php $this->Model_info->get_description(); ?>" />
    <?php } ?>
    <?php if(isset($imgsocial)){ ?>
        <meta name="og:image" content="<?php echo $imgsocial; ?>" />
    <?php }else{ ?>
        <meta name="og:image" content="<?php $this->Model_info->get_imgsocial(); ?>" />
    <?php } ?>
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php $this->Model_info->get_title(); ?>">
    <link rel="shortcut icon" type="image/png" href="<?php $this->Model_info->get_favicon(); ?>">
</script>