@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 ">
            <div class="inputbox well well-lg">
                <form class="form-horizontal" method="post" action="suche">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Von</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="email" id="inputEmail3" placeholder="Start"
                                   value="Hufeisenstraße 10, München">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Bis</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="pass" id="inputPassword3" placeholder="Ziel"
                                   value="Heimpertstrasse 6d, München">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Suche</button>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>


    <figure id="container" title="spin the truck"></figure>
    <script src="js/d3.v3.min.js"></script>
    <script src="js/transmit_js_3dtruck.min.js"></script>
@endsection