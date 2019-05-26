<!DOCTYPE html>
<html>
<head>
  <!-- Site Properties -->
  <title>ProfilPlus+ | Masuk</title>
  <link rel="icon" href="<?php echo base_url() ?>assets/image/icon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/site.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/container.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/grid.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/header.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/image.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/menu.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/divider.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/segment.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/form.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/input.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/button.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/list.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/message.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Semantic/components/icon.css">

  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/pace.min.js"></script>
  <script src="<?php echo base_url() ?>assets/Semantic/components/form.js"></script>
  <script src="<?php echo base_url() ?>assets/Semantic/components/transition.js"></script>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            username: {
              identifier  : 'username',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Username tidak boleh kosong'
                },
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Password tidak boleh kosong'
                },
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h1><button class="massive ui teal button"><i class="user plus icon"></i> Profil<b>Plus</b></h1></button>
    <form class="ui large form" method="POST" action="<?php echo base_url() ?>auth/login">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="IP SIKKA">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">Masuk</div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Masuk dengan Username dan Password Appportal
    </div>
  </div>
</div>

</body>

</html>
