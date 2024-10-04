<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Americas Book Writing</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="shortcut icon" href="images/logo-main.png" type="image/x-icon" />
    <link rel="icon" href="images/logo-main.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    .project-section {
        position: relative;
        padding: 90px 0px;
        background-color: #f2f0f8;
    }

    .project-section .title-box {
        position: relative;
        text-align: center;
        margin-bottom: 45px;
    }

    .project-section .title-box h2 {
        position: relative;
        color: #d41b30;
        font-size: 38px;
        font-weight: 700;
    }

    .project-section .outer-container {
        position: relative;
        padding: 0px 30px;
        margin: 0px -2px;
    }

    .project-section .filters {
        position: relative;
        margin-bottom: 50px;
    }

    .project-section .filters .filter-tabs {
        position: relative;
    }

    .project-section .filters li {
        position: relative;
        display: inline-block;
        color: #000000;
        cursor: pointer;
        font-size: 20px;
        font-weight: 400;
        margin: 0px 30px 6px;
        padding: 0px 0px 6px;
        text-transform: capitalize;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        font-family: "Rufina", serif;
    }

    .project-section .filters li:before {
        position: absolute;
        content: "";
        left: 0px;
        bottom: 0px;
        height: 1px;
        width: 0px;
        background-color: #d41b30;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
    }

    .project-section .filters li.active,
    .project-section .filters li:hover {
        color: #001649;
    }

    .project-section .filters li.active::before,
    .project-section .filters li:hover::before {
        width: 100%;
    }

    .project-section.style-two .filters li:before {
        background-color: #242424;
    }

    .project-section.style-two {
        background-color: #cecece;
    }

    .project-section.style-two .filters li,
    .project-section.style-two .title-box h2,
    .project-section.style-two .more-projects .projects {
        color: #242424;
    }

    .project-section .gallery-item.large-block {
        width: 40%;
        float: left;
        padding: 0px 15px;
    }

    .project-section .gallery-item.small-block {
        width: 20%;
        float: left;
        padding: 0px 15px;
    }

    .project-section .more-projects {
        position: relative;
        margin-top: 10px;
        text-align: center;
    }

    .project-section .more-projects .projects {
        position: relative;
        color: #001649;
        font-size: 22px;
        font-weight: 400;
        font-family: "Rufina", serif;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .project-section .more-projects .projects:hover {
        color: #d41b30;
    }

    .hideer {
        display: none;
    }
</style>

<body>
    <!-- Project Section -->
    <section class="project-section">
        <div class="auto-container">
            <!-- Title Box -->
            <div class="title-box">
                <h2>Your Best Chance to Become a Published Bestseller</h2>
                <p class="pt-2">
                    Book Writing America turns your ideas into bestsellers with expert writing, editing, and publishing
                    services.</p>
            </div>
        </div>

        <div class="outer-container">
            <!--Isotope Galery-->
            <div class="sortable-masonry">
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">
                            All Project
                        </li>
                        <li class="filter" data-role="button" data-filter=".fiction">
                            Fiction
                        </li>
                        <li class="filter" data-role="button" data-filter=".non-fiction">
                            Non Fiction
                        </li>
                        <li class="filter" data-role="button" data-filter=".biography">
                            Biography
                        </li>
                        <li class="filter" data-role="button" data-filter=".children">
                            Children
                        </li>

                        <li class="filter" data-role="button" data-filter=".informative">
                            Informative
                        </li>
                    </ul>
                </div>

                <div class="items-container row clearfix">
                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all fiction">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/new/Fiction/F1.jpg" alt="" />
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>
                                                <a href="projects-fullwidth.html">Fiction</a>
                                            </h3>
                                            <a href="images/new/Fiction/F1.jpg" data-fancybox="gallery-1"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span
                                                    class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all biography">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/new/Biography/b5.jpg" alt="" />
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>
                                                <a href="projects-fullwidth.html">Biography</a>
                                            </h3>
                                            <a href="images/new/Biography/b5.jpg" data-fancybox="gallery-1"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span
                                                    class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all fiction">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/new/Fiction/F2.jpg" alt="" />
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>
                                                <a href="projects-fullwidth.html">Fiction</a>
                                            </h3>
                                            <a href="images/new/Fiction/F2.jpg" data-fancybox="gallery-1"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span
                                                    class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all biography">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/new/Biography/b1.jpg" alt="" />
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>
                                                <a href="projects-fullwidth.html">Biography</a>
                                            </h3>
                                            <a href="./images/new/biography/b1.jpg" data-fancybox="gallery-1"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span
                                                    class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all fiction">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/new/fiction/F3.jpg" alt="" />
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>
                                                <a href="projects-fullwidth.html">Fiction</a>
                                            </h3>
                                            <a href="images/new/fiction/F3.jpg" data-fancybox="gallery-1"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span
                                                    class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all non-fiction">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="./images/new/non-fiction/non1.webp" alt="" />
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>
                                                <a href="projects-fullwidth.html">Non Fiction</a>
                                            </h3>
                                            <a href="./images/new/non-fiction/non1.webp" data-fancybox="gallery-1"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span
                                                    class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all non-fiction">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="./images/new/non-fiction/non2.jpg" alt="" />
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>
                                                <a href="projects-fullwidth.html">Non Fiction</a>
                                            </h3>
                                            <a href="./images/new/non-fiction/non2.jpg" data-fancybox="gallery-1"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span
                                                    class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all children">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="./images/new/children/c4.jpg" alt="" />
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>
                                                <a href="projects-fullwidth.html">Children</a>
                                            </h3>
                                            <a href="./images/new/children/c4.jpg" data-fancybox="gallery-1"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span
                                                    class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all non-fiction">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="./images/new/non-fiction/non3.jpg" alt="" />
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>
                                                <a href="projects-fullwidth.html">Non Fiction</a>
                                            </h3>
                                            <a href="./images/new/non-fiction/non3.jpg" data-fancybox="gallery-1"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span
                                                    class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all fiction">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="./images/new/fiction/F4.webp" alt="" />
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>
                                                <a href="projects-fullwidth.html">Fiction</a>
                                            </h3>
                                            <a href="./images/new/fiction/F4.webp" data-fancybox="gallery-1"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span
                                                    class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- sdfklsj -->
                    <div class="hideer" id="hideer">

                        <div class="gallery-item small-block masonry-item all biography">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/biography/b2.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Biography</a>
                                                </h3>
                                                <a href="./images/new/biography/b2.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all non-fiction">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/non-fiction/non4.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Non Fiction</a>
                                                </h3>
                                                <a href="./images/new/non-fiction/non4.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all fiction">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/fiction/F5.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Fiction</a>
                                                </h3>
                                                <a href="./images/new/fiction/F5.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all children">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/children/c1.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Children</a>
                                                </h3>
                                                <a href="./images/new/children/c1.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all non-fiction">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/non-fiction/non5.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Non Fiction</a>
                                                </h3>
                                                <a href="./images/new/non-fiction/non5.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all biography">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/biography/b4.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Biography</a>
                                                </h3>
                                                <a href="./images/new/biography/b4.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all biography">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/biography/b3.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Biography</a>
                                                </h3>
                                                <a href="./images/new/biography/b3.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all informative">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/informative/i4.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Informative</a>
                                                </h3>
                                                <a href="./images/new/informative/i4.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all informative">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/informative/i5.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Informative</a>
                                                </h3>
                                                <a href="./images/new/informative/i5.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all children">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/children/c2.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Children</a>
                                                </h3>
                                                <a href="./images/new/children/c2.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all children">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/children/c3.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Children</a>
                                                </h3>
                                                <a href="./images/new/children/c3.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all children">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/children/c5.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Children</a>
                                                </h3>
                                                <a href="./images/new/children/c5.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all informative">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/informative/i1.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Informative</a>
                                                </h3>
                                                <a href="./images/new/informative/i1.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all informative">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/informative/i2.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">informative</a>
                                                </h3>
                                                <a href="./images/new/informative/i2.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item small-block masonry-item all informative">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="./images/new/informative/i3.jpg" alt="" />
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3>
                                                    <a href="projects-fullwidth.html">Infor</a>
                                                </h3>
                                                <a href="./images/new/informative/i3.jpg" data-fancybox="gallery-1"
                                                    data-caption="" class="link"><span
                                                        class="icon flaticon-magnifying-glass-1"></span></a>
                                                <a href="projects-fullwidth.html" class="link"><span
                                                        class="icon flaticon-unlink"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="show">View All Projects</button>
                </div>
    </section>
    <!-- End Project Section -->

<script>
    let show = document.getElementById("show");
    let hide = document.getElementById("hideer")

    show.addEventListener("click",()=>{
        hide.style.display = "block"
    })
</script>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/scrollbar.js"></script>
    <script src="js/script.js"></script>
</body>

</html>