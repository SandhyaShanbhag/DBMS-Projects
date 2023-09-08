<!DOCTYPE html>
    <head>
        <title>Movie Blog</title>
        <link rel="stylesheet" href="stylee.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        </head>
        <body>
            <header>
               <div class="container">
                         <img src="images/logo.jpg" alt="logo" class="logo">
                <nav>
                         <ul>
                            <li><a class="nav-link" href="#home">Home</a></li> 
                            <li><a class="nav-link" href="#features">Trending Movies</a></li>
                            <li><a class="nav-link" href="#gallery">Gallery</a></li>
                            <li><a class="nav-link" href="#footer">About Us</a></li>
                            <li><a class="nav-link" href="login1.php">Login</a></li>
                        </ul> 
                </nav>
               </div>



                 
              </header> 
              <section class="home">
                <div>
                    <a name="home"></a>
                    <h2 data-aos="zoom-in-right" class="text-center"></h2>
                </div>
                  <h1>Live Love Watch</h1>
                  <p>“Nothing brings people together like a good movie”</p>
                  </section>
              
              

            <div class="features">
                <div>
                    <a name="features"></a>
                    <h2 data-aos="zoom-in-right" class="text-center"></h2>
                </div>
                <h1>Trending Movies</h1>
                <div class="container">
                <div class="row">
                <?php
   $conn = mysqli_connect("localhost", "root", "", "movie");
	$img = mysqli_query($conn, "SELECT * FROM content");
     while ($row = mysqli_fetch_array($img)) {   
       ?>
                
                 <div class="col-md-4">
                     <div class="feature-box">
                     <div class="feature-img">
                     <?php	echo "<img src='images/".$row['img']."' >";  ?>    
                     </div>
                     <div class="feature-details">
                        <div>
                            <spam><h5><?php   echo $row['title']; ?></h5></spam>
                        </div>
                        <br>
                            <p><?php  echo $row['txt'];?></p> 
                     </div>    
                     </div>
                 </div>
                 <?php
    }  
     ?>
                 <div class="col-md-4"> 
                 <div class="feature-box">
                    <div class="feature-img">
                    <img src="images/freeguy.jpg">  
                    </div>
                    <div class="feature-details">
                        <div>
                            <spam><h5>Free Guy</h5></spam>
                        </div>
                       <br>
                           <p>Critics Consensus: Combining a clever concept, sweet, self-aware humor, and a charming cast, Free Guy is frivolous.<br>
Synopsis: In "Free Guy," a bank teller who discovers he is actually a background player in an open-world video game, decides.<br>
Starring: Ryan Reynolds, Jodie Comer, Lil Rel Howery, Joe Keery.<br>
Directed By: Shawn Levy.</p> 
                    </div>    
                    </div>
                    </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                    <div class="feature-img">
                    <img src="images/ss.jpg">   
                    </div>
                    <div class="feature-details">
                        <div>
                            <spam><h5>Suicide Squad</h5></spam>
                        </div>
                           <br>
                           <p>Critics Consensus: Enlivened by writer-director James Gunn's singularly skewed vision, The Suicide Squad marks a funny, fast-paced rebound that plays to the source material's violent, anarchic strengths.<br>
Synopsis: Welcome to hell--a.k.a. Belle Reve, the prison with the highest mortality rate in the US of A.<br>
Starring: Margot Robbie, Joel Kinnaman, Viola Davis, Idris Elba<br>
Directed By: James Gunn (II)</p> 
                    </div>    
                    </div>
                 </div> 

                 <div class="col-md-4"> 
                    <div class="feature-box">
                       <div class="feature-img">
                       <img src="images/db2.jpg">  
                       </div>
                       <div class="feature-details">
                        <div>
                            <spam><h5>Dont Breathe 2</h5></spam>
                        </div>
                         <br>
                              <p>Critics Consensus: Stephen Lang remains a thrillingly imposing presence in Don't Breathe 2, but this sequel's story strains to find a sensible way forward for his character.<br>
Synopsis: The sequel is set in the years following the initial deadly home invasion, where Norman Nordstrom (Stephen Lang) lives.<br>
Starring: Stephen Lang, Brendan Sexton III, Madelyn Grace, Rocci Williams<br>
Directed By: Rodo Sayagues</p> 
                       </div>    
                       </div>
                       </div>
                       <div class="col-md-4"> 
                        <div class="feature-box">
                           <div class="feature-img">
                           <img src="images/jungle cruise.jpg">  
                           </div>
                           <div class="feature-details">
                            <div>
                                <spam><h5>Jungle Cruise</h5></spam>
                            </div>
                              <br>
                                  <p>Critics Consensus: Its craft isn't quite as sturdy as some of the classic adventures it's indebted to, but Jungle Cruise remains a fun, family-friendly voyage.<br>
Synopsis: Join fan favorites Dwayne Johnson and Emily Blunt for the adventure of a lifetime on Disney's JUNGLE CRUISE, a rollicking.<br>
Starring: Dwayne Johnson, Emily Blunt, Edgar Ramirez, Jack Whitehall.<br>
Directed By: Jaume Collet-Serra</p> 
                           </div>    
                           </div>
                           </div>
                           <div class="col-md-4"> 
                            <div class="feature-box">
                               <div class="feature-img">
                               <img src="images/coda.png">  
                               </div>
                               <div class="feature-details">
                                <div>
                                    <spam><h5>Coda</h5></spam>
                                </div>
                                 <br>
                                      <p>Critics Consensus: CODA's story offers few surprises, but strong representation and a terrific cast -- led by Emilia Jones' brilliant performance -- bring this coming-of-age story vividly to life.<br>
Synopsis: Seventeen-year-old Ruby (Emilia Jones) is the sole hearing member of a deaf family -- a CODA, child of deaf adults.<br>
Starring: Emilia Jones, Troy Kotsur<br>
Directed By: Sian Heder</p> 
                               </div>    
                               </div>
                               </div>
                </div>
                </div>
</div>
            <section class="gallery">
                <div>
                    <a name="gallery"></a>
                    <h2 data-aos="zoom-in-right" class="text-center"></h2>
                </div>
                <h3>Gallery</h3> <br>
               <div class="container">
                 <div class="row">
                     <div class="col-md-3">
                         <div class="gallery-box">
                        <img src="images/holly.jpg" style="width:900px;height:250px;"> 
                        <h4>HOLLYWOOD</h4>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="gallery-box">
                       <img src="images/bolly.jpg" style="width:900px;height:250px;"> 
                       <h4>BOLLYWOOD</h4>
                       </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-box">
                       <img src="images/sandal.jpg" style="width:900px;height:250px;"> 
                       <h4>SANDALWOOD</h4>
                       </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-box">
                       <img src="images/tollywood.jpg" style="width:900px;height:250px;"> 
                       <h4>TOLLYWOOD</h4>
                       </div>
                    </div>
                 </div>
             </div> 
             
            </section>
            
            <section class="footer">
                <div>
                    <a name="footer"></a>
                    <h2 data-aos="zoom-in-right" class="text-center"></h2>
                </div>
                <div class="container">
                   <div class="row">
                        <div class="col-md-3">
                        <h4>About Us</h4>
                        <p><i class="fa fa-facebook"></i> Facebook/MovieBlog</p>
                        <p><i class="fa fa-youtube-play"></i> Youtube/Movie_Blog</p>
                        <p><i class="fa fa-twitter"></i> Twitter/MovieBlog</p>
                          
                       </div>
                      
                   </div><hr>
                </div>
                
            </section>
        </body>
</html>