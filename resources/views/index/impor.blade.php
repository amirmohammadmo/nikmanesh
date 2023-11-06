@extends('index.index')
@section('contend')
    <div style="margin-top: 200px; margin-bottom: 300px">
        <p>
        <div class="container">

            <div class="row check-availabilty" id="next">
                <div class="block-32 aos-init aos-animate" data-aos="fade-up" data-aos-offset="-200">

                    <form action="#">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                                <label for="checkin_date" class="font-weight-bold text-black">نام درمانگر مورد نظر</label>
                                <div >
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="adults" class="form-select">
                                        <option value="{{$consultants->id}}">{{$consultants->name}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                                <label for="checkout_date" class="font-weight-bold text-black">تاریخ مورد نظر</label>
                                <div class="field-icon-wrap">
                                    <div class="icon"><span class="icon-calendar"></span></div>
                                    <input type="text" ="today" class="form-control" value="{{$date}}">
                                </div>
                            </div>



                            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                                <label for="checkin_date" class="font-weight-bold text-black">ساعت مورد نظر</label>
                                <div >
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple">
                                            @foreach($time as $tim)

                                           @if(!$result->where('time_id','=',$tim->id)->count())
                                        <option value="{{$tim->id}}">{{$tim->time}}</option>@endif  @endforeach
                                    </select>
                                </div>
                            </div>





                            <div class="col-md-6 col-lg-3 align-self-end">
                                <button class="btn btn-primary btn-block text-white">ثبت زمان</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
        </p>


    </div>

@endsection
