@extends('layouts.dashboard')

@section('content')
<div class="row">

<div class="col-md-12">
        <div class="card ">
            <div class="header">
                <h4 class="title">Companies</h4>
                <p class="category">Registered Companies</p>
            </div>
            <div class="content">
                <div class="table-full-width">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <label class="checkbox">
                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    </label>
                                </td>
                                <td>Mshandee Company limited</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-original-title="Edit Task">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox checked">
                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                    </label>
                                </td>
                                <td>Double Mast Company & Logistics</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-original-title="Edit Task">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                <div class="footer">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Last payments were made on 29th September 2016.
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection