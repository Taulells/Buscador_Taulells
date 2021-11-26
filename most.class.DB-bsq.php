<?php 
 
class DBImagen
{

	private $DBConexion;

	function __construct($Conexion)
	{
		$this->DBConexion = $Conexion;
	}

	
	/**********************************
	Función para guardar la ruta de la
	   Imagen en la base de datos
	**********************************/
	public function uploadImage($Imagen)
	{
         
	 
		    $handler = new PDO('mysql:host=127.0.0.1;dbname=','root','');
        $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       /* $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); */
        $sqli=("INSERT INTO prod (imagen,price,name) VALUES (:url, :price, :name)");
        $form = $_POST;
        $price = $form[ 'price' ];                    
        $name= $form[ 'name' ]; 
		    $ruta = 'imagenes2/'.$Imagen['imagen']['name'];
		move_uploaded_file($Imagen['imagen']['tmp_name'],$ruta);
        $SQLStatement =$this->DBConexion->prepare("INSERT INTO prod(imagen,price,name) VALUES (:url, :price, :name)");
        $SQLStatement = $handler->prepare($sqli);
        $SQLStatement->bindParam(":price",$price);
        $SQLStatement->bindParam(":name",$name);
        $SQLStatement->bindParam(":url",$ruta);
        $result = $SQLStatement->execute();
        if($result) {
            echo "Good job";
        
            }// end if  
        else {
            echo 'error :-(';
            }// end else
	    
	}

	/**********************************
	Función visualizar las imagenes 
	que estan en la ruta guardada en la 
	BD
	**********************************/
	public function viewImages()
	{
		$SQLStatement = $this->DBConexion->prepare("SELECT * FROM prod");
		$SQLStatement->execute();
	

			
        while($img = $SQLStatement->fetch(PDO::FETCH_ASSOC))
		{
		?>
		<style>

	 .producto{
    display: inline-block;
    text-align: center;
    max-width:25%;
    max-height:50%;
    padding:1%;
    background: rgba(232,232,232);
    color:#333;
    margin:5px;

   }
    .cajafoto{
    display: inline-block;
    height: 250px;
    padding:10px;
    background: rgba(232,232,232);
    color:#333;
    margin:6px;

   }


    .img_producto{
    width: 100%;
      height: 250px;
      object-fit: cover;
   }	
  .name_producto{
       padding:10px;
       color:#fff;
       background:#ff0000;
       text-align: center;
       font-size:18px;
   }

	</style>

 <div class="producto">
                <div class="name_producto"><?php print($img['id']); ?></div>
                <div class="name_producto"><?php print($img['name']); ?></div> 
                <div class="name_producto"><?php print($img['price']); ?></div>  
				<div class="cajafoto">
                <div><img class="img_producto" src="<?php print($img['imagen']); ?>"/></div> 
				<a href="#"><input type="button" class="btn btn-success" value="See"></a>

		        </div> 
         </div>
		<?php 

		}
	}


	

	public function viewbusq()
	{
		@$mibusqueda=$_GET["buscar"];
		$SQLStatement = $this->DBConexion->prepare("SELECT * FROM prod WHERE name LIKE'%$labusqueda%'");
		$SQLStatement->execute();
	

			
        while($img = $SQLStatement->fetch(PDO::FETCH_ASSOC))
		{
		?>
		<style>

	 .producto{
    display: inline-block;
    text-align: center;
    max-width:25%;
    max-height:50%;
    padding:1%;
    background: rgba(232,232,232);
    color:#333;
    margin:5px;

   }




    .cajafoto{
    display: inline-block;
    height: 250px;
    padding:10px;
    background: rgba(232,232,232);
    color:#333;
    margin:6px;

   }


    .img_producto{
    width: 100%;
      height: 250px;
      object-fit: cover;
   }	
  .name_producto{
       padding:10px;
       color:#fff;
       background:#ff0000;
       text-align: center;
       font-size:18px;
   }

	</style>

 <div class="producto">
                <div class="name_producto"><?php print($img['id']); ?></div> 
                <div class="name_producto"><?php print($img['name']); ?></div> 
                <div class="name_producto"><?php print($img['price']); ?></div> 
				<div class="cajafoto">
                <div><img class="img_producto" src="<?php print($img['imagen']); ?>"/></div> 
				<a href="#"><input type="button" class="btn btn-success" value="See"></a>

		        </div> 
         </div>
		<?php 

		}
	}
    
    





