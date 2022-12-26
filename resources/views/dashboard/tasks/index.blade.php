@extends('layouts.admin')
@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>Tasks</h1>

            <ol class="breadcrumb">

                <li class="{{route('tasks.index')}}">task</li>

            </ol>
        </section>


        <section class="content">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" style="margin-bottom: 15px"><small></small></h3>

                <div class="row">
                      <div class="col-md-4">

                         @can('is_admin')
                         <a href="{{route('tasks.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i>add</a>
                         @endcan
                    </div>
                </div>

            </div>
            <!-- /.box-header -->
             <div class="box-body">

                 <table class="table table-hover">
                  <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>name</th>
                  <th>project</th>

                 <td>action</td>
                </tr>
                  </thead>
              <tbody>
                <?php
                $count=0;
               ?>
                @foreach($tasks as $task)
                <tr>
                  <td>{{$count++;}}</td>
                  <td>{{$task->name}}</td>
                  <td>{{$task->project->name}}</td>

                  <td>



                      @can('is_admin')
                      <a href="{{route('tasks.edit',$task->id)}}" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>
                       edit</a>
                       @endcan

                       @can('is_user')


                       <a href="{{route('details.create',['id'=>$task->id])}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>

                        add new details</a>
                      @endcan

                      @can('is_admin')

                      <form  action="{{route('tasks.destroy',$task->id)}}" method="post" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> delete</button>
                    </form>
                    @endcan



                  </td>
                </tr>
                @endforeach
            </tbody>

              </table>

              </div>

              <!-- box-body -->

          </div>
          <!-- box -->



        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
