<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    
    <title>Mugabo Hubert</title>

</head>
<body>
    <?php 
        include('navbar.html');
        include('slideshow.html');
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="card mt-3">
                    <img src="./assets/images/conference/2.jpeg" alt="events" class="card-img-top">
                    <div class="card-header">
                        Event Management
                    </div>
                    <div class="card-body">
                        In event management, we include interpretation services, and other services
                    </div>
                    <div class="card-footer">
                        <a href="event.php" class="btn btn-success">see More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card mt-3">
                    <img src="./assets/images/logistics/gorilla.jpg" alt="logistics" class="card-img-top">
                    <div class="card-header">
                        Hospitality
                    </div>
                    <div class="card-body">
                        Here we make you visit any place in our beloved country.
                    </div>
                    <div class="card-footer">
                        <a href="logistics.php" class="btn btn-success">see More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card mt-3">
                    <img src="./assets/images/household items/cup.jpg" alt="Household item" class="card-img-top">
                    <div class="card-header">
                        Household items
                    </div>
                    <div class="card-body">
                        any personnalized household item
                    </div>
                    <div class="card-footer">
                        <a href="household.php" class="btn btn-success">see More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card mt-3">
                    <img src="./assets/images/sport items/cover.jpg" alt="Household item" class="card-img-top">
                    <div class="card-header">
                        sport items
                    </div>
                    <div class="card-body">
                        any shirt, leggings, and other items to help dress appropriately for any sport.
                    </div>
                    <div class="card-footer">
                        <a href="sport.php" class="btn btn-success">see More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include('footer.html')
    ?>
</body>
</html>