@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $messages }}</h3>
                  <p>Murojatlar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="/admin/messages" class="small-box-footer">Batafsil <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{ $services }}</h3>
                  <p>Xizmatlar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/admin/services" class="small-box-footer">Batafsil <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ $reviews }}</h3>
                  <p>Fikrlar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="/admin/reviews" class="small-box-footer">Batafsil <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{ $projects }}</h3>
                  <p>Loyihalar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="/admin/projects" class="small-box-footer">Batafsil <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
           
        </div>
    </div>
@endsection
