@extends('layouts.master')
@section('content')
<section class="content-header">
        <h1>
            Users
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
    
        </ol>
    
    </section>
    
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="collapse">
                    <i class="fa fa-times"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                    <div class="col-md-6">
                            <div class="box">
                              <div class="box-header">
                                <h3 class="box-title">Simple Full Width Table</h3>
                  
                                <div class="box-tools">
                                  <ul class="pagination pagination-sm no-margin pull-right">
                                    <li><a href="#">«</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">»</a></li>
                                  </ul>
                                </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                <table class="table">
                                  <tbody><tr>
                                    <th style="width: 10px">#</th>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                  </tr>
                                  <tr>
                                    <td>1.</td>
                                    <td>Update software</td>
                                    <td>
                                      <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-red">55%</span></td>
                                  </tr>
                                  <tr>
                                    <td>2.</td>
                                    <td>Clean database</td>
                                    <td>
                                      <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-yellow">70%</span></td>
                                  </tr>
                                  <tr>
                                    <td>3.</td>
                                    <td>Cron job running</td>
                                    <td>
                                      <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-light-blue">30%</span></td>
                                  </tr>
                                  <tr>
                                    <td>4.</td>
                                    <td>Fix and squish bugs</td>
                                    <td>
                                      <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                      </div>
                                    </td>
                                    </td>
                                    <td><span class="badge bg-green">90%</span></td>
                                  </tr>
                                </tbody></table>
                              </div>
                              <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                          </div>
            </div>
        </div>
    </section>
@endsection
