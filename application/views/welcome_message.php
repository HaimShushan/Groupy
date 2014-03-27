<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groupy</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/foundation.css">


    <script src="js/vendor/modernizr.js"></script>

</head>
<body>


<nav class="top-bar" data-topbar>
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">Groupy</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <li class="active"><a href="#">Right Button Active</a></li>
            <li class="has-dropdown">
                <a href="#">Right Button Dropdown</a>
                <ul class="dropdown">
                    <li><a href="#">First link in dropdown</a></li>
                </ul>
            </li>
        </ul>

        <!-- Left Nav Section -->
        <ul class="left">
            <li class="has-form">
                <div class="row collapse">
                    <div class="large-8 small-9 columns">
                        <input type="text" placeholder="Find Stuff" style="height: 1.8rem;">
                    </div>
                    <div class="large-4 small-3 columns">
                        <a href="#" class="alert button expand">Search</a>
                    </div>
                </div>
            </li>
        </ul>
    </section>
</nav>





        <dl class="tabs vertical" data-tab style="width: 10%;">
            <dd id="GroupsTab1" class="active"><a href="#panel1a">Tab 1</a></dd>
            <dd id="GroupsTab2"><a href="#panel2a">Tab 2</a></dd>
            <dd id="GroupsTab3"><a href="#panel3a">Tab 3</a></dd>
            <dd id="GroupsTab4"><a href="#panel4a">Tab 4</a></dd>
        </dl>
        <div class="tabs-content vertical" style="width: 90%;">
            <div class="content active" id="panel1a">

            </div>
            <div class="content" id="panel2a">

            </div>
            <div class="content" id="panel3a">

            </div>
            <div class="content" id="panel4a">

            </div>
        </div>






<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/fastclick.js"></script>
<script src="js/foundation.min.js"></script>

<script>
    $(document).foundation();
</script>

<script>
    $('dd#GroupsTab1').click(function() {
        $.get( "index.php/welcome/click1", function( data ) {
            $( "#panel1a" ).html( data );
        });
    });

    $('dd#GroupsTab2').click(function() {
        $.get( "index.php/welcome/click2", function( data ) {
            $( "#panel2a" ).html( data );
        });
    });


    $('dd#GroupsTab3').click(function() {
        $.get( "index.php/welcome/click3", function( data ) {
            $( "#panel3a" ).html( data );
        });
    });

    $('dd#GroupsTab4').click(function() {
        $.get( "index.php/welcome/click4", function( data ) {
            $( "#panel4a" ).html( data );
        });
    });

</script>


</body>
</html>