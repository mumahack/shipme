@extends('main')

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 ">
                <div class="inputbox well well-lg">
                    <form class="form-horizontal" method="post" action="suche.php">

                        <div class="form-group highlight">

                            <div class="col-sm-3">
                                stop
                            </div>

                            <div class="col-sm-3">
                                distance
                            </div>

                            <div class="col-sm-3">
                                additional time
                            </div>
                            <div class="col-sm-3">
                                accept
                            </div>
                        </div>

                        @foreach ($stops as $item)

                            <div class="form-group">

                                <div class="col-sm-3">
                                    {{ $item["stopName"] }}
                                </div>

                                <div class="col-sm-3">
                                    {{ $item["distanz"] }}
                                </div>

                                <div class="col-sm-3">
                                    {{ $item["zusatzZeit"]}}
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" value="">
                                </div>
                            </div>

                        @endforeach

                        <button type="submit" class="btn btn-success"> Los</button>

                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>



@endsection