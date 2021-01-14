<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Christian soldevilla porfolio - CSE 341</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php require_once("modules/navbar.php")?>
  <main class="container container-fluid">
    <div class="container container-fluid mt-5">
      <div class="card personal-card">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/me.jpg" alt="an image of christian soldevilla" class="img-fluid">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Hi Everyone</h5>
              <p class="card-text">My name is Christian Soldevilla, I'm from Peru. I was born in Moquegua that is a small city on the south coast of my country but I lived most part of my life in Puno. Puno is a small city in the Andes of Peru. My city has the world's highest navigable lake At 12,500 feet above sea level.</p>
              <p class="card-text">
                <small class="text-muted">
                <?php
                echo "Last modified: " . date ("F d Y ", filemtime(__FILE__));
                ?>
                </small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container container-fluid mt-5 mb-4">
      <h2>About my interests and hobbies</h2>
      <ul class="my-intersts">
        <li>Taekwondo</li>
        <li>Skateboarding</li>
        <li>Videogames</li>
        <li>Technology</li>
        <li>Sci-fi</li>
      </ul>
    </div>
  </main>
  <?php require_once("modules/footer.php")?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>