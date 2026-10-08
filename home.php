<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>eShop | Home</title>

    <link rel="icon" href="resources/logo.svg" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <hr class="hr-break-1" />

            <div class="col-12 justify-content-center">
                <div class="row mb-3">

                    <div class="col-4 col-lg-1 offset-4 offset-lg-1 logo-img"></div>

                    <div class="col-8 col-lg-6">
                        <div class="input-group input-group-lg mt-3 mb-3">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" id="basic_search_txt" />

                            <select class="btn btn-outline-primary" id="basic_search_select">
                                <option value="0" readonly>Select Category</option>

                      

                            </select>

                        </div>
                    </div>

                    <div class="col-2 d-grid gap-2">
                        <button class="btn btn-primary mt-3 search-btn" onclick="basicSearch(0);">Search</button>
                    </div>

                    <div class="col-2 mt-4">
                        <a href="advancedSearch.php" class="link-secondary link-1">Advanced</a>
                    </div>

                </div>
            </div>

            <hr class="hr-break-1" />

            <div class="col-12" id="basicSearchResult">

                <div class="col-12 d-none d-lg-block">
                    <div class="row">
                        <div id="carouselExampleCaptions" class="col-8 offset-2 carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="resources/slider images/posterimg.jpg" class="d-block poster-img-1">
                                    <div class="carousel-caption d-none d-md-block poster-caption">
                                        <h5 class="poster-title">Welcome to eShop</h5>
                                        <p class="poster-text">The World's Best Online Store By One Click.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="resources/slider images/posterimg2.jpg" class="d-block poster-img-1">
                                </div>
                                <div class="carousel-item">
                                    <img src="resources/slider images/posterimg3.jpg" class="d-block poster-img-1">
                                    <div class="carousel-caption d-none d-md-block poster-caption-1">
                                        <h5 class="poster-title">Be Free...</h5>
                                        <p class="poster-text">Experience the Lowest Delivery Costs With Us.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

              
        

        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>

</body>

</html>