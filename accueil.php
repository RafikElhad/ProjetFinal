<!DOCTYPE html> 
<html>
    <head> 
    <title>Burger Code</title>
        <meta charset="utf-8"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/styles.css"> 
    </head> 
    <body>  
        <div class="container site"> 
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>

        <nav>
            <ul class="nav nav-pills"> 
                <li role="presentation " class="active"><a href="#1" data-toggle="tab"> Menus</a></li>  
                <li role="presentation "><a href="#2" data-toggle="tab">Burgers</a></li> 
                <li role="presentation "><a href="#3" data-toggle="tab">Snacks</a></li> 
                <li role="presentation "><a href="#4" data-toggle="tab">Salades</a></li> 
                <li role="presentation "><a href="#5" data-toggle="tab">Boissons</a></li> 
                <li role="presentation "><a href="#6" data-toggle="tab">Desserts</a></li>  
            </ul>
        </nav> 
        <div class="tab-content"> 
            <div class="tab-pane active" id="1">   
                <div class="row"> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/m1.png" alt="...">   
                            <div> 8.90 $ </div> 
                            <div class="caption ">   
                                <h4>Menu Classique</h4>   
                                <p>Sandwich : Burger, Salade, Tomate, Cornichon + Frites + Boisson </p> 
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>  
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/m2.png" alt="...">   
                            <div> 9.50 $ </div> 
                            <div class="caption ">   
                                <h4>Menu Bacon</h4> 
                                <p>Sandwich : Burger, Fromage, Bacon, Salade, Tomate + Frites + Boisson </p> 
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/m3.png" alt="...">   
                            <div> 10.90 $ </div> 
                            <div class="caption ">   
                                <h4>Menu Big</h4>  
                                <p>Sandwich : Double Burgers, Fromage,Cornichon,Salade  + Frites + Boisson </p> 
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/m4.png" alt="...">    
                            <div> 9.90 $ </div> 
                            <div class="caption ">   
                                <h4>Menu Chicken</h4>  
                                <p>Sandwich : Poulet frit, Salade, Tomate, Mayonnaise + Frites + Boisson </p> 
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/m5.png" alt="...">   
                            <div> 10.90 $ </div> 
                            <div class="caption ">   
                                <h4>Menu Fish</h4> 
                                <p>Sandwich : Poisson , Salade, Mayonnaise, Cornichon + Frites + Boisson </p> 
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4">   
                        <div class="thumbnail">  
                            <img src="images/m6.png" alt="...">    
                            <div> 11.90 $ </div>  
                            <div class="caption ">   
                                <h4>Menu Double Steak</h4>  
                                <p>Sandwich : Double Burger, Fromage, Bacon, Salade , Tomate + Frites + Boisson </p> 
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>


                </div>

            </div>    

            <div class="tab-pane" id="2">   
                <div class="row"> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/b1.png" alt="...">    
                            <div> 5.90 $ </div> 
                            <div class="caption ">   
                                <h4>Classic</h4>  
                                <p>Sandwich : Burger, Salade, Tomate, Cornichon </p> 
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>  
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/b2.png" alt="...">   
                            <div> 6.50 $ </div> 
                            <div class="caption ">   
                                <h4>Bacon</h4> 
                                <p>Sandwich : Burger, Fromage, Bacon, Salade, Tomate </p>  
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/b3.png" alt="...">   
                            <div> 6.90 $ </div> 
                            <div class="caption ">   
                                <h4>Big</h4>  
                                <p>Sandwich : Double Burgers, Fromage,Cornichon,Salade </p>  
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/b4.png" alt="...">    
                            <div> 5.90 $ </div> 
                            <div class="caption ">   
                                <h4>Chicken</h4>  
                                <p>Sandwich : Poulet frit, Salade, Tomate, Mayonnaise </p>  
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/b5.png" alt="...">   
                            <div> 6.50 $ </div> 
                            <div class="caption ">   
                                <h4>Fish</h4>  
                                <p>Sandwich : Poisson , Salade, Mayonnaise, Cornichon </p>  
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/b6.png" alt="...">     
                            <div> 7.50 $ </div> 
                            <div class="caption ">   
                                <h4>Double Steak</h4>  
                                <p>Sandwich : Double Burger, Fromage, Bacon, Salade , Tomate </p>  
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>


                </div>

            </div>  

            <div class="tab-pane" id="3">    
                <div class="row"> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/s1.png" alt="...">    
                            <div> 3.90 $ </div> 
                            <div class="caption ">   
                                <h4>Frites</h4>  
                                <p>Pomme de terre frites </p>  
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>  
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/s2.png" alt="...">   
                            <div> 3.40 $ </div> 
                            <div class="caption ">   
                                <h4>Onion Ringhs</h4> 
                                <p>Rondeles oignon frites </p>  
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/s3.png" alt="...">   
                            <div> 5.90 $ </div> 
                            <div class="caption ">   
                                <h4>Nuggets</h4>   
                                <p>Nuggets de poulet frits </p>   
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/s4.png" alt="...">     
                            <div> 3.50 $ </div> 
                            <div class="caption ">   
                                <h4>Nuggets Fromage</h4>  
                                <p>Nuggets Fromage frits </p>   
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/s5.png" alt="...">   
                            <div> 6.50 $ </div> 
                            <div class="caption ">   
                                <h4>Ailes de poulet</h4>   
                                <p> Ailes de poulet </p>   
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                   


                </div>

            </div>     

            <div class="tab-pane" id="4">         
                <div class="row"> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/sa1.png" alt="...">     
                            <div> 8.90 $ </div> 
                            <div class="caption ">   
                                <h4>Césard Poulet Pané </h4>  
                                <p>Poulet Pané, Salade, Tomate et la fameuse sauce césard </p>  
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>  
                    <div class="col-sm-6 col-md-4">  
                        <div class="thumbnail">  
                            <img src="images/sa2.png" alt="...">    
                            <div> 8.90 $ </div>  
                            <div class="caption ">   
                                <h4>Césard Poulet Grillé</h4> 
                                <p>Poulet Pané, Salade, Tomate et la fameuse sauce grillé  </p>   
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/sa3.png" alt="...">    
                            <div> 5.90 $ </div> 
                            <div class="caption ">   
                                <h4>Salade Light</h4>   
                                <p>Salade, Tomate, Concobre, Mais et Vinaigre balsémique </p>    
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/sa4.png" alt="...">      
                            <div> 7.90 $ </div> 
                            <div class="caption ">   
                                <h4>Poulet Pané</h4>   
                                <p>Poulet pané, Salade, Tomate et sauve de votre choix  </p>   
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/sa5.png" alt="...">   
                            <div> 7.90 $ </div>  
                            <div class="caption ">   
                                <h4>Poulet Grillé</h4>    
                                <p>Poulet pané, Salade, Tomate et sauve de votre choix</p>       
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                   


                </div>

            </div>   

            <div class="tab-pane" id="5">      
                <div class="row"> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/bo1.png" alt="...">    
                            <div> 1.90 $ </div> 
                            <div class="caption ">   
                                <h4>Coca-Cola</h4>  
                                <p>Au choix: petit,moyen ou grand </p>   
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>  
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/bo2.png" alt="...">    
                            <div> 1.90 $ </div> 
                            <div class="caption ">   
                                <h4>Coca-Cola Light </h4>  
                                <p>Au choix: petit,moyen ou grand </p>    
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/bo3.png" alt="...">    
                            <div> 1.90 $ </div>  
                            <div class="caption ">   
                                <h4>Coca-Cola Zéro</h4>    
                                <p>Au choix: petit,moyen ou grand </p>   
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/bo4.png" alt="...">      
                            <div> 1.90 $ </div>  
                            <div class="caption ">   
                                <h4>Fanta</h4>  
                                <p>Au choix: petit,moyen ou grand </p>    
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/bo5.png" alt="...">    
                            <div> 1.90 $ </div>  
                            <div class="caption ">   
                                <h4>Sprite</h4>   
                                <p> Au choix: petit,moyen ou grand </p>    
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div> 

                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/bo6.png" alt="...">    
                            <div> 1.90 $ </div>  
                            <div class="caption ">   
                                <h4>Nestea</h4>    
                                <p> Au choix: petit,moyen ou grand </p>     
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                   


                </div>

            </div>     

            <div class="tab-pane" id="6">        
                <div class="row"> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/d1.png" alt="...">    
                            <div> 4.80 $ </div>  
                            <div class="caption ">   
                                <h4>Fondant Au Chocolat</h4>   
                                <p>Aux Choix: Chocolat blanc ou au lait </p>    
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>  
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/d2.png" alt="...">    
                            <div> 2.90 $ </div> 
                            <div class="caption ">   
                                <h4>Muffin </h4>   
                                <p>Au choix: au fruit ou au chocolat </p>     
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/d3.png" alt="...">     
                            <div> 2.90 $ </div>  
                            <div class="caption ">   
                                <h4>Beignet</h4>     
                                <p>Au choix : Au chocalat ou à la vanille </p>    
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/d4.png" alt="...">       
                            <div> 3.90 $ </div>  
                            <div class="caption ">   
                                <h4>MilkShake</h4>   
                                <p>Au choix : Fraise, Chocolat ou Vanille </p>     
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div> 
                    <div class="col-sm-6 col-md-4"> 
                        <div class="thumbnail">  
                            <img src="images/d5.png" alt="...">    
                            <div> 4.90 $ </div>   
                            <div class="caption ">   
                                <h4>Sundae</h4>    
                                <p> Au choix : Fraise, Chocolat ou Caramel </p>    
                                <a href="admin/paiements.php" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander </a> 
                            </div>
                        </div> 
                    </div> 
                 
                </div>

            </div>    


          
           
            

        </div>

        </div>
        
                 
    </body>
</html> 