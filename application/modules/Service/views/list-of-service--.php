<!-- <!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <p>Click on this paragraph.</p>
        <script>
        $(document).ready(function(){
          $("p").click(function(){
            alert("The paragraph was clicked.");
          });
        });
        </script>
        <script src="<?= base_url(); ?>assets/dashboard/assets/jquery/jquery-1.12.4.min.js"></script>
    </body>
</html> -->

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("p").click(function(){
    alert("The paragraph was clicked.");
  });
});
</script>
</head>
<body>

<p>Click on this paragraph.</p>

</body>
</html>


