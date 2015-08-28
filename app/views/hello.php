
<!doctype html>
<html>
<head>
  <title>Form Builder</title>
  <meta name="description" content="">
  <script type="text/javascript">

</script>
<link rel="stylesheet" href="css/vendor.css" />
  <link rel="stylesheet" href="css/formbuilder.css" />
<script type="text/javascript">

</script>
</head>
<body>
  <div class='fb-main'></div>

  <script src="js/vendor.js"></script>
  <script src="js/formbuilder.js"></script>

  <script>
    $(function(){
      fb = new Formbuilder({
        selector: '.fb-main',
        bootstrapData: []
      });

      fb.on('save', function(payload){
        Router.dat = JSON.parse(payload);
      })
    });
  </script>

</body>
</html>