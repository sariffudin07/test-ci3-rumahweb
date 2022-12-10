<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container py-5">
        <a href="<?php echo base_url() . 'user' ?>" class="btn btn-link text-dark">
            <h1>Data User</h1>
        </a>
        <div class="row">
            <div class="col">
                <a href="<?php echo base_url() . 'user/create' ?>" class="btn btn-primary btn-sm my-3">Create User</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <td>Title</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Picture</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $value) { {
                        ?>
                                <tr>
                                    <td><?= $value->id ?></td>
                                    <td><?= $value->title ?></td>
                                    <td><?= $value->firstName ?></td>
                                    <td><?= $value->lastName ?></td>
                                    <td><img src="<?= $value->picture ?>" alt=""></td>
                                    <td><a href="<?php echo base_url() . 'user/edit/' . $value->id; ?>" class="btn btn-link btn-sm">Edit</a></td>
                                    <td><a href="<?php echo base_url() . 'user/delete/' . $value->id; ?>" class="btn btn-link btn-sm">Delete</a></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
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