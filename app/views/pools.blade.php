@extends('_layouts.default')
@section('main')
<link href="{{ URL::asset('assets/css/select2.css') }}" rel="stylesheet">

<div class="row-fluid">
    <div class="span12 box-content">
        <div class="span2 box-content breadcrumb">
            {{ Former::open_vertical('pools', 'post', array('class' => 'form-inline')) }}
                {{ Former::select('Pool')->options($poolSelectBox)->id('Pool')->style("width:100%"); }}
                {{Former::submit( 'Search ')->class('btn btn-primary pull-right btn-info') }}
            {{Former::close();}}
            <hr>
            <table id="stats" class="" style="width:100%">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2"><strong>Pool Information</strong></td>
                    </tr>

                    <tr>
                        <td colspan="2"></td>
                    </tr>

                    <tr>
                    </tr>

                    <tr>
                         <td colspan="2">{{ $name }}</td>
                    </tr>
                     <tr>
                        <td><i class="icon-fam-link-delete"></i> File Retention  </td>
                        <td><strong>{{ $volretension }} </strong></td>
                    </tr>
                     <tr>
                        <td><i class="icon-fam-database-add"></i> Type  </td>
                        <td><strong>{{ $pooltype }} </strong></td>
                    </tr>
                     <tr>
                        <td><i class="icon-fam-arrow-refresh"></i> Recycle </td>
                        <td><strong>@if ($recycle == 1)
                                       Yes
                                    @else
                                      No
                                    @endif
                             </strong>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="icon-fam-database-save"></i> Autoprune </td>
                        <td><strong>@if ($autoprune == 1)
                                       Yes
                                    @else
                                       No
                                    @endif
                             </strong>
                        </td>
                    </tr>


               </tbody>
           </table>
        </div>
        <div class="span10 box-content">
            <table id="poolTable" class="dashboardTable table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><center> Volume Name </center></th>
                        <th><center> Slot </center></th>
                        <th><center> Media Type </center></th>
                        <th><center> Last Written </center></th>
                        <th><center> Jobs Number </center></th>
                        <th><center> Files Number </center></th>
                        <th><center> Bytes </center></th>
                        <th><center> Retention Period </center></th>
                        <th><center> Status </center></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection

