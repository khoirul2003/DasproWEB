<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input dengan Validasi</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <h1>Form Input dengan Validasi</h1>
  <form id="myForm" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>
    <br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>
    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br>
    <br>

    <input type="submit" value="Submit">
  </form>

  <div id="result" style="color: green;"></div> <!-- To display success message -->

  <script>
    $(document).ready(function() {
      $("#myForm").submit(function(event) {
        event.preventDefault(); // Prevent the default form submission
        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var valid = true;

        // Validate name
        if (nama == "") {
          $("#nama-error").text("Nama harus diisi!");
          valid = false;
        } else {
          $("#nama-error").text("");
        }

        // Validate email
        if (email === "") {
          $("#email-error").text("Email harus diisi!");
          valid = false;
        } else {
          $("#email-error").text("");
        }

        // Validate password
        if (password.length < 8) {
          $("#password-error").text("Password harus minimal 8 karakter!");
          valid = false;
        } else {
          $("#password-error").text("");
        }

        if (valid) {
          // If the form is valid, send the data via AJAX
          $.ajax({
            url: 'proses_validasi.php',
            type: 'POST',
            data: {
              nama: nama,
              email: email,
              password: password
            },
            success: function(response) {
              $("#result").html(response); // Display the response from the server
            }
          });
        }
      });
    });
  </script>
</body>

</html>