<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pet Shelter</title>
  </head>
  <body>
        <!-- Load the nav bar -->
        <?php include 'navbar.php'; ?>

    <div class="container">
    <form action="handleaddpet.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Pet Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= isset($name) ? $name : '' ?>">
            <span class="text-danger">
                <?= isset($error["name"]) ? $error['name'] : '' ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" name="age" value="<?= $age ?>">
            <span class="text-danger">
                <?= isset($error["age"]) ? $error['age'] : '' ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" value="<?= $description?>"></textarea>
            <span class="text-danger">
                <?= isset($error["description"]) ? $error['description'] : '' ?>
            </span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>        
    
    </div>
        

  </body>
  </html>