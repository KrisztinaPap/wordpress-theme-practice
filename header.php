<!-- Citation: Code is copied from TECHCareers class, written by Warren Uhrich
                BORROWED CODE BEGINS HERE
-------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' ); ?></title>
    <?php         
        wp_head();
    ?>
</head>
<body>
    <div class="header">
        <h1><?php bloginfo( 'title' ); ?></h1>
        <nav>
            <h2><?php bloginfo( 'title' ); ?>
                Navigation
            </h2>
            <?php wp_nav_menu( 
                array(
                    'theme_location' => 'main_menu'
                ) 
            ); 
            ?>
        </nav>
    </div>

<!-- BORROWED CODE ENDS HERE --------->