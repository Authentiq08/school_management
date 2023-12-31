@extends('layouts.app')

@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Liste de mes étudiants (Total : {{ $getRecord->total() }})</h1>
          </div>


        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-md-12">


            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste de mes étudiants </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Email</th>
                      <th>Matricule</th>
                      <th>Filiere</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($getRecord as $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->first_name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->matricule }}</td>
                                <td>{{ $value->filiere_name }}</td>
                            </tr>
                        @endforeach
                  </tbody>
                </table>
                <div style="padding: 10px; float: right;">
                {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                </div>

            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection

