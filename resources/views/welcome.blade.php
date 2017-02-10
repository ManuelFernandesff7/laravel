<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  
          
    <body>
   
       <nav class="light-blue">
    <div class="nav-wrapper">
     <!-- <a href="#!" class="brand-logo">Logo</a> -->
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sube tu currículum</a></li>
        <li><a href="badges.html">Publica tu oferta</a></li>
        <li><a href="collapsible.html">login</a></li>
      </ul>
    </div>
  </nav>
  <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
  <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <div style=" background-image: url('/images/people.jpg');">
    <br />
    <br />
    <br />
    <br />
        <div class="container" style="padding-left:10px; padding-top:10px; background-color:rgba(30,144,255, .95);">
        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12 m5 l5">
          <i class="material-icons prefix" style=" color: white;">work</i>
          <input id="icon_prefix" type="text" class="validate white-text" >
          <label for="icon_prefix" style="color:white">Área de Experiencia</label>
        </div>
        <div class="input-field col s12 m5 l5"><i class="material-icons prefix" style=" color: white;">my_location</i>
      <select name="estados" >
      <option value="" disabled selected>Estado</option>
        <option value="0">Todo México</option>
        <option value="1">Aguascalientes</option>
        <option value="2">Baja California</option>
        <option value="3">Baja California Sur</option>
        <option value="4">Campeche</option>
        <option value="5">Coahuila de Zaragoza</option>
        <option value="6">Colima</option>
        <option value="7">Chiapas</option>
        <option value="8">Chihuahua</option>
        <option value="9">Distrito Federal</option>
        <option value="10">Durango</option>
        <option value="11">Guanajuato</option>
        <option value="12">Guerrero</option>
        <option value="13">Hidalgo</option>
        <option value="14">Jalisco</option>
        <option value="15">México</option>
        <option value="16">Michoacán de Ocampo</option>
        <option value="17">Morelos</option>
        <option value="18">Nayarit</option>
        <option value="19">Nuevo León</option>
        <option value="20">Oaxaca</option>
        <option value="21">Puebla</option>
        <option value="22">Querétaro</option>
        <option value="23">Quintana Roo</option>
        <option value="24">San Luis Potosí</option>
        <option value="25">Sinaloa</option>
        <option value="26">Sonora</option>
        <option value="27">Tabasco</option>
        <option value="28">Tamaulipas</option>
        <option value="29">Tlaxcala</option>
        <option value="30">Veracruz de Ignacio de la Llave</option>
        <option value="31">Yucatán</option>
        <option value="32">Zacatecas</option>

      </select>
  </div>
        <div class="input-field col offset-s4 s8 m2 l2">
          <button class="btn waves-effect waves-light" type="submit" name="action">Buscar
    <i class="material-icons right">send</i>
  </button>
        </div>
      </div>
    </form>
  </div>
        </div>
        <br />
    <br />
    <br />
    <br />
        </div>
     <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script type="text/javascript">
            
            (function($){
  $(function(){

    $('.button-collapse').sideNav();
     $('.parallax').parallax();
       $('select').material_select();
    

  }); // end of document ready
})(jQuery); // end of jQuery name space

        </script>
        <style type="text/css">
          .select-wrapper input.select-dropdown {
          
            color:white;
          }
        </style>
    </body>
</html>
