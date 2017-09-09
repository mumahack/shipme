@extends('main')

@section('content')



    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 ">
            <div class="inputbox well well-lg">
                <form class="form-horizontal" method="post" action="suche.php">

                    @foreach ($stops as $item)





                        <div class="form-group">
                            <label class="col-sm-2 control-label">Zwischenstopp</label>

                            <div class="col-sm-5">
                                {{ $item["stopName"] }}
                            </div>

                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-info">  {{ $item["zeit"] }}</button>
                            </div>
                        </div>

                    @endforeach


                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>




@endsection