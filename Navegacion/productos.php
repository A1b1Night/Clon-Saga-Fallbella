<!DOCTYPE html>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<body>

    <section class="main">
         <div class="container">
             <!--Slideshow-->
             <div class="row">
                 <div class="col-md-12">
                     <div id="slider" class="carousel slide" data-ride="carousel">
                       <!--Indicadores-->
                       <ol class="carousel-indicators">
                          <li data-target="#slider" data-slide-to="0" class="active"></li>
                          <li data-target="#slider" data-slide-to="1"></li>
                          <li data-target="#slider" data-slide-to="2"></li>
                       </ol>
                       <!--Contenedor de slides-->
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="img/img/s1.jpg" alt="Tecnologia">    
                          </div>

                          <div class="item">
                            <img src="img/img/s2.jpg" alt="Tecnologia">    
                          </div>

                          <div class="item">
                            <img src="img/img/s3.jpg" alt="Tecnologia">    
                          </div>
                        </div>
                   
                     </div>
                 </div>
             </div>
       <!--Galeria-->
             <div class="row">
               <div class="col-md-12">
                   <div class="page-header">
                       <h1 class="text-center">CATALOGO</h1>
                   </div>
               </div>

               <div class="col-xs-12 col-sm-6 col-md-3">
                   <div class="thumbnail">
                       <a href="#">
                           <img src="img/img/1.jpg" alt="">
                       </a>
                       <div class="caption">
                           <h3>Iphone</h3>
                           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, qui.</p>
                           <p>
                               <a href="#" class="btn btn-success">Comprar</a>
                               <!--Detalles ventana-->
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ventana">
                                  Detalles
                               </button>
                               <div class="modal fade" id="ventana" tabindex="-1">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                              </button>
                                              <h4 class="modal-title">Iphone</h4>
                                          </div>
                                          
                                          <div class="modal-body">
                                             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, quam!
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, quam!
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, quam!
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, quam!
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, quam!
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, quam!
                                             </p>
                                          </div>
                                      </div>
                                  </div>
                               </div>
                           </p>
                       </div>
                   </div>
               </div>

               <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="img/img/2.jpg" alt="">
                        </a>
                        <div class="caption">
                            <h3>Mac</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, qui.</p>
                            <p>
                                <a href="#" class="btn btn-success">Comprar</a>
                                <!--Detalles de Mac-->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#window">
                                    Detalles
                                </button>

                                <div class="modal fade" id="window" tabindex="-1">
                                   <div class="modal-dialog">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                          <span>&times;</span>
                                        </button>
                                        <h4 class="modal-title">Mac</h4>
                                       </div>
                                          <div class="modal-body">
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                            </p>
                                          </div>
                                     </div>
                                   </div>                    
                                </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="#">
                          <img src="img/img/3.jpg" alt="">
                        </a>
                     <div class="caption">
                        <h3>Canon</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, qui.</p>
                        <p>
                            <a href="#" class="btn btn-success">Comprar</a>
                            <!--Detalles de Canon-->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#window1">
                               Detalles
                            </button>

                            <div class="modal fade" id="window1" tabindex="-1">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">
                                         <span>&times;</span>
                                      </button>
                                      <h4 class="modal-title">Canon</h4>
                                   </div>

                                   <div class="modal-body">
                                       <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima. 
                                       </p>
                                   </div>

                                 </div>
                              </div>
                            </div>
                        </p>
                     </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="img/img/4.jpg" alt="">
                        </a>
                        <div class="caption">
                            <h3>Apple Watch</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, qui.</p>
                            <p>
                                <a href="#" class="btn btn-success">Comprar</a>
                                <!--Detalles de Apple Watch-->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#window2">
                                  Detalle
                                </button>

                                <div class="modal fade" id="window2" tabindex="-1">
                                        <div class="modal-dialog">
                                           <div class="modal-content">
                                             <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                   <span>&times;</span>
                                                </button>
                                                <h4 class="modal-title">Apple Watch</h4>
                                             </div>
          
                                             <div class="modal-body">
                                                 <p>
                                                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima. 
                                                 </p>
                                             </div>
          
                                           </div>
                                        </div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="#">
                          <img src="img/img/5.jpg" alt="">
                        </a>
                     <div class="caption">
                        <h3>Keyboard</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, qui.</p>
                            <p>
                                <a href="#" class="btn btn-success">Comprar</a>
                                <!--Detalles de Keyboard-->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#window3">
                                    Detalles
                                </button>

                                <div class="modal fade" id="window3" tabindex="-1">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">
                                             <span>&times;</span>
                                          </button>
                                          <h4 class="modal-title">Keyboard</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima. 
                                            </p>
                                        </div>
                                    </div>
                                  </div>
                                </div>

                            </p>
                     </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="img/img/6.jpg" alt="">
                        </a>
                        <div class="caption">
                            <h3>Ipad</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, qui.</p>
                            <p>
                                <a href="#" class="btn btn-success">Comprar</a>
                                 <!--Detalles de Ipad-->
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#window4">
                                        Detalles
                                    </button>
    
                                    <div class="modal fade" id="window4" tabindex="-1">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">
                                                 <span>&times;</span>
                                              </button>
                                              <h4 class="modal-title">Ipad</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima. 
                                                </p>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="#">
                          <img src="img/img/7.jpg" alt="">
                        </a>
                        <div class="caption">
                            <h3>Macbock</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, qui.</p>
                            <p>
                             <a href="#" class="btn btn-success">Comprar</a>
                             <!--Detalles de Macbock-->
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#window5">
                                    Detalles
                                </button>

                                <div class="modal fade" id="window5" tabindex="-1">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">
                                             <span>&times;</span>
                                          </button>
                                          <h4 class="modal-title">Macbock</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima. 
                                            </p>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="img/img/8.jpg" alt="">
                        </a>
                        <div class="caption">
                            <h3>Camera</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, qui.</p>
                                <p>
                                <a href="#" class="btn btn-success">Comprar</a>
                                <!--Detalles de Camera-->
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#window6">
                                    Detalles
                                </button>

                                <div class="modal fade" id="window6" tabindex="-1">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">
                                             <span>&times;</span>
                                          </button>
                                          <h4 class="modal-title">Camera</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima.
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, minima. 
                                            </p>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                </p>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </section>

   

  

</body>
</html>