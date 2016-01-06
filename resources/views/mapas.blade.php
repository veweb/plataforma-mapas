
@extends('layouts.publico')

@section('content')
<div class="map-wrapper">
            <div style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden;" id="map" data-style="1">
                <div id="zoom_container">
    
                    <!-- Set correct width and height of the image. This is needed to avoid position issues on Apple devices iPad, iPhone and iPod -->
                    <img id="yourImageID" src="/images/upload/mapas/antigua-2016-map-01.jpg" width="1024px" height="768px" />

                    <!-- HELP NOTE:----------------------------------------------------------------------------------- 
                        * All the landmarks should be wrapped inside the div with class "landmarks" as shown below.
                                    
                        * The "data-show-at-zoom" attribute is the percentage value in which the landmark will show. 
                          Set this value to "0" if you want ot show landmarks always. 
                          This attribute can also be set to individual landmarks with different zoom values.
                          
                        * The "data-allow-scale" attribute is to enable/ disable the scalability of landmarks (Doesn't supported by IE8 and below).
                          Set "true" if the landmarks needs to resize along with main image.
                          
                        * The "data-allow-drag" attribute is to enable/disable the draggability of main image while the mouse/finger touches the landmarks.
                          IMPORTANT: If the landmarks/locations/lables have hyperlinks, set data-allow-drag = "false"
                    ----------------------------------------------------------------------------------------------- -->
                    <div class="landmarks" data-show-at-zoom="100" data-allow-drag="true" data-allow-scale="false"> 
                    
                        <!------------------------------------------------------------------------------------------------------------------
                            HELP NOTE:
                            The following 2 div tags are lables. Each lable can be customised individually using following 5 data attributes:
                            
                            * data-position= "100,50" [Enter x, y values of position - this is center point of the element not top-left]
                            * data-bg-color= "#000000" [BG color of lable text]
                            * data-bg-opacity= ".7" [BG transparency of lable text]
                            * data-show-at-zoom= "150" [At which zoom percentage, this landmark should be visible. Set 0 to show always]
                            * data-allow-scale= "true" [To resize the landmark or not](Doesn't supported by IE8 and below).
                        ---------------------------------------------------------------------------------------------------------------- -->                
                   

                        <!------------------------------------------------------------------------------------------------------------------
                            HELP NOTE:
                            The following 3 div tags are marks. Each mark can be customised individually using following 3 data attributes:
                            
                            * data-position= "100,50" [Enter x, y values of position - this is center point of the element not top-left]
                            * data-show-at-zoom= "150" [At which zoom percentage, this landmark should be visible. Set 0 to show always]
                            * data-allow-scale= "true" [To resize the landmark or not] (Doesn't supported by IE8 and below).
                        ---------------------------------------------------------------------------------------------------------------- -->
                        
                        <div class="item mark"data-position="1800,865" data-show-at-zoom="0">
                            <div>
                                <div class="text" style="width:100px">
                                    <strong>Marca Numero 1</strong><br /> Aqui puede ir anuncios.
                                </div>
                                <img src="images/mark.png" width="50px" height="50px" alt="Permanent Mark" />       
                            </div>  
                        </div>
                        
                        <div class="item mark" data-position="1020, 1480" data-allow-scale="true">
                            <div>
                                <div class="text">
                                    <strong>Otro sitio</strong>
                                </div>                      
                                <img src="images/pin.png" width="50px" height="40px" alt="mark 1" />    
                            </div>                                  
                        </div>          
                        
                        <div class="item mark" data-position="2458,915">
                            <div>
                                <div class="text">
                                    <strong>Sitio</strong>
                                </div>                      
                                <img src="images/pin.png" width="50px" height="40px" alt="mark 2" />    
                            </div>                                  
                        </div>
                            
                    </div>
                </div>

            </div></div><!-- /#map -->

            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 map-navigation-positioning">
                        <div class="map-navigation-wrapper">
                            <div class="map-navigation">
                                <form method="post" action="?" class="clearfix">
                                    <div class="form-group col-sm-12">
                                          {!! Form::label('pais_id', 'Pais:') !!}
                                          <div class="select-wrapper">
                                          {!! Form::select('pais_id', $paises,null,['placeholder' => 'Seleccione un Municipio','class' => 'form-control','id' => 'pais']) !!}
                                        </div>
                                    </div>    
                                    <div class="form-group col-sm-12">
                                         {!! Form::label('departamento_id', 'Departamento:') !!}

                                        <div class="select-wrapper">
                                            
                                            {!! Form::select('departamento_id', ['placeholder' => 'Seleccione un departamento'],null,['id'=>'departamento','class' => 'form-control']) !!}
                                        </div><!-- /.select-wrapper -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-12">
                                         {!! Form::label('municipio_id', 'Municipio:') !!}

                                        <div class="select-wrapper">
                                             
                                        {!! Form::select('municipio_id',  ['placeholder' => 'Seleccione un Municipio'],null,['class' => 'form-control','id'=>'municipio']) !!}
                                        </div><!-- /.select-wrapper -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-12">
                                        {!! Form::label('lugar_id', 'Lugar:') !!}

                                        <div class="select-wrapper">
                                             {!! Form::select('lugar_id',  ['placeholder' => 'Seleccione un lugar'],null,['class' => 'form-control','id'=>'lugar']) !!}
                                       
                                        </div><!-- /.select-wrapper -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-12">
                                        {!! Form::label('categoria_id', 'Categorias:') !!}

                                        <div class="select-wrapper">
                                            {!! Form::select('categoria_id',  ['placeholder' => 'Seleccione una categoria'],null,['class' => 'form-control','id'=>'categoria']) !!}
                                       
                                        </div><!-- /.select-wrapper -->
                                    </div><!-- /.form-group -->

                                  

                                    <div class="form-group col-sm-12">
                                        <input class="btn btn-primary btn-inversed btn-block" value="BUSCAR" type="submit">
                                    </div><!-- /.form-group -->
                                </form>
                            </div><!-- /.map-navigation -->
                        </div><!-- /.map-navigation-wrapper -->
                    </div><!-- /.col-sm-3 -->
                </div><!-- /.row -->
            <div class="block-content block-content-small-padding">
<div class="block-content-inner">
<h2 class="center">Resultados</h2>

<!-- <ul class="properties-filter">
    <li class="selected"><a data-filter="*" href="#"><span>Todo</span></a></li>
    <li><a data-filter=".property-featured" href="#"><span>Featured</span></a></li>
    <li><a data-filter=".property-rent" href="#"><span>Rent</span></a></li>
    <li><a data-filter=".property-sale" href="#"><span>Sale</span></a></li>
</ul>-->
<!-- /.property-filter -->

<div class="properties-items isotope" style="position: relative; overflow: hidden; height: 812px;">
<div class="row">
<?php     $pos = 0; ?>
    @foreach($anuncios as $anuncio)
    
    <div class="property-item property-featured col-sm-6 col-md-3 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate({!! $pos !!}px, 0px);">
            <div class="property-box">
            <div class="property-box-inner">
                <h3 class="property-box-title"><a href="{!! $anuncio->enlace !!}">{!! $anuncio->titulo !!}</a></h3>
                <h4 class="property-box-subtitle"><a href="property-detail.html">{!! $anuncio->descripcion   !!}</a></h4>

                <div class="property-box-label property-box-label-primary">Prueba Gratis</div>
                <!-- /.property-box-label -->

                <div class="property-box-picture">
                    <div class="property-box-price"></div>
                    <!-- /.property-box-price -->
                    <div class="property-box-picture-inner">
                        <a class="property-box-picture-target" href="property-detail.html">
                            <img alt="" src="/upload/anuncios/7.jpg">
                        </a><!-- /.property-box-picture-target -->
                    </div>
                    <!-- /.property-picture-inner -->
                </div>
                <!-- /.property-picture -->

                <div class="property-box-meta">
                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>0</strong>
                        <span>ninguno</span>
                    </div>
                    <!-- /.col-sm-3 -->

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>0</strong>
                        <span>ninguno</span>
                    </div>
                    <!-- /.col-sm-3 -->

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>0</strong>
                        <span>ninguno</span>
                    </div>
                    <!-- /.col-sm-3 -->

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>0</strong>
                        <span>ninguno</span>
                    </div>
                    <!-- /.col-sm-3 -->
                </div>
                <!-- /.property-box-meta -->
            </div>
            <!-- /.property-box-inner -->
        </div>
        <!-- /.property-box -->
    </div>
    <!-- /.property-item -->
<?php $pos = $pos + 285; ?>
    @endforeach

</div>
<!-- /.row -->


</div>
<!-- /.properties-items -->

</div>
<!-- /.block-content-inner -->
</div>
            </div><!-- /.container -->

        </div><!-- /.map-wrapper -->
  
                    </div>
                </div>
        @stop