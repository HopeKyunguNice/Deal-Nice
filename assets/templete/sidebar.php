<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="index.php" class="header-logo">
            <img src="./assets/uploads/<?php echo $logo; ?>" class="img-fluid rounded-normal" alt="">
            <div class="logo-title">
                <span class="text-primary text-uppercase">DealNice</span>
            </div>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-bars"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="active active-menu">
                    <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span
                            class="ripple rippleEffect"></span><i
                            class="las la-home iq-arrow-left"></i><span>Shop</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                        <li class="active"><a href="index.php"><i class="las la-house-damage"></i>Home
                                Page</a></li>

                        <li><a href="electronic.php"><i class="ri-tablet-fill"></i>Électronique</a></li>
                        <li><a href="super_marché.php"><i class="ri-shopping-cart-2-line"></i>Super-Marché</a></li>
                        <li><a href="seconde_main.php"><i class="las la-location-arrow"></i>Seconde
                                main</a>
                        </li>
                        <li><a href="book.php"><i class="ri-book-line"></i>Livres</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="ri-function-line"></i><span>Category</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="categories.php"><i class="ri-function-line"></i>Category Page</a>
                        </li>
                        <li><a href="categorie_femme.php"><i class="ri-record-circle-line"></i>Femme</a>
                        </li>
                        <li><a href="categorie_enfant.php"><i class="ri-record-circle-line"></i>Enfant</a>
                        </li>
                        <li><a href="categorie_homme.php"><i class="ri-record-circle-line"></i>Homme</a>
                        </li>
                        <li><a href="categorie_bijoux.php"><i class="ri-record-circle-line"></i>Bijoux &
                                Montre</a></li>
                        <li><a href="categorie_gateaux.php"><i class="ri-record-circle-line"></i>Gateaux</a>
                        </li>
                        <li><a href="categorie_fourniture.php"><i class="ri-record-circle-line"></i>Founiture
                                scolaire</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                            class="ripple rippleEffect"></span><i
                            class="las la-user-tie iq-arrow-left"></i><span>Utilisateur</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                        <li><a href="profile.php"><i class="las la-id-card-alt"></i>Mon Profil</a></li>
                        <li><a href="customer-profile-update.php"><i class="las la-edit"></i>Modifier le
                                profil</a></li>
                        <li><a href="registration.php"><i class="las la-plus-circle"></i>S'inscrire</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>Librairies</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="elements">
                            <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-play-circle-line"></i><span>UI
                                    Kit</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="sub-menu" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="ui-colors.php"><i class="las la-palette"></i>colors</a></li>
                                <li><a href="ui-typography.php"><i class="las la-keyboard"></i>Typography</a>
                                </li>
                                <li><a href="ui-alerts.php"><i class="las la-tag"></i>Alerts</a></li>
                                <li><a href="ui-badges.php"><i class="lab la-atlassian"></i>Badges</a></li>
                                <li><a href="ui-breadcrumb.php"><i class="las la-bars"></i>Breadcrumb</a>
                                </li>
                                <li><a href="ui-buttons.php"><i class="las la-tablet"></i>Buttons</a></li>
                                <li><a href="ui-cards.php"><i class="las la-credit-card"></i>Cards</a></li>
                                <li><a href="ui-carousel.php"><i class="las la-film"></i>Carousel</a></li>
                                <li><a href="ui-embed-video.php"><i class="las la-video"></i>Video</a></li>
                                <li><a href="ui-grid.php"><i class="las la-border-all"></i>Grid</a></li>
                                <li><a href="ui-images.php"><i class="las la-images"></i>Images</a></li>
                                <li><a href="ui-list-group.php"><i class="las la-list"></i>list Group</a>
                                </li>
                                <li><a href="ui-media-object.php"><i class="las la-ad"></i>Media</a></li>
                                <li><a href="ui-modal.php"><i class="las la-columns"></i>Modal</a></li>
                                <li><a href="ui-notifications.php"><i class="las la-bell"></i>Notifications</a>
                                </li>
                                <li><a href="ui-pagination.php"><i class="las la-ellipsis-h"></i>Pagination</a>
                                </li>
                                <li><a href="ui-popovers.php"><i class="las la-eraser"></i>Popovers</a></li>
                                <li><a href="ui-progressbars.php"><i class="las la-hdd"></i>Progressbars</a>
                                </li>
                                <li><a href="ui-tabs.php"><i class="las la-database"></i>Tabs</a></li>
                                <li><a href="ui-tooltips.php"><i class="las la-magnet"></i>Tooltips</a></li>
                            </ul>
                        </li>
                        <li class="form">
                            <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="lab la-wpforms"></i><span>Forms</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="forms" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="form-layout.php"><i class="las la-book"></i>Form Elements</a>
                                </li>
                                <li><a href="form-validation.php"><i class="las la-edit"></i>Form
                                        Validation</a></li>
                                <li><a href="form-switch.php"><i class="las la-toggle-off"></i>Form
                                        Switch</a>
                                </li>
                                <li><a href="form-chechbox.php"><i class="las la-check-square"></i>Form
                                        Checkbox</a></li>
                                <li><a href="form-radio.php"><i class="ri-radio-button-line"></i>Form
                                        Radio</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms
                                    Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="wizard-form" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="form-wizard.php"><i class="ri-clockwise-line"></i>Simple
                                        Wizard</a></li>
                                <li><a href="form-wizard-validate.php"><i class="ri-clockwise-2-line"></i>Validate
                                        Wizard</a></li>
                                <li><a href="form-wizard-vertical.php"><i class="ri-anticlockwise-line"></i>Vertical
                                        Wizard</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="tables" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="tables-basic.php"><i class="ri-table-line"></i>Basic Tables</a>
                                </li>
                                <li><a href="data-table.php"><i class="ri-database-line"></i>Data Table</a>
                                </li>
                                <li><a href="table-editable.php"><i class="ri-refund-line"></i>Editable
                                        Table</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-pie-chart-box-line"></i><span>Charts</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="charts" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="chart-morris.php"><i class="ri-file-chart-line"></i>Morris
                                        Chart</a></li>
                                <li><a href="chart-high.php"><i class="ri-bar-chart-line"></i>High
                                        Charts</a>
                                </li>
                                <li><a href="chart-am.php"><i class="ri-folder-chart-line"></i>Am Charts</a>
                                </li>
                                <li><a href="chart-apex.php"><i class="ri-folder-chart-2-line"></i>Apex
                                        Chart</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="icons" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="icon-dripicons.php"><i class="ri-stack-line"></i>Dripicons</a>
                                </li>
                                <li><a href="icon-fontawesome-5.php"><i class="ri-facebook-fill"></i>Font
                                        Awesome 5</a></li>
                                <li><a href="icon-lineawesome.php"><i class="ri-keynote-line"></i>line
                                        Awesome</a></li>
                                <li><a href="icon-remixicon.php"><i class="ri-remixicon-line"></i>Remixicon</a>
                                </li>
                                <li><a href="icon-unicons.php"><i class="ri-underline"></i>unicons</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                            class="ion-information-circled"></i><span>A
                            Propos</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="about.php"><i class="ion-information"></i>About Us</a>

                        </li>

                        <li><a href="contact.php"><i class="ri-question-answer-line"></i>Contact</a>
                        </li>
                </li>

                </li>
                <li><a href="faq.php"><i class="ri-compasses-line"></i>Faq</a></li>
                <li><a href="blog.php"><i class="ion-archive"></i>Blog</a>
                <li><a href="partenaire.php"><i class="fa fa-users" aria-hidden="true"></i></i>Partenaires</a>
                <li><a href="pages-timeline.php"><i class="ri-map-pin-time-line"></i>Timeline</a>
                </li>
                <li><a href="pages-maintenance.php"><i class="ri-archive-line"></i>Maintenance</a>
                </li>
            </ul>
            </li>
            </ul>
        </nav>
        <div id="sidebar-bottom" class="p-3 position-relative">
            <div class="iq-card">
                <div class="iq-card-body">
                    <div class="sidebarbottom-content">
                        <div class="image"><img src="./assets/images/side-bkg.PNG" style="width: 120px; heidgt: 120px;"
                                alt=""></div>
                        <a href="contact.php"><button type="submit" class="btn w-100 btn-primary mt-4 view-more">Devenir
                                partenaire</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>