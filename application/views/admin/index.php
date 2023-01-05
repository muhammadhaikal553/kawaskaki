<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kawas Kaki</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/602ba18893.js" crossorigin="anonymous"></script>
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
    <!-- //bootstrap -->
    <link href="<?= base_url(); ?>assets/css/dashboard.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style_index.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' media="all" />
    <script src="<?= base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
    <!--start-smoth-scrolling-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker3.css" />
    <!-- fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- //fonts -->
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background: #101010;padding: 0;box-shadow: 0;">
        <div class="container-fluid" style="padding-right: 0px;padding-left:0px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--a class="navbar-brand" href="index.html"><h1><img src="images/logo.png" alt="" /></h1></a-->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="header-top-right">
                    <div>
                        <a class="navbar-brand" href="<?= base_url('admin'); ?>">
                            <h1><img src="<?= base_url(); ?>assets/images/logo.jpg" alt="" style="padding: 25px;" /></h1>
                        </a>
                    </div>
                </div>
            </div>
            <hr style="border-top: 2px solid #5aab26;margin-bottom:0;margin-top: 15px">
            <hr style="border-top: 4px solid #5aab26;margin-bottom:0;margin-top: 2px">
            <hr style="border-top: 8px solid #5aab26;margin-bottom:0;margin-top: 3px">
        </div>
    </nav>

    <div class="col-sm-3 col-md-2 sidebar" style="background: #f7f7f7;border-right: 1px solid;color:#ccc;">
        <div style="padding-top: 5px;margin: 0 0 0 18px;color: #3c3a3a;"><a href="<?= base_url('auth/logout'); ?>">Log out</div>
        <div class="drop-navigation drop-navigation">
            <div class="row">
                <div class="col-md-12" style="margin-top: 10px;font-size: 14px;">
                    <ul id="tree1">
                        <li>Consumable</a>
                            <ul>
                                <li><a href="<?= base_url('admin/stock'); ?>">Stok</a></li>
                                <li><a href="<?= base_url('admin/incoming'); ?>">Incoming</a></li>
                                <li><a href="<?= base_url('outbound'); ?>">Outbound</a></li>
                                <li><a href="<?= base_url('admin/tambah'); ?>">Add New Item</a></li>
                                <li><a href="<?= base_url('wrapping'); ?>">Wrapping</li>
                                <li></li></a>
                                <li>And Old
                                    <ul>
                                        <li>Reports
                                            <ul>
                                                <li>Report1</li>
                                                <li>Report2</li>
                                                <li>Report3</li>
                                            </ul>
                                        </li>
                                        <li>Employee</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>XRP
                            <ul>
                                <li>Company Maintenance</li>
                                <li>Employees
                                    <ul>
                                        <li>Reports
                                            <ul>
                                                <li>Report1</li>
                                                <li>Report2</li>
                                                <li>Report3</li>
                                            </ul>
                                        </li>
                                        <li>Employee Maint.</li>
                                    </ul>
                                </li>
                                <li>Human Resources</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="side-bottom">
                <div class="copyright">
                    <p style="margin-left: 25px;">Muhammad Haikal Ali Haidar - 2195114026 </p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $.fn.extend({
            treed: function(o) {

                var openedClass = 'glyphicon-minus-sign';
                var closedClass = 'glyphicon-plus-sign';

                if (typeof o != 'undefined') {
                    if (typeof o.openedClass != 'undefined') {
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined') {
                        closedClass = o.closedClass;
                    }
                };

                //initialize each of the top levels
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function() {
                    var branch = $(this); //li with children ul
                    branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
                    branch.addClass('branch');
                    branch.on('click', function(e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');
                            icon.toggleClass(openedClass + " " + closedClass);
                            $(this).children().children().toggle();
                        }
                    })
                    branch.children().children().toggle();
                });
                //fire event from the dynamically added icon
                tree.find('.branch .indicator').each(function() {
                    $(this).on('click', function() {
                        $(this).closest('li').click();
                    });
                });
                //fire event to open branch if the li contains an anchor instead of text
                tree.find('.branch>a').each(function() {
                    $(this).on('click', function(e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
                //fire event to open branch if the li contains a button instead of text
                tree.find('.branch>button').each(function() {
                    $(this).on('click', function(e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
            }
        });

        //Initialization of treeviews

        $('#tree1').treed({
            openedClass: 'glyphicon-minus-sign',
            closedClass: 'glyphicon-plus-sign'
        });

        $('#tree2').treed({
            openedClass: 'glyphicon-folder-open',
            closedClass: 'glyphicon-folder-close'
        });

        $('#tree3').treed({
            openedClass: 'glyphicon-chevron-right',
            closedClass: 'glyphicon-chevron-down'
        });
    </script>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <!-- footer -->

    </div>
    <div class="clearfix"> </div>
    <div class="drop-menu">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
            <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
        </ul>
    </div>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>

</html>