@extends('layout')

<div class="col-sm-12 col-md-10 col-md-offset-1">
    
    <div class="form-search dark">
        <form action="https://lararent.alfafox.site/products" method="get">
            <div class="form-title">
                <i class="fa fa-globe"></i>
                <h2>Search for Cheap Rental Cars Wherever Your Are</h2>
            </div>

            <div class="row row-inputs">
                <div class="container-fluid">
                    <div class="col-sm-6">
                        <div class="form-group has-icon has-label">
                            <label for="formSearchUpLocation">Picking Up Location</label>
                            <select name="PickingUpLocation" class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" id="formSearchUpLocation" style="display: none;">
                                                                                                                

                                        <option value="airport">Airport</option>
                                    

                                        <option value="paphos">Paphos</option>
                                    

                                        <option value="nicosia">Nicosia</option>
                                    

                                        <option value="larnaca">Larnaca</option>
                                    

                                        <option value="limassol">Limassol</option>
                                    

                                        <option value="kyrenia">Kyrenia</option>
                                    

                                        <option value="famagusta">Famagusta</option>
                                                                                                                                                                                        </select><div class="btn-group bootstrap-select input-price" style="width: 100%;"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="formSearchUpLocation" title="Airport"><span class="filter-option pull-left">Airport</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="text" class="input-block-level form-control" autocomplete="off"></div><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Airport</span>"><span class="text">Airport</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Paphos</span>"><span class="text">Paphos</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Nicosia</span>"><span class="text">Nicosia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Larnaca</span>"><span class="text">Larnaca</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Limassol</span>"><span class="text">Limassol</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Kyrenia</span>"><span class="text">Kyrenia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Famagusta</span>"><span class="text">Famagusta</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                            <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group has-icon has-label">
                            <label for="formSearchUpDate">Picking Up Date</label>
                            <input autocomplete="off" name="PickingUpDate" type="text" class="PickingUpDate form-control datepicker" id="formSearchUpDate" placeholder="dd/mm/yyyy" value="">
                            <span class="form-control-icon">
                                <i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group has-icon has-label selectpicker-wrapper">
                            <label>Picking Up Hour</label>

                            <select name="PickingUpHour" class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select" style="display: none;">

                                                                                                                                                                                                                                                                                <option value="9:00 AM">9:00 AM</option>
                                                                                                                        <option value="10:00 AM">10:00 AM</option>
                                                                                                                        <option value="10:30 AM">10:30 AM</option>
                                                                                                                        <option value="4:00 PM">4:00 PM</option>
                                                                                                                        <option value="4:15 PM">4:15 PM</option>
                                                                                                                        <option value="4:30 PM">4:30 PM</option>
                                                                                                                        <option value="4:45 PM">4:45 PM</option>
                                                                                                                        <option value="5:00 PM">5:00 PM</option>
                                                                                                                
                            </select><div class="btn-group bootstrap-select input-price" style="width: 100%;"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" title="9:00 AM"><span class="filter-option pull-left">9:00 AM</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="text" class="input-block-level form-control" autocomplete="off"></div><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>9:00 AM</span>"><span class="text">9:00 AM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>10:00 AM</span>"><span class="text">10:00 AM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>10:30 AM</span>"><span class="text">10:30 AM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>4:00 PM</span>"><span class="text">4:00 PM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>4:15 PM</span>"><span class="text">4:15 PM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>4:30 PM</span>"><span class="text">4:30 PM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>4:45 PM</span>"><span class="text">4:45 PM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>5:00 PM</span>"><span class="text">5:00 PM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                            <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-inputs">
                <div class="container-fluid">
                    <div class="col-sm-6">
                        <div class="form-group has-icon has-label">
                            <label for="formSearchOffLocation">Dropping Off Location</label>
                            <select id="formSearchOffLocation" name="DroppingOffLocation" class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select" style="display: none;">
                                                                                                                
                                        <option value="airport">Airport</option>

                                    
                                        <option value="paphos">Paphos</option>

                                    
                                        <option value="nicosia">Nicosia</option>

                                    
                                        <option value="larnaca">Larnaca</option>

                                    
                                        <option value="limassol">Limassol</option>

                                    
                                        <option value="kyrenia">Kyrenia</option>

                                    
                                        <option value="famagusta">Famagusta</option>

                                                                                                                                                                                        </select><div class="btn-group bootstrap-select input-price" style="width: 100%;"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="formSearchOffLocation" title="Airport"><span class="filter-option pull-left">Airport</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="text" class="input-block-level form-control" autocomplete="off"></div><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Airport</span>"><span class="text">Airport</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Paphos</span>"><span class="text">Paphos</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Nicosia</span>"><span class="text">Nicosia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Larnaca</span>"><span class="text">Larnaca</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Limassol</span>"><span class="text">Limassol</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Kyrenia</span>"><span class="text">Kyrenia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>Famagusta</span>"><span class="text">Famagusta</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                            <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group has-icon has-label">
                            <label for="formSearchOffDate">Dropping Off Date</label>
                            <input autocomplete="off" name="DroppingOffDate" type="text" class="form-control datepicker DroppingOffDate" id="formSearchOffDate" placeholder="dd/mm/yyyy" value="">
                            <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <div class="form-group has-icon has-label selectpicker-wrapper">
                            <label>Dropping Off Hour</label>
                            <select name="DroppingOffHour" class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select" style="display: none;">
                                                                                                                                                                                                    <option value="9:00 AM">9:00 AM</option>
                                                                                                                        <option value="10:00 AM">10:00 AM</option>
                                                                                                                        <option value="10:30 AM">10:30 AM</option>
                                                                                                                        <option value="4:00 PM">4:00 PM</option>
                                                                                                                        <option value="4:15 PM">4:15 PM</option>
                                                                                                                        <option value="4:30 PM">4:30 PM</option>
                                                                                                                        <option value="4:45 PM">4:45 PM</option>
                                                                                                                        <option value="5:00 PM">5:00 PM</option>
                                                                                                                
                            </select><div class="btn-group bootstrap-select input-price" style="width: 100%;"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" title="9:00 AM"><span class="filter-option pull-left">9:00 AM</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="text" class="input-block-level form-control" autocomplete="off"></div><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>9:00 AM</span>"><span class="text">9:00 AM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>10:00 AM</span>"><span class="text">10:00 AM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>10:30 AM</span>"><span class="text">10:30 AM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>4:00 PM</span>"><span class="text">4:00 PM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>4:15 PM</span>"><span class="text">4:15 PM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>4:30 PM</span>"><span class="text">4:30 PM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>4:45 PM</span>"><span class="text">4:45 PM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-normalized-text="<span class=&quot;text&quot;>5:00 PM</span>"><span class="text">5:00 PM</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                            <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-submit">
                <div class="container-fluid">
                    <div class="inner">
                        <i class="fa fa-plus-circle"></i> 
                        <button type="submit" id="formSearchSubmit" class="btn btn-submit btn-theme pull-right">Find Car</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
