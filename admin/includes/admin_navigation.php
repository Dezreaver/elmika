<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Elmika Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../index.php">Home Page</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#products_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Products <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="products_dropdown" class="collapse">
                    <li>
                        <a href="#">View All Products</a>
                    </li>
                    <li>
                        <a href="#">Add Product</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-dashboard"></i> Catalogs</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#rep_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Representatives <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="rep_dropdown" class="collapse">
                    <li>
                        <a href="#">View All Representatives</a>
                    </li>
                    <li>
                        <a href="#">Add Representative</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-dashboard"></i> About Us</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-dashboard"></i> Contacts</a>
            </li>
            <li>
                <a href="navigationItems.php"><i class="fa fa-fw fa-dashboard"></i> Navigation</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>