@extends('main')

@section('content')


    <div class="container-fluid">
        <div class="row">


            <div class="col-md-3"></div>
            <div class="col-md-6 ">
                <div class="inputbox well well-lg">
                    <form class="form-horizontal" method="post" action="stops">
                        <input type="hidden" name="serialized" value="{{ $json }}">

                        <div class="form-group highlight">

                            <div class="col-sm-3">
                                Stopover
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

                        @foreach ($stops as $key => $item)

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
                                    <input type="checkbox" name="checked[]" value="{{ $key }}">
                                </div>
                            </div>

                        @endforeach

                        <button type="submit" class="btn btn-success">GO</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>



@endsection