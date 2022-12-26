@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>Projects</h1>
            <ol class="breadcrumb">
                <li>< href="{{route('projects.index')}}"><li class="fa fa-dashboard"></li>
                <li class="active">add</li>
              </ol>
        </section>

        <section class="content">
          <!-- general form elements -->
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                @include('partials._error')
                <form action="{{route('projects.update',$project)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="form-group">
                  <label>name</label>
                  <input type="text" class="form-control" name="name" value="{{$project->name}}">
                </div>
                 <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>edit</button>
              </div>



        </form>
        </div><!--end of box-body-->
         </div><!--end of box-primary-->
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
