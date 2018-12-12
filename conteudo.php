<?php
//Carrega tela de homepage
if($_GET['p'] == 'home') : ?>
  <div class="py-4 mt-2 mb-2">
    <div class="container">
      <div class="row text-center mb-5">
        <img src="img/servico.jpg" class="img-fluid" style="height: 200px; width: 60%; display: block;" alt="Serviços">
      </div>
      <div class="row">
        <div class="col-md-6">
          <h1>Seja bem vindo ao ServWEB</h1>
           <p></p>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like red.</p>
        </div>
        <div class="col-md-6">
         It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php
//Carrega tela de cadastro
if($_GET['p'] == 'cadastro') : ?>
<p>CADASTRO</p>
<?php endif; ?>

<?php
//Carrega tela de login
if($_GET['p'] == 'entrar') : ?>

  <div class="login-form">
  <div class="login_main-div">
    <div class="panel">
   <h2>Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login">
        <div class="form-group">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>

<?php endif; ?>
