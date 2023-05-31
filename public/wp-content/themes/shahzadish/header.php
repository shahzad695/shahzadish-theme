<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <title>My First Theme</title>
</head>
<?php if (is_front_page()){
    $shahzadisClass='front-page custom-class';
}else{
    $shahzadisClass='not-front-page no-custom-class';

}?>

<body <?php body_class( $shahzadisClass)?>>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">

                            <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0"> -->
                            <?php wp_nav_menu([
                                'theme_location'=>'primary',
                                'container'     =>  false,
                                'menu_class'    =>'navbar-nav me-auto mb-2 mb-lg-0',
                                'add_a_class'   => 'nav-link active',
                            ])?>

                            <!-- </ul> -->

                        </div>
                    </div>
                </nav>

            </div>
        </div>
        <img src="<?php header_image()?>" height="<?php echo get_custom_header()->height?>"
            width="<?php echo get_custom_header()->width?>" alt=" background-image">