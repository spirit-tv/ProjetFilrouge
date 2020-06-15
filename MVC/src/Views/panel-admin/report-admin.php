<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="shortcut icon" type="image/png" href="https://image.noelshack.com/fichiers/2020/25/1/1592208328-logo.png"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://spirit-tv.github.io/panel-admin.io/boostrap.min.css">
<link rel="stylesheet" href="https://spirit-tv.github.io/panel-admin.io/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script type="text/javascript">
$(function() {
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});

</script>
</head>
<body>
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center"><img src="https://image.noelshack.com/fichiers/2020/24/2/1591703070-logo.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h4 class="m-0">Nom de L'admin</h4>
          <p class="font-weight-light text-muted mb-0">Role</p>
        </div>
      </div>
    </div>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Info</p>
  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="/Dashboard" class="nav-link text-dark font-italic">
                  <i class="fa fa-th-large mr-3 eole-text fa-fw"></i>
                  Home
              </a>
      </li>
      <li class="nav-item">
        <a href="Article" class="nav-link text-dark font-italic">
                  <i class="fa fa-address-card mr-3 eole-text fa-fw"></i>
                  Article
              </a>
      </li>
      <li class="nav-item">
        <a href="User" class="nav-link text-dark font-italic">
                  <i class="fa fa-user mr-3 eole-text fa-fw"></i>
                  User
              </a>
      </li>
    </ul>
  </div>

  <div class="page-content p-5" id="content">

    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
  
    <h1>Liste des signalement</h1>
          <hr>
        <div class="row">

          <div class="col-md-3">
          </div>
          <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Panel <b>report Eole</b></h2>
                        </div>
                        
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>						
                            <th>Date de création</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="#">Faustinette</a></td>
                            <td>04/10/2013</td>                        
                            <td>Admin</td>
    
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="#" class="settings" title="Voire" data-toggle="tooltip"><i class="fa fa-eye mr-3 eole-text"></i></a>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="#">Hassen</a></td>
                            <td>05/08/2014</td>                       
                            <td>user</td>
    
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="#" class="settings" title="Voire" data-toggle="tooltip"><i class="fa fa-eye mr-3 eole-text"></i></a>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><a href="#">Alann</a></td>
                            <td>11/05/2015</td>
                            <td>Rédacteur</td>                 
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="#" class="settings" title="Voire" data-toggle="tooltip"><i class="fa fa-eye mr-3 eole-text"></i></a>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>    
                                </div>
                            </td>                        
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><a href="#">Tom</a></td>
                            <td>06/09/2016</td>
                            <td>Admin</td>
    
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="#" class="settings" title="Voire" data-toggle="tooltip"><i class="fa fa-eye mr-3 eole-text"></i></a>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><a href="#">jean louis</a></td>
                            <td>12/08/2017</td>                        
                            <td>Rédacteur</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="#" class="settings" title="Voire" data-toggle="tooltip"><i class="fa fa-eye mr-3 eole-text"></i></a>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>    
                                </div>
                                </td>
                        </tr>
                    </tbody>
                </table>
                <div class="clearfix">
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Avant</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Apret</a></li>
                    </ul>
                </div>
            </div>
        </div>     
          
      </div>
      <hr>
  
</body>
</html>