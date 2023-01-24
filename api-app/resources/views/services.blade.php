<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>

    <div id="demo">
        <h3 id="set-name"></h3>
        <h3 id="set-email"></h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <form id="submit-data" >
                    <div class="text-success" id="success"></div>
                    <div class="mb-3">
                        <label for=""> Type Your Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <div id="name-error" class="text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <label for=""> Type Your Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                        <div id="email-error" class="text-danger"></div>
                    
                    </div>
                    <div class="mb-3">
                        <label for=""> Type Your Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <div id="password-error" class="text-danger"></div>
                    
                    </div>
                    <div class="mb-3">
                        <input type="submit"   class="form-control bg-success" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <button class="btn btn-primary  my-3" id="get-data" >Get Data</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>

    <script>

        $("#submit-data").on("submit",function(e){
            e.preventDefault();
            $.ajax({
                "url":"http://127.0.0.1:8000/api/categories",
                "Content-type":"application/json",
                "Accept":"application/json",
                "method":"POST",
                "data":{
                    "name":$("#name").val(),
                    "email":$("#email").val(),
                    "password":$("#password").val(),
                },
                "success":function(data,status,xhr){
                    $("#name-error").html("");
                    $("#email-error").html("");
                    $("#password-error").html("");
                    $("#success").html("Data Added Successfully");
                },
                "error":function(xhr,status){
                    let errors = JSON.parse(xhr.responseText);
                   $.each( errors.errors, function( key, value ) {
                        $("#"+key+"-error").html(value)
                    });
                }
            });
        });
     

    </script>
    </body>
</html>


