<div class="left_col scroll-view">
  <div class="navbar nav_title" style="border: 0;">
    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
  </div>

  <div class="clearfix"></div>

  <!-- menu profile quick info -->
  <div class="profile">
    <div class="profile_pic">
      <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2>John Doe</h2>
    </div>
  </div>
  <!-- /menu profile quick info -->

  <br />

  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section active">
      <h3>General</h3>
      <ul class="nav side-menu" style="">
        <li><a><i class="fa fa-home"></i>Gestion des fournisseurs</a>
          <ul class="nav child_menu" style="">
            <li><a href="{{url('Fournisseur.index')}}">Liste des fournisseurs</a></li>
            <li><a href="{{url('Fournisseur.create')}}">Ajouter un fournisseur</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-home"></i>Gestion de stock</a>
          <ul class="nav child_menu" style="">
            <li><a href="{{route('Produit.index')}}">Liste des produits</a></li>
            <li><a href="{{route('Produit.create')}}">Ajouter un produit</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-home"></i>Gestion des achats</a>
          <ul class="nav child_menu" style="">
            <li><a href="{{route('Achat.index')}}">Liste des achats</a></li>
            <li><a href="{{route('Achat.create')}}">Ajouter un achat</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- /sidebar menu -->

  <!-- /menu footer buttons -->
  <div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
  </div>
  <!-- /menu footer buttons -->
</div>
