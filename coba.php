<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li id="ex1"><a href="#">Example 1</a></li>
            <li id="ex2"><a href="#">Example 2</a></li>
            <li id="ex3"><a href="#">Example 3</a></li>
            <li id="ex5"><a href="#">Example 4</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
  <div class="container">
    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> Popover on bottom
    </button>
  </div>

  <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
  <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
  <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
  <script>
    $(function() {
      var showPopover = function() {
          $(this).popover('show');
        },
        hidePopover = function() {
          $(this).popover('hide');
        };
      $('#ex1').popover({
        content: 'An Example1 popover',
        trigger: 'hover',
        placement: 'top'
      })
      $('#ex2').popover({
        content: 'An Example2 popover',
        trigger: 'hover',
        placement: 'top'
      })

      $('#ex3').popover({
        content: 'An Example3 popover',
        trigger: 'hover',
        placement: 'top'
      })

    });
  </script>
</body>

</html>