<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
 <h1>My Pokedex</h1>
    <table>
      <thead>
        <tr>
          <th>Sprite</th>
          <th>ID</th>
          <th>Name</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Base exp</th>
        </tr>
      </thead>
      <tbody>
        <?php
            
            
            $link=mysqli_connect("localhost","root","root","Pokedex");
            if(!$link)
            {
                echo "Erreur : Impossible de se connecter  MySQL." . PHP_EOL;
                echo "Errno de dbogage : " . mysqli_connect_errno() . PHP_EOL;
                echo "Erreur de dbogage : " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

            
            $requete = $link->query("SELECT id,identifier,height,weight,base_experience FROM Pokemon");
            if($requete)
            {
                while($poke = mysqli_fetch_array($requete, MYSQLI_ASSOC))
                {
                      
                    echo "<tr>";
                    if($poke["base_experience"]>=200)
                                     {
                                         echo "<div class='super'>";
                                         echo "<td class='super'><img src='sprites/".$poke["identifier"].".png' alt='".$poke["identifier"]."'></td>";
                                       echo "<td class='super'>".$poke["id"]."</td>";
                                       echo "<td class='super'>".$poke["identifier"]."</td>";
                                       echo "<td class='super'>".$poke["height"]."</td>";
                                       echo "<td class='super'>".$poke["weight"]."</td>";
                                       echo "<td class='super'>".$poke["base_experience"]."</td>";
                                         echo "</div>";
                                     }
                    else{
                    echo "<td><img src='sprites/".$poke["identifier"].".png' alt='".$poke["identifier"]."'></td>";
                      echo "<td>".$poke["id"]."</td>";
                      echo "<td>".$poke["identifier"]."</td>";
                      echo "<td>".$poke["height"]."</td>";
                      echo "<td>".$poke["weight"]."</td>";
                      echo "<td>".$poke["base_experience"]."</td>";}
                    echo"</tr>";
                    }
                
                if($poke["base_experience"]>=200)
                {
                    echo "<div class='super'>";
                    echo "<td class='super'><img src='sprites/".$poke["identifier"].".png' alt='".$poke["identifier"]."'></td>";
                  echo "<td class='super'>".$poke["id"]."</td>";
                  echo "<td class='super'>".$poke["identifier"]."</td>";
                  echo "<td class='super'>".$poke["height"]."</td>";
                  echo "<td class='super'>".$poke["weight"]."</td>";
                  echo "<td class='super'>".$poke["base_experience"]."</td>";
                    echo "</div>";
                }
                }
            ?>
    
        
        
        
        
        
        
        


      </tbody>
      </tbody>
    </table>
  </body>
</html>
