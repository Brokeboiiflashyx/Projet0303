<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/main.css" />
    <title>TICKETPLUS</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Se Connecter</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Identifiant" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de Passe" />
            </div>
            <input type="submit" value="Connexion" class="btn solid" />
            <p class="social-text">Ou se connecter avec </p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> 
        Remember me
      </label>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Se Connecter</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Identifiant" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de Passe" />
            </div>
            <input type="submit" class="btn" value="S'inscrire" />
            <p class="social-text">Ou se connecter avec</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Vous ??tes nouveau ?</h3>
            <p>
              Vous pouvez visiter en tant qu'invit?? ou vous incrire afin d'avoir acc??s ?? plus de fonctionnalit??s.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              S'inscrire
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>D??ja membre ?</h3>
            <p>
              Connectez-vous pour acc??der ?? votre compte.
            </p>
            <!--inserer l'image qui se trouve dans le dossier img-->
        

            
            
            <button class="btn transparent" id="sign-in-btn">
              Se Connecter
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/main.js"></script>
  </body>
</html>