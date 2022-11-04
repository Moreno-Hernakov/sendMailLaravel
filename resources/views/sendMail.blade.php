<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5 text-info ">KIRIM EMAIL KE @tpihindo5@gmail.com</h1>
        <div class="col-md-6 p-5 mx-auto shadow bg-info">
            <form action="/sendmail" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3 ">
                        <input name="email" type="email" class="form-control" placeholder="email">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input name="name" type="text" class="form-control" placeholder="name">
                    </div>
                </div>
                <div class="form-floating mb-4">
                    <textarea name="message" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div>
                <button class="btn btn-dark" type="submit">send mail</button>
            </form>
        </div>
    </div>
</body>
</html>