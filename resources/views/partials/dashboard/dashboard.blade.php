@extends('app')
@section('content')
    <div class="fill-page-container color-fill">
        <div class="dashboard-container">
            <h1 class="sub-header">Test</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Created</th>
                    <th></th>
                </tr>
                <tr>
                    <td>MyBoard</td>
                    <td>45 days ago</td>
                    <td>
                        <a class="btn btn-default btn-sm" href="#"><i class="fa fa-users"></i> Open</a>
                        <a class="btn btn-danger btn-sm" href="#"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
            </table>
            <div class="row">

            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script src="/js/dashboard/dashboard.js"></script>
    <script rel="script">
        $(document).ready(function () {

        });
    </script>
@stop