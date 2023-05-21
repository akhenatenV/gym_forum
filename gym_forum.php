<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"                href="main.css">
    <title>WFU | Forum</title>
    

    <style>
        input{
            outline: none;
        }


        /* .container{
        } */
        .forum-sticky-nav-bar-top--{
            box-shadow: 0px 2px 1rem #000;
            padding: 1rem 1rem;
            z-index: 1999;
        }
        .nav-search-bar--{
            border-top-left-radius: 1rem;
            border-bottom-left-radius: 1rem;
            padding-left: 1rem;
            border: none;
        }
        .nav-search-button--{
            border-top-right-radius: 1rem !important;
            border-bottom-right-radius: 1rem !important;
        }
        .nav-search-button--:hover{
            background-color: #515151;
        }


        .main-section--{
            margin-right: 0px !important;
            margin-left: 0px !important;
            margin-top: 120px;
        }
        .side-nav-left--{
            position: fixed;
            width: 20%;
        }
        /* .menu--{

        } */
        .menu-item.active{
            border-right: 6px solid #00f400;
            background-color: rgba(0, 0, 0, 0.1);
        }

        @media (width <= 807px){
            .side-nav-left--{
                display: none;
            }
            .forum-questions-wrapper--{
                margin-top: 2rem;
                margin-left: 0% !important;
            }
            .forum-questions-content--{
                display: inline !important;
            }
            .forum-question-wrapper--{
                display: inline-block !important;
            }
            .forum-questions-stats-wrapper--{
                margin-left: 1.5rem;
                display: inline-block !important;
            }
            .forum-questions-body--{
                display: none;
            }
            .forum-question-body-content--{
                flex-direction: column;
            }
            
            .hamburger{
                display: block;
                position: fixed;
                left: 1rem;
                top: 100px;
            }
            .hamburger:hover ~ .side-nav-left{
                display: fixed;
            }
        }

        .forum-questions-wrapper--{
            border-left: 1px solid #d8d8d8;
            padding-left: 1rem;
            margin-left: 25%;
        }
        .forum-questions-top-section--{
            margin: 0 1rem;
        }
        .forum-questions-content--{
            padding: 1rem;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <nav class="forum-sticky-nav-bar-top-- theme light d-flex position-fixed top-0 left-0 w-100 align-items-center theme-white">
            <div class="nav-logo"><h2>wfu<strong>Talk</strong></h2></div>
            <div class="btn-group w-100">
                <ul class="nav flex-column-reverse">
                    <li class="nav-button-group-- nav-item btn-group">
                        <input type="text" class="nav-search-bar-- w-100 theme-dark" name="search-bar" placeholder="Search...">
                        <button class="btn nav-search-button-- theme-dark">Search</button>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="hamburger">
            <button class="hamburger">&#9776;</button>
        </div>

        <div class="main-section-- d-flex">
            <aside class="side-nav-left--  mar-l-xxl">
            <div class="menu-- ">
                <div class="menu-label">Menu </div>
                <ul class="menu-list">
                    <li class="menu-item active">
                        <a class="" href="">Home</a>
                    </li>
                    <li class="menu-item mar-t-lg mar-b-lg">
                        Public
                    </li>
                    <li class="menu-item">
                        <a href="">Questions</a>
                    </li>
                    <li class="menu-item">
                        <a href="">Users</a>
                    </li>
                </ul>
            </aside>

            <script>

            </script>

            <main class="forum-questions-wrapper-- d-flex w-100 flex-column gap-lg">
                <div class="forum-questions-top-section--">
                    <div class="d-flex justify-content-between">
                        <h4><u>Top Questions</u></h4>
                        <buton class="btn btn-primary-1">Ask Question</buton>
                    </div>
                    <div class=""></div>
                    <div class="d-flex justify-content-end">
                        <div class="btn-group">
                            <button class="btn btn-dark-0">Interesting</button>
                            <button class="btn btn-dark-0">[168] Bountied</button>
                            <button class="btn btn-dark-0">Hot</button>
                            <button class="btn btn-dark-0">Week</button>
                            <button class="btn btn-dark-0">Month</button>
                        </div>
                    </div>
                </div>

                <div class="forum-questions-content-- d-flex border-b-1 pad-b-xl">
                    <div class="forum-question-wrapper-- d-flex flex-column align-items-end">
                        <div class="forum-questions-stats-wrapper-- d-flex">
                            <div class="forum-questions-stats-- d-flex gap-sm">
                                <span class="forum-questions-stats--votes">4</span>
                                <span class="forum-questions-stats-meta--">Votes</span>
                            </div>
                        </div>
                        <div class="forum-questions-stats-wrapper-- d-flex">
                            <div class="forum-questions-stats-- d-flex gap-sm">
                                <span class="forum-questions-stats--votes">26</span>
                                <span class="forum-questions-stats-meta--">Answers</span>
                            </div>
                        </div>
                        <div class="forum-questions-stats-wrapper-- d-flex">
                            <div class="forum-questions-stats-- d-flex gap-sm">
                                <span class="forum-questions-stats--votes">216</span>
                                <span class="forum-questions-stats-meta--">Views</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="forum-questions-body-- d-flex flex-column mar-l-xxl w-100">
                        <h5 class="forum-question-body-title-- mar-b-sm"><a href="">This is the title of the question</a></h5>
                        <div class="forum-question-body-content-- d-flex gap-lg">
                            <div class="forum-question-tags-- btn-group">
                                <spoan class="badge">Tag 1</spoan>
                                <spoan class="badge">Tag 2</spoan>
                                <spoan class="badge">Tag 3</spoan>
                            </div>
                            <div class="d-flex gap-lg">
                                <span class="forum-question-body-content-author--" title="Author"><a href="#" class="link">Robert Wilson</a></span>
                                <span class="forum-question-body-content-rep-score--" title="Rep Score">86</span>
                                <span class="forum-question-body-content-posted--" title="Posted"><small>10 min ago</small></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="forum-questions-content-- d-flex border-b-1 pad-b-xl">
                    <div class="forum-question-wrapper-- d-flex flex-column align-items-end">
                        <div class="forum-questions-stats-wrapper-- d-flex">
                            <div class="forum-questions-stats-- d-flex gap-sm">
                                <span class="forum-questions-stats--votes">4</span>
                                <span class="forum-questions-stats-meta--">Votes</span>
                            </div>
                        </div>
                        <div class="forum-questions-stats-wrapper-- d-flex">
                            <div class="forum-questions-stats-- d-flex gap-sm">
                                <span class="forum-questions-stats--votes">26</span>
                                <span class="forum-questions-stats-meta--">Answers</span>
                            </div>
                        </div>
                        <div class="forum-questions-stats-wrapper-- d-flex">
                            <div class="forum-questions-stats-- d-flex gap-sm">
                                <span class="forum-questions-stats--votes">216</span>
                                <span class="forum-questions-stats-meta--">Views</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="forum-questions-body-- d-flex flex-column mar-l-xxl w-100">
                        <h5 class="forum-question-body-title-- mar-b-sm"><a href="">This is the title of the question</a></h5>
                        <div class="forum-question-body-content-- d-flex gap-lg">
                            <div class="forum-question-tags-- btn-group">
                                <spoan class="badge">Tag 1</spoan>
                                <spoan class="badge">Tag 2</spoan>
                                <spoan class="badge">Tag 3</spoan>
                            </div>
                            <div class="d-flex gap-lg">
                                <span class="forum-question-body-content-author--" title="Author"><a href="#" class="link">Robert Wilson</a></span>
                                <span class="forum-question-body-content-rep-score--" title="Rep Score">86</span>
                                <span class="forum-question-body-content-posted--" title="Posted"><small>10 min ago</small></span>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="forum-questions-content-- d-flex border-b-1 pad-b-xl">
                    <div class="forum-question-wrapper-- d-flex flex-column align-items-end">
                        <div class="forum-questions-stats-wrapper-- d-flex">
                            <div class="forum-questions-stats-- d-flex gap-sm">
                                <span class="forum-questions-stats--votes">4</span>
                                <span class="forum-questions-stats-meta--">Votes</span>
                            </div>
                        </div>
                        <div class="forum-questions-stats-wrapper-- d-flex">
                            <div class="forum-questions-stats-- d-flex gap-sm">
                                <span class="forum-questions-stats--votes">26</span>
                                <span class="forum-questions-stats-meta--">Answers</span>
                            </div>
                        </div>
                        <div class="forum-questions-stats-wrapper-- d-flex">
                            <div class="forum-questions-stats-- d-flex gap-sm">
                                <span class="forum-questions-stats--votes">216</span>
                                <span class="forum-questions-stats-meta--">Views</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="forum-questions-body-- d-flex flex-column mar-l-xxl w-100">
                        <h5 class="forum-question-body-title-- mar-b-sm"><a href="">This is the title of the question</a></h5>
                        <div class="forum-question-body-content-- d-flex gap-lg">
                            <div class="forum-question-tags-- btn-group">
                                <spoan class="badge">Tag 1</spoan>
                                <spoan class="badge">Tag 2</spoan>
                                <spoan class="badge">Tag 3</spoan>
                            </div>
                            <div class="d-flex gap-lg">
                                <span class="forum-question-body-content-author--" title="Author"><a href="#" class="link">Robert Wilson</a></span>
                                <span class="forum-question-body-content-rep-score--" title="Rep Score">86</span>
                                <span class="forum-question-body-content-posted--" title="Posted"><small>10 min ago</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
                            