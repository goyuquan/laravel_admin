<body class="">

<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it -->

            <a href="javascript:void(0);" id="show-shortcut">
                <i class="fa fa-user" style="font-size:2em;position: relative; top: 0.1em;margin-right:0.5em;">    </i>
                <span>
                    {{ Auth::user()->name }}
                </span>
                <i class="fa fa-angle-down"></i>
            </a>

        </span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive

    To make this navigation dynamic please make sure to link the node
    (the reference to the nav > ul) after page load. Or the navigation
    will not initialize.
-->
<nav>
    <!-- NOTE: Notice the gaps after each icon usage <i></i>..
    Please note that these links work a bit different than
    traditional hre="" links. See documentation for details.
-->

<ul>
    <li class="active">
        <a href="/admin" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">控制台</span></a>
    </li>
    <li>
        <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">内容管理</span></a>
        <ul>
            <li>
                <a href="/admin/article/create">新建文章</a>
            </li>
            <li>
                <a href="form-templates.html">Smart Form Layouts</a>
            </li>
            <li>
                <a href="validation.html">Smart Form Validation</a>
            </li>
            <li>
                <a href="bootstrap-forms.html">Bootstrap Form Elements</a>
            </li>
            <li>
                <a href="plugins.html">Form Plugins</a>
            </li>
            <li>
                <a href="wizard.html">Wizards</a>
            </li>
            <li>
                <a href="other-editors.html">Bootstrap Editors</a>
            </li>
            <li>
                <a href="dropzone.html">Dropzone <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
        <ul>
            <li>
                <a href="table.html">Normal Tables</a>
            </li>
            <li>
                <a href="datatables.html">Data Tables</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span></a>
        <ul>
            <li>
                <a href="general-elements.html">General Elements</a>
            </li>
            <li>
                <a href="buttons.html">Buttons</a>
            </li>
            <li>
                <a href="#">Icons</a>
                <ul>
                    <li>
                        <a href="fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
                    </li>
                    <li>
                        <a href="glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="grid.html">Grid</a>
            </li>
            <li>
                <a href="treeview.html">Tree View</a>
            </li>
            <li>
                <a href="nestable-list.html">Nestable Lists</a>
            </li>
            <li>
                <a href="jqui.html">JQuery UI</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-lg fa-fw fa-folder-open"></i> <span class="menu-item-parent">6 Level Navigation</span></a>
        <ul>
            <li>
                <a href="#"><i class="fa fa-fw fa-folder-open"></i> 2nd Level</a>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-folder-open"></i> 4th Level</a>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-folder-open"></i> 5th Level</a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-folder-open"></i> Folder</a>

                <ul>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </li>
        </ul>
    </li>
    <li>
        <a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"><em>3</em></i> <span class="menu-item-parent">Calendar</span></a>
    </li>
    <li>
        <a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
    </li>
    <li>
        <a href="gallery.html"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Gallery</span></a>
    </li>
    <li>
        <a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">网站服务</span></a>
        <ul>
            <li>
                <a href="typography.html">Typography</a>
            </li>
            <li>
                <a href="pricing-table.html">价格表</a>
            </li>
            <li>
                <a href="invoice.html">Invoice</a>
            </li>
            <li>
                <a href="lock.html" target="_top">锁屏</a>
            </li>
            <li>
                <a href="error404.html">Error 404</a>
            </li>
            <li>
                <a href="error500.html">Error 500</a>
            </li>
            <li>
                <a href="search.html">Search Page</a>
            </li>
            <li>
                <a href="ckeditor.html">CK Editor</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-lg fa-fw fa-file"></i> <span class="menu-item-parent">Other Pages</span></a>
        <ul>
            <li>
                <a href="forum.html">Forum Layout</a>
            </li>
            <li>
                <a href="profile.html">Profile</a>
            </li>
            <li>
                <a href="timeline.html">Timeline</a>
            </li>
        </ul>
    </li>
</ul>
</nav>
<span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>