    public function iewImages()
	{
    $keywo=$_GET["buscar"];
    require("pa-bsq-param.php");

$keyword = htmlspecialchars($keywo);
$keywor = filter_var($keyword, FILTER_SANITIZE_STRING);
$keywords = preg_split('/[\s]+/', $keywor);

$totalKeywords = count($keywords);
$query = "SELECT * FROM prod WHERE zytu LIKE ?";

for($i=1 ; $i < $totalKeywords; $i++){
  $query .= " AND zytu LIKE ? ";
}
$sql=$this->DBConexion->prepare($query);
  foreach($keywords as $key => $keyword){
    $sql->bindValue($key+1, '%'.$keyword.'%');
  }
  $sql->execute ();

 

    while($img = $sql->fetch(PDO::FETCH_ASSOC))
		{
        ?>
       <html> 
           <head> 
           <meta charset="utf-8">
       <link rel="stylesheet" href="css/principal.css"> 
		<style>
    
    @media only screen and (max-width: 550px){
  
  .producto{
  width:90%;
  text-align: center;
  margin-left: 4% ;
  margin:right: 4%;
  margin-bottom: 4%; 
  background-color:white;
  border: 2px solid mediumseagreen; 

}
      }

      @media only screen and (min-width: 552px){
	  
    .producto{
    display: inline-block;
    text-align: center;
    max-width:50%;
    max-height:50%;
    padding:1%;
    background-color:white; 
    border: mediumseagreen solid 2px;
    
    margin-top: 5px;
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 15px;
   }

  }

.triple-div-etiq{
  text-align:center; 
  width:100%;
  
 
  padding-bottom: 20px; 
  margin-bottom: 10px;  
}
.one-div-etiq-u{
  width:100%; 
  margin-bottom:20px; 
}
.div-etiq-u{
margin:auto;   
width: 33%;
height: 20px;

}
.div-etiq-dos{
 float:left; 
 margin-right:14.5%; 
 margin-left: 2%; 
  width: 33%;
  height: 20px; 
 
}
.div-etiq-tres{
  float:right; 
  margin-left:14.5%; 
 margin-right: 2%;  
  width:33%;
  height: 20px; 
 
}  
.cajafoto{
    display: inline-block;
    height: 250px;
    padding:1px;
    color:#333;
    margin:6px;
    border: #98FB98 solid 2px;

   }
    .img_producto{
    width: 100%;
      height: 250px;
      object-fit: cover;
   }
   .line-box-resultats-producto-p{
     width: 89%;
     margin-right: 5% ;
     margin-left: 5%;
     padding:1px;
     background-color: mediumseagreen;

   }
   .box-resultats-producto{
       width:90%;
       padding: 5px;
       margin: 5px;
       background-color:#3CB371; 
       background-color: white; 
   }
   .name_producto_a{
    padding:10px;
       color: green;
       font-weight: lighter; 
       font-style: italic; 
       text-align: center;
       font-size:17px;
       margin-bottom: 5px; 
   }
  .name_producto{
       padding:10px;
       padding-bottom: 0px; 
       color: black;
       text-align: center;
       font-size:20px;
    
   }
   .name_etiq_producto{
      width:100%; 
       color: black;
       text-align: center;
       font-size:14px;
   }
   button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Add padding and center-align text to the container */

.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; 
  background-color:#3CB371; 
    background-color: rgba(60, 179, 113, 0.6);
  padding-top: 50px;
  padding-bottom: 50px;

}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */

}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}




.sub-container-resu-pop{
  max-width: 90%;
  max-height:70%;
  margin: auto;
  padding: 10px;
  
  overflow: auto;

}

.foto-product-resu-pop{
  float: left;
  max-width: 100%;
  max-height: 100%;
  margin-left: 100px; 
  
}
.fotoactual-product-resu-pop{
  width: 300px;
}

.detallsproducte-resu-pop{
  float: right;
  max-width: 50%;
  max-height: 70%; 
  margin: auto;
  padding: 3px;


}

.continguts-detallproducte-resu-pop{
  max-width : 300px;
    word-wrap: break-word;

}


@media only screen and (max-width: 700px){
  
  .modal-content {
  background-color: #fefefe;
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
  
}




  .sub-container-resu-pop{
  width: 90%;
  height:100%;
  padding: 10px;
  
 

} 
  
  
  .foto-product-resu-pop{
 
  max-width: 100%;
  max-height: 100%;
 margin: 50px; 
  
}  
.fotoactual-product-resu-pop{
 width: 300px;

}

.detallsproducte-resu-pop{
  
  max-width: 100%;
  max-height: 70%; 
  margin: auto;
  padding: 3px;
      }

      .continguts-detallproducte-resu-pop{

        max-width : 300px;
    word-wrap: break-word;
}

 










   }

   


     
    </style>
    </head> 
