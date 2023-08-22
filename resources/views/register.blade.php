<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restaurent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
<body>
    <form action="/register" method="post">
    @csrf
<section class="vh-100 bg-image"
  style="background-image: url('/storage/images/RegisterBackground.jpg');object-fit: cover">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form>

                <div class="form-outline mb-4">
                  <input type="text" id="name" name="name" placeholder="Username" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" placeholder="Email" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" placeholder="Password" class="form-control form-control-lg" />

                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="repassword" name="repassword" placeholder="Repassword" class="form-control form-control-lg" />
                </div>
                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Type of user: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="typeofuser" id="typeofuser"
                      value="1" />
                    <label class="form-check-label" for="typeofuser">Admin</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="typeofuser" id="typeofuser"
                      value="2" />
                    <label class="form-check-label" for="typeofuser">Customer</label>
                  </div>


                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" value="Register"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</body>

</html>