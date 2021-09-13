<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Boostrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


    <style>
    body {
        font-family: 'Kanit', sans-serif;
    }

    #container {
        background-color: lightgray;
        width: 100%;
        height: 670px;
    }

    .navbar-brand {
        color: #FFFFFF;
        font-size: 30px;
        font-weight: bold;
        left: 10px;
    }

    .navbar-brand:hover {
        color: #FFFFFF;

    }

    .nav-link:hover {
        color: #FFFFFF;
        background-color: #1E90FF;
    }

    .nav-link:visited {
        color: #FFFFFF;
    }

    .bg-dark {
        box-shadow: 0px 5px 5px rgb(0 0 0 / 35%);
    }


    #u0_div {

        margin-top: 80px;
        margin-bottom: 50px;
        width: 550px;
        height: 370px;
        background: inherit;
        background-color: white;
        border: none;
        border-radius: 10px;
        box-shadow: 5px 5px 5px rgb(0 0 0 / 35%);
    }

    #u1_text {
        font-weight: 700;
        font-style: normal;
        font-size: 24px;
        letter-spacing: 0.4px;
        text-align: center;
        margin: 0;
    }

    #u1 {
        text-align: center;
        padding-top: 25px;
    }


    label {
        font-size: 14px;
        font-weight: 700;
        font-style: inherit;
        margin-bottom: 2px;
        display: block;
    }

    .form-row {
        display: flex;

        padding-bottom: 7px;
        margin: 0 131px;
    }

    input {
        width: 260px;
    }


    .form-row .form-group {

        padding: 5px 2px;
    }

    .register-form {
        padding: 0 10px 55px;
    }

    #form-row {
        margin: 0 0 10px;
    }

    .form-check {
        margin: 0 130px;
    }

    .btn {
        width: 270px;
    }

    #btn {
        padding: 10px 10px 10px 128px;
    }

    #text0 {
        padding-left: 20px;
    }
    </style>



</head>

<body>
    <div id="container">

        <!-- Tag Header -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" id="text0" href="/home">ISAC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <?php ini_set('display_errors', '1');  ?>
        <?php if (isset($validation)) : ?>
        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
        <?php endif; ?>

        <div id="u0_div" class="container">
            <div id="u1">
                <p id="u1_text"><span>เข้าสู่ระบบ</span></p>
                <p><span>ไม่มีบัญชี?<a href="/register">ลงทะเบียน</a></span></p>
            </div>

            <form action="/login/auth" method="post">
                <div id="form-row">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="stu_id">รหัสนักศึกษา</label>
                            <input type="text" name="stu_id" id="stu_id" required=""
                                value="<?= set_value('stu_id'); ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="FnEng">รหัสผ่าน</label>
                            <input type="password" name="password" id="inputforpassword">
                        </div>
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label style="display: inline-flex; padding-right:62px;  font-weight: 0;">
                        จดจำฉัน
                    </label>
                    <label style="display: inline-flex; text-align:right;"><a
                            href="/register">ลืมรหัสผ่านหรือไม่?</a></label>
                </div>

                <div id="btn">
                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                </div>

            </form>



        </div>




    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>