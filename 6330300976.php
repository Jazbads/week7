<!DOCTYPE html>
<html>
<body>
<?php
function hello($name){
    echo "Hello $name";
}
      $terra = array (
        array(1,"Pearlwood Sword",1,'https://static.wikia.nocookie.net/terraria_gamepedia/images/9/98/Night%27s_Edge.png'),
        array(2,"Star Wrath",2,'https://static.wikia.nocookie.net/terraria_gamepedia/images/8/83/Star_Wrath.png'),
        array(3,"Influx Waver",3,'https://static.wikia.nocookie.net/terraria_gamepedia/images/d/d2/Influx_Waver.png'),
        array(4,"Terra Blade",4,'https://static.wikia.nocookie.net/terraria_gamepedia/images/4/4d/Terra_Blade.png'),
        array(5,"Starlight",5,'https://static.wikia.nocookie.net/terraria_gamepedia/images/1/15/Starlight.png'),
        array(6,"Ice Sickle",6,'https://static.wikia.nocookie.net/terraria_gamepedia/images/e/ea/Ice_Sickle.png'),
        array(7,"Meowmere",7,'https://static.wikia.nocookie.net/terraria_gamepedia/images/6/63/Meowmere.png'),
        array(8,"Excalibur",8,'https://static.wikia.nocookie.net/terraria_gamepedia/images/f/fa/Excalibur.png'),
        array(9,"Muramasa",9,'https://static.wikia.nocookie.net/terraria_gamepedia/images/c/c2/Muramasa.png'),
        array(10,"Bee Keeper",10,'https://static.wikia.nocookie.net/terraria_gamepedia/images/4/42/Bee_Keeper.png')
      );
     
      echo "</table>";
      echo "<table border='8'>";
      echo "<tr><td>Items</td><td>Name</td><td>Costs</td><td>Pictures</td>";
      for($i=0;$i<10;$i++){
        $r=rand(0,256);
        $g=rand(0,256);
        $b=rand(0,256);
       
        $three=3;
        echo "<tr>
        <td><p style='color:rgb($r,$g,$b)'>" .$terra[$i][0]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$terra[$i][1]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$terra[$i][2]. "</p></td>
        <td><img src=".$terra[$i][3]." width=150 height=150></td>
        </tr>";
      }
      
?>
</body>
</html>