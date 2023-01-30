<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark" id="maNav">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=URL?>">Town</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarNav">
      <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?=URL?>inscritown.php">Inscription</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=URL?>connexion.php">Connexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=URL?>profil.php">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=URL?>connexion.php?action=deconnexion">Deconnexion</a>
            </li>

          <li class="nav-item">
              <a class="nav-link" href="<?=URL?>admin/user.php">Liste des Villes</a>
          </li>
      </ul>
    </div>
  </div>
</nav>