<body> 
      
 <div class="producto">

     <div class="cajafoto">
     <div><img class="img_producto" src="<?php print($img['qlj']); ?>"/></div>
     </div> 
     <div class="line-box-resultats-producto-p"></div> 
     <div class="box-resultats-producto">
                <div class="name_producto"><?php print($img['zytalav']);?></div>
                <div class="name_producto_a"><?php print($img['aq']); ?></div> 
               
                <div class="one-div-etiq-u">
                  <div class="div-etiq-u">
                <div class="name_etiq_producto"><div class="box"><?php print($img['bqgu']); ?> </div> </div>
                   </div> <!-- div-etiq-u-->
                </div> <!--one-div-etiq-u -->
            <div class="triple-div-etiq">
                   <div class="div-etiq-dos">
                <div class="name_etiq_producto"><div class="box"><?php print($img['ofrq']); ?></div> </div>
                   </div> <!--div-etiq-dos -->
                   
                    <div class="div-etiq-tres">
                <div class="name_etiq_producto"><div class="box"><?php print($img['qjbtva']); ?></div> </div> 
                    </div> <!-- div-etiq-tres--> 
                    <br style="clear: left;" />
                </div> 
	</div>			
                
    <button style="z-index:2;" onclick="document.getElementById('<?php print($img['uid']); ?>').style.display='block'">Més Informació</button>

    <div id="<?php print($img['uid']); ?>" class="modal">
<span onclick="document.getElementById('<?php print($img['uid']); ?>').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="/action_page.php">

  <div class="sub-container-resu-pop">
  
<div class="fotoactual-product-resu-pop">
<img class="foto-product-resu-pop" src="<?php print($img['qlju']); ?>" > 
</div> 
   
    
    
<div class="detallsproducte-resu-pop"> 
  <div class="continguts-detallproducte-resu-pop"> 
   
      <p style="font-size: 23px;"><?php print($img['zytalav']);?></p>
  

      <p style="font-size: 18px;  font-style: italic;"> <?php print($img['aq']); ?></p>
      <p style="color:green;"> Adreça: </p>
      <p style="font-size: 15px;"> <?php print($img['ijlvqe']); ?> </p> 
      <p style="color:green;"> Horari d'Obertura:</p> 
      <p style="font-size: 15px;"> <?php print($img['eyqww']); ?>   </p> 
      <p style="color:green;"> Pàgina web: </p> 
        <p style="font-size: 15px;" > <?php print($img['wqzuwal']); ?> </p>
       
      <p style="color:green;"> Petita descripció del producte: </p>
      <p style="font-size: 15px;" > <?php print($img['jlslbyj']); ?>  </p> 

    <!--<p style="font-size: 27px;">  </p> -->


  </div> 
  <button type="button" onclick="document.getElementById('<?php print($img['uid']); ?>').style.display='none'" class="cancelbtn">Tanca la pestanya</button>
     </div> 





    </div>
  </form>
</div>





                



            

		     
</div>
 

</body> 
<foot>

<script> 
  
// You could easily add more colors to this array.
var colors = ['PaleGreen', 'PeachPuff', 'green', 'teal', 'rosybrown', 'tan', 'plum', 'saddlebrown', 'LightSalmon', 'LightSeaGreen','LightSkyBlue','LimeGreen','LightSteelBlue','MediumSeaGreen','PaleTurquoise','Pink','Peru','SkyBlue','YellowGreen','WhiteSmoke','Wheat','Turquoise','Thistle','Teal','SpringGreen','SteelBlue','Silver','SeaGreen','PowderBlue','PapayaWhip','PaleGoldenRod','PaleVioletRed','OliveDrab','Olive','MediumTurquoise','MediumAquaMarine','LightGreen','LightBlue','LemonChiffon','Khaki','DodgerBlue','Coral','BurlyWood','CadetBlue','Aqua','CornflowerBlue'];
var boxes = document.querySelectorAll(".box");

for (i = 0; i < boxes.length; i++) {
  // Pick a random color from the array 'colors'.
  boxes[i].style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
  boxes[i].style.width = '100%';
  boxes[i].style.padding = '5px';
  boxes[i].style.border = '2px solid mediumseagreen';
  
}
// Get the modal
// Get the modal

var modal = document.getElementById('<?php print($img['uid']); ?>');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
</foot> 
</html> 
		<?php 
      }
          }







          public function cambiartexto()
          {
            $sql = "UPDATE users SET Name=:Name, social1=:social1, social2=:social2, aboutt=:aboutt WHERE id=:id";

    if($stmt = $pdo->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":Name", $param_Name);
        $stmt->bindParam(":social1", $param_social1);
        $stmt->bindParam(":social2", $param_social2);
        $stmt->bindParam(":aboutt", $param_aboutt);
        $stmt->bindParam(":id", $param_id);

        // Set parameters
        $param_Name    = $Name;
        $param_social1 = $social1;
        $param_social2 = $social2;
        $param_aboutt  = $aboutt;
        $param_id = $id;

        // Attempt to execute the prepared statement
        if($stmt->execute()){
            // Records updated successfully. Redirect to landing page
            header("location: redirect_page_link_here");
            exit();
        } else{
            echo "Something went wrong. Please try again later.";
        }
    }

 }

}




?>	
