@extends('layouts.fontend')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active"> <img src="assets/img/Eco_01.jpg"> </div>
                    <div class="item"> <img src="assets/img/Eco_03.jpg"> </div>
                    <div class="item"> <img src="assets/img/Eco_04.jpg"> </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
        </div>
    </div>
    <div class="clearfix">&nbsp;</div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="headline">
                <h4>Events List</h4>
            </div>
            <div class="panel-profile">
                <div class="profile-event">
                    <div class="date-formats"> <span>10</span> <small>Oct, 2014</small> </div>
                    <div class="overflow-h">
                        <h5 class="heading-xs"><a href="#">Economics Day. </a></h5>
                        <small>9:00 AM- 10:00 AM</small> </div>
                </div>
                <div class="profile-event">
                    <div class="date-formats"> <span>20</span> <small>Oct, 2014</small> </div>
                    <div class="overflow-h">
                        <h5 class="heading-xs"><a href="#">Job fair. </a></h5>
                        <small>9:00 AM- 10:00 AM</small> </div>
                </div>
                <div class="profile-event">
                    <div class="date-formats"> <span>25</span> <small>Oct, 2014</small> </div>
                    <div class="overflow-h">
                        <h5 class="heading-xs"><a href="#">শিক্ষামন্ত্রনালয়, গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয় সচিব জনাব মোঃ সোহরাব হোসাইন-এর আগমন উপলক্ষে সভা।</a></h5>
                        <small>9:00 AM- 10:00 AM</small> </div>
                </div>
                <div class="profile-event">
                    <div class="date-formats"> <span>27</span> <small>Oct, 2014</small> </div>
                    <div class="overflow-h">
                        <h5 class="heading-xs"><a href="#">বিদ্রোহী কবি কাজী নজরুল ইসলামের ১১৭তম জন্মবার্ষিকী উপলক্ষে মনোজ্ঞ সাংষ্কৃতিক অনুষ্ঠান।</a></h5>
                        <small>9:00 AM- 10:00 AM</small> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="headline">
                <h4>Publications</h4>
            </div>
            <ul class="list">
                <li><a href="#">Baticrom Publications <br>
                        <span>[1sT Nov 2018]</span></a> </li>
                <li><a href="#">Titas Publications <br>
                        <span>[1sT Nov 2018]</span></a></li>
                <li><a href="#">Limon'sPublications <br>
                        <span>[1sT Nov 2018]</span></a></li>
                <li><a href="#">Economics Publications <br>
                        <span>[1sT Nov 2018]</span></a> </li>
                <li><a href="#">Ali Publications <br>
                        <span>[1sT Nov 2018]</span></a> </li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="headline">
                <h4>Notice Board</h4>
            </div>
            <ul class="list">
                <li><a href="#">একাদিশ শ্রেণির পৌরনীতি ও সুশাসন ১ম পত্র ৩য় ক্লাস টেস্ট সংক্রান্ত বিজ্ঞপ্তি। <br>
                        <span>[1sT Nov 2018]</span></a> </li>
                <li><a href="#"> ২০১৮ সালের অনার্স তৃতীয় বর্ষ পরীক্ষার ফরম পূরণ সংক্রান্ত বিজ্ঞপ্তি।<br>
                        <span>[1sT Nov 2018]</span></a></li>
                <li><a href="#"> Student-Centered Learning সম্পর্কিত কর্মশালায় সকল শিক্ষকের উপস্থিতি সংক্রান্ত বিজ্ঞপ্তি। <br>
                        <span>[1sT Nov 2018]</span></a></li>
            </ul>
        </div>
    </div>
@endsection