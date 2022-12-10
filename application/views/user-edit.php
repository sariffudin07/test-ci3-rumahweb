<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="py-3">Edit User</h1>

                <form method="post" action="<?php echo base_url() . 'user/update/' . $id; ?>">
                    <div class="input-group mb-3">
                        <select class="form-select" name="title">
                            <option selected><?= $title; ?></option>
                            <option value="mr">Mr</option>
                            <option value="mrs">MRs</option>
                            <option value="miss">Miss</option>
                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">Title</label>
                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" value="<?= $title; ?>" class="form-control">
                    </div> -->
                    <div class="mb-3">
                        <label class="form-label">FirstName</label>
                        <input type="text" name="firstName" value="<?= $firstName; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">LastName</label>
                        <input type="text" name="lastName" value="<?= $lastName; ?>" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- <script src="sidebars.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>

</html>