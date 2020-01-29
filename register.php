<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register (สมัครสมาชิก)</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-12 order-md-1 p-4">
        <h4 class="mb-3">สมัครสมาชิก</h4>
        <form class="needs-validation" novalidate="">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">ชื่อ</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        ชื่อของคุณ.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">นามสกุล</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        นามสกุลของคุณ.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="username">ชื่อผู้ใช้</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="form-control" id="username" placeholder="" required="">
                    <div class="invalid-feedback" style="width: 100%;">
                         ชื่อผู้ใช้ที่ต้องการ.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">อีเมล์ </label>
                <input type="email" class="form-control" id="email" placeholder="">
                <div class="invalid-feedback">
                    โปรดใส่อีเมล์ปัจจุบันของคุณ.
                </div>
            </div>

            <div class="mb-3">
                <label for="address">ที่อยู่</label>
                <input type="text" class="form-control" id="address" placeholder="" required="">
                <div class="invalid-feedback">
                    โปรดใส่ที่อยู่.
                </div>
            </div>

            <div class="mb-3">
                <label for="address2">ที่อยู่ 2 </label>
                <input type="text" class="form-control" id="address2" placeholderApartment or suite
            </div>

            <button class="btn btn-success btn-lg btn-block" type="submit">ตกลง</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>