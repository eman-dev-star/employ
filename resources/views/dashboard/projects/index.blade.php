@extends('layouts.admin')
@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>Projects</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('projects.index')}}"><i class="fa fa-dashboard"></i>dashboard</a></li>
                <li class="{{route('projects.index')}}">projects</li>

            </ol>
        </section>


        <section class="content">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              {{-- <h3 class="box-title" style="margin-bottom: 15px">cities<small>{{$cities->total()}}</small></h3> --}}

                <div class="row">
                      <div class="col-md-4">

                         <a href="{{route('projects.create')}}" class="btn btn-primary btn-sm">
                          <i class="fa fa-plus" aria-hcity_idden="true"></i>add</a>

                    </div>
                </div>

            </div>
            <!-- /.box-header -->
             <div class="box-body">

                 <table class="table table-hover">
                  <thead>
                <tr>
                  <th style="wcity_idth: 10px">#</th>
                 <th>name</th>
                 <td>action</td>
                </tr>
                  </thead>
              <tbody>
                  <?php
                  $count=0;
                 ?>
                @foreach($projects as $project)
                <tr>
                  <td>{{$count++;}}</td>
                  <td>{{$project->name}}</td>
                  <td>

                      <a href="{{route('projects.edit',$project->id)}}" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hcity_idden="true"></i>
                       edit</a>


                      <form  action="{{route('projects.destroy',$project->id)}}" method="post"
                        style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash-o" aria-hcity_idden="true"></i> delete</button>
                    </form>


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
