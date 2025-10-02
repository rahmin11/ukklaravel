<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bs.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <title>Website Resmi SMKN 4 Tasikmalaya</title>
  
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg bg-body-tertiary my-4 shadow-lg rounded-3">
  <div class="container-fluid">
    <img src="logo2.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="#">SMKN 4 Tasikmalaya</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->is("home") ? "active" : false }}" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is("profil") ? "active" : false }}" href="/profil">Profil Sekolah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is("ektrakulikuler") ? "active" : false }}" href="/ektrakulikuler" >Ektrakulikuler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is("galeri") ? "active" : false }}" href="/galeri" >Galeri</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
      </div>
    </div>