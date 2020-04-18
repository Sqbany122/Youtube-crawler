<?php 

    function get_content_from_jbzd($url){
        
        $yt = file_get_contents($url);
        
		$yt = preg_replace('@.*<img class="channel-header-profile-image" src="([^<>]*)"\s*title="([^<>]*)"[^<>]*>[\w\W]*<div class="yt-lockup clearfix[^<>]*>[\w\W]*<span\s*class="\s*spf-link[^<>]*"[^<>]*><a\s*href="([^<>]*)"[^<>]*>[\w\W]*<img[^<>]*src="([^<>]*)"[^<>]*>[\w\W]*<ul class="yt-lockup-meta-info">\s*<li>[^<>]*<\/li>\s*<li>([^<>]*)<\/li><\/ul>@Usmi', '<img src="$1" class="yt-avatar" /><span class="yt-name">$2</span><a href="https://www.youtube.com$3"><img class="yt-movie-img" src="$4" /></a><div class="yt-upload-date">$5</div>', $yt);
        $yt = preg_replace('@<\/div>\s*<[^<>]*div>[^<>]*[\w\W]*<\/div>.*+@Usmi','',$yt);
        echo $yt;

    } 

?>

<html>
    <head>
        <title>Siemanko</title>
        <meta name="robots" content="noindex, nofollow" />
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>

    <body>

        <div id="form_div">
            <form method="post" class="form" id="form">
                <input type="text" name="login" />
                <input type="password" name="password" />
                <button name="submit">Zalogujs</button>
            </form>
        </div>

        <?php 

            if (isset($_POST['submit']) && $_POST['login'] == 'siema' && $_POST['password'] = 'siemanko') {

                ?>
                    <script>
                        $("#form_div").html('');
                    </script>

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UCM6yPd-dzKvHhGptvrAmT5w/videos'); ?>
                    </div>
                </div>

                <div class="channel">
                    <div class="single-channel">
                    <?php get_content_from_jbzd('https://www.youtube.com/channel/UCJ0VFYHC4J6KhC_ohzrJ0eA/videos'); ?>
                    </div>
                </div>
                
                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UCBoOyAEALLrz6m6igdJ8tOw/videos'); ?>
                    </div>
                </div>  

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UCG_OKzFCU9BkxHAA0sehwgA/videos'); ?>
                    </div>
                </div>  

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UCOjc2LTXq55J0HNUMvNhvYw/videos'); ?>
                    </div>
                </div>  

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UCNswCuahUzvLVWMV4H0mTMw/videos'); ?>
                    </div>
                </div>
                

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UC3z-6QlBN0XzVUkybvvfakQ/videos'); ?>
                    </div>
                </div>

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UCApRfhHdExxNECZINxPhxhQ/videos'); ?>
                    </div>
                </div>

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/user/czukasz/videos'); ?>
                    </div>
                </div>

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UCuToCclVeGSu1JuXOVyw2_A/videos'); ?>
                    </div>
                </div>

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/user/Materialisimo/videos'); ?>
                    </div>
                </div>

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UCpnkp_D4FLPCiXOmDhoAeYA/videos'); ?>
                    </div>
                </div>

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UCr7-2ld8nuc2-NGxasq87HA/videos'); ?>
                    </div>
                </div>

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UC9BMWLruGWsr1nTzFqmMfHw/videos'); ?>
                    </div>
                </div>

                <div class="channel">
                    <div class="single-channel">
                        <?php get_content_from_jbzd('https://www.youtube.com/channel/UC2GOaa6R3YL-Zp6a5pWrpJw/videos'); ?>
                    </div>
                </div>

        <?php        
            } 

        ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>