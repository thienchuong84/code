<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript">

    </script>

    <style type="text/css">
      .separator {
          border-right: 1px solid #dfdfe0; 
      }
      .icon-btn-save {
          padding-top: 0;
          padding-bottom: 0;
      }
      .input-group {
          margin-bottom:10px; 
      }
      .btn-save-label {
          position: relative;
          left: -12px;
          display: inline-block;
          padding: 6px 12px;
          background: rgba(0,0,0,0.15);
          border-radius: 3px 0 0 3px;
      }
    </style>
  </head>
  <body>




<form id="identicalForm" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-3 control-label">Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="password" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Retype password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="confirmPassword" />
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    $('#identicalForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
});
</script>



<form id="identicalForm" class="form-horizontal"
    data-fv-framework="bootstrap"
    data-fv-icon-valid="glyphicon glyphicon-ok"
    data-fv-icon-invalid="glyphicon glyphicon-remove"
    data-fv-icon-validating="glyphicon glyphicon-refresh">

    <div class="form-group">
        <label class="col-xs-3 control-label">Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="password" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Retype password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="confirmPassword"
                data-fv-identical="true"
                data-fv-identical-field="password"
                data-fv-identical-message="The password and its confirm are not the same" />
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    $('#identicalForm').formValidation();
});
</script>

















    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>