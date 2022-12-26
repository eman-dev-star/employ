@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>Tasks</h1>
            <ol class="breadcrumb">


                <li><a href="{{route('tasks.index')}}"><i class="fa fa-dashboard"></i>tasks</a></li>
                <li class="active">edit</li>
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
                <form action="{{route('tasks.update',$task)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label>Project</label>
                    <select name="project_id" class="form-control">
                        <option value="">project</option>
                        @foreach ($projects as $project)
                            <option value="{{ $project->id }}"{{$task->project_id==$project->id ? 'selected':''}}>
                              {{ $project->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label>name</label>
                  <input type="text" class="form-control" name="name" value="{{$task->name}}">
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
