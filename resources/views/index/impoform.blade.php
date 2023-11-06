<div class="container">

    <div class="row check-availabilty" id="next">
        <div class="block-32 aos-init aos-animate" data-aos="fade-up" data-aos-offset="-200">

            <form action="{{Route('home.res')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                        <label for="checkin_date" class="font-weight-bold text-black">نام درمانگر مورد نظر</label>
                        <div >
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="consultant" id="adults" class="form-select">
                                @foreach($consultants as $consultant)
                                <option value="{{$consultant->id}}">{{$consultant->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                        <label for="checkout_date" class="font-weight-bold text-black">تاریخ مورد نظر</label>
                        <div class="field-icon-wrap">
                            <div class="icon"><span class="icon-calendar"></span></div>
                            <input type="text" data-jdp data-jdp-min-date="today" class="form-control" name="date">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 align-self-end">
                        <button class="btn btn-primary btn-block text-white">جست و جو</button>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>
