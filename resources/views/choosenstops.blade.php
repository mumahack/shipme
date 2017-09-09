@extends('main')

@section('content')



    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 ">
            <div class="inputbox well well-lg">
                <form class="form-horizontal" method="post" action="suche.php">

                    <div class="form-group highlight">

                        <div class="col-sm-3">
                            choosen stop
                        </div>

                        <div class="col-sm-3">
                            distance
                        </div>

                        <div class="col-sm-3">
                            additional time
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

                        </div>

                    @endforeach

                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>




@endsection