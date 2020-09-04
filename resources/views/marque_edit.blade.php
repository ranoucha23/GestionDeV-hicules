<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Véhicules</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
        #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
        </style>
    </head>
    <body>
    <ul>
  
  <li><a href="/">Accieul</a></li>
  <li><a href="vehicule_show">Vehicules</a></li>
  <li><a href="marque_show">Marques</a></li>
  <li><a href="modele_show">Modeles</a></li>
  
</ul>
        <div class="flex-center position-ref full-height">
         <a href="vehicule_show">Retourner</a></br></br>
         <form method="post" action="{{route('marque_update',[$marqueArr->id])}}">
           @csrf
           <table id="customers">
             <tr>
             <td>Nom</td>
             <td><input type="textname" name="nom" required  value="{{$marqueArr->nom}}"></td>
             </tr>
             <tr>
             <td></td>
             <td><input type="submit" name="Modifier véhicule"></td>
             </tr>
          
           </table>
          </form>
        </div>
    </body>
</html>
