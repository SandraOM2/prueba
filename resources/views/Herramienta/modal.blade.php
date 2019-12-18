@extends('layouts.app')

@section('content')

<div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane active in notika-tab-menu-bg animated flipInX">

                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">

                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                              <li><a href="/personal"><i class="fas fa-users"></i>   Personal</a>
                              </li>
                              <li><a href="/vehiculos"><i class="fas fa-truck-pickup"></i>   Veh&iacuteculos</a>
                              </li>

                            </ul>
                        </div>
                        <div id="Inter" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                              <li><a href="/RegistroSV"><i class="fas fa-arrow-alt-circle-right"></i></i>   Salida de Vehículos</a>
                              </li>
                              <li><a href="/RegistroEV"><i class="fas fa-arrow-alt-circle-left"></i></i>   Entrada de Vehículos</a>
                              </li>

                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">

                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">

                        </div>

                       
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
  <br></br>

          <div class="container">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                       
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control">
                                        <label class="nk-label">ID</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control">
                                        <label class="nk-label">Tipo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control">
                                        <label class="nk-label">Marca</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control">
                                        <label class="nk-label">Observación</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div >

                                        <p>Foto:   <button class="btn"><i class="fas fa-camera"></i></button></p>

                                    </div>
                                </div>
                            </div>

                        </div>

@endsection