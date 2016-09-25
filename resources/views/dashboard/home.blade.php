@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="header">
                <h4 class="title">Activity Statistics</h4>
                <p class="category">Last performed actions</p>
            </div>
            <div class="content">
                <div id="chartPreferences" class="ct-chart ct-perfect-fourth">
                <ul>
                    <li><strong>Companies Created</strong></li>
                        <ul>
                            <li>Mwananchi Limited</li>
                            <li>Maembe Daichi Enterprises</li>
                        </ul>                                   
                    <li><strong>Departments Added</strong></li>
                        <ul>
                            <li>Kibaha Hospital</li>
                            <li>Arusha Workshop</li>
                            <li>Kariakoo Workshop</li>
                        </ul>
                </ul>
                </div>

                <div class="footer">
                    <div class="legend">
                        <i class="fa fa-circle text-info"></i> Info
                        <i class="fa fa-circle text-danger"></i> Edit
                        <i class="fa fa-circle text-warning"></i> Settings
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="col-md-8">
        <div class="card ">
            <div class="header">
                <h4 class="title">Tasks</h4>
                <p class="category">Pending Tasks</p>
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
                                <td>Sign contract for "What are conference organizers afraid of?"</td>
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
                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
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
                                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
</td>
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
                                    <label class="checkbox">
                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    </label>
                                </td>
                                <td>Create 4 Invisible User Experiences you Never Knew About</td>
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
                                    <label class="checkbox">
                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    </label>
                                </td>
                                <td>Read "Following makes Medium better"</td>
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
                                    <label class="checkbox">
                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    </label>
                                </td>
                                <td>Unfollow 5 enemies from twitter</td>
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
                        <i class="fa fa-history"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection