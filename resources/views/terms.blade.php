@extends('v7.frontend')
<style>
    img.gallery-show {
        height: 310px !important;
    }

    span.discover-btn {
        color: #6B02FF;
    }

    span.discover-btn2 {
        color: #f29b37;
    }

    span.discover-btn3 {
        color: #3aa595;
    }

    a.btn.btn-lg.btn-blue.small.about {
        margin-left: 45%;
    }

    ul li {
        list-style-type: circle !important;
    }
</style>
@section('content')
    <section class="aboutpagesection-grey terms_sec" id="aboutpageabout">

        <!--begin container-->
        <div class="container">

            <!--begin row -->
            <div class="row">
                <!--begin col-md-12-->
                <div class="col-md-12">

                    <h3><span class="discover-btn3">{{$page?$page->page_title:'Terms of Use'}}</span></h3>
                    {!!$page?$page->content:'Content Here'  !!}
                </div>
                <!--end col-md-12-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
