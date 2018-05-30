<!-- <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h2 class="m-t-0 header-title"><b>Hak Akses User</b></h2>
                                    <br>
                                    <div class="form-inline m-b-20">
                                            <div class="row">
                                                <div class="col-sm-6 text-xs-center">
                                                    <div class="form-group">
                                                        <select id="demo-foo-filter-status" class="form-control input-sm">
                                                            <option value="">Show all</option>
                                                            <option value="active">Active</option>
                                                            <option value="disabled">Disabled</option>
                                                            <option value="suspended">Suspended</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-xs-center text-right">
                                                    <div class="form-group">
                                                        <input id="demo-foo-search" type="text" placeholder="Search" class="form-control input-sm" autocomplete="on">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><table id="demo-foo-filtering" class="table table-striped table-bordered toggle-circle m-b-0 footable-loaded footable tablet breakpoint" data-page-size="7">
                                        <thead>
                                        <tr>
                                            <th data-toggle="true" class="footable-visible footable-sortable footable-first-column">NIP<span class="footable-sort-indicator"></span></th>
                                            <th class="footable-visible footable-sortable">Nama<span class="footable-sort-indicator"></span></th>
                                            <th class="footable-visible footable-sortable footable-last-column">No Hp<span class="footable-sort-indicator"></span></th>
                                            <th data-hide="phone, tablet" class="footable-sortable footable-sorted">Prodi<span class="footable-sort-indicator"></span></th>
                                            <th data-hide="phone, tablet" class="footable-sortable">Level<span class="footable-sort-indicator"></span></th>
                                            <th data-hide="phone, tablet" class="footable-sortable">Opsi<span class="footable-sort-indicator"></span></th>
                                        </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <tr class="footable-even" style="display: table-row;">
                                            <?php foreach($list as $data){ ?>
                                            <td><?php echo $data->nip ?></td>
                                            <td><?php echo $data->nama ?></td>
                                            <td><?php echo $data->no_hp ?></td>
                                            <td><?php echo $prodi['nama_prodi']; ?></td>
                                            <td><?php if($data->level==1){echo "Koordinator";}else if($data->level==2){echo "Reviewer";}else if($data->level==3){echo "Dosen";}else if($data->level==4){echo "Mahasiswa";}else{echo "Data Master";} ?></td>
                                            <td>CMIIW</td>
                                            <?php }?>
                                            <td class="footable-visible footable-first-column">Lizzee</td>
                                            <td class="footable-visible"><a href="#">Goodlow</a></td>
                                            <td class="footable-visible footable-last-column">Technical Services Librarian</td>
                                            <td class="">1 Nov 1961</td>
                                            <td class=""><span class="label label-table label-danger">Suspended</span></td>
                                        </tr></tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="5" class="footable-visible">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split m-t-10 m-b-0"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page"><a data-page="2" href="#">3</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div> -->
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>Hak Akses User</b></h2>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <!-- <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="datatable_length">
                            <label>Show 
                                <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                </select> entries
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="datatable_filter" class="dataTables_filter">
                            <label>Search:
                                <input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable">
                            </label>
                        </div>
                    </div>
                </div> -->
<div class="row">
    <div class="col-sm-12">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 162px;">NIP
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">Nama
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 107px;">Level
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">Opsi
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach($list as $data){ ?>
                        <td><?php echo $data->nip ?></td>
                        <td><?php echo $data->nama ?></td>
                        <td><?php if($data->level==1){echo "Koordinator";}else if($data->level==2){echo "Reviewer";}else if($data->level==3){echo "Dosen";}else if($data->level==4){echo "Mahasiswa";}else{echo "Data Master";} ?></td>
                        <td><?php echo anchor('Koordinator/edit/'.$data->nip,'Edit','class="btn btn-warning btn-bordered waves-effect w-md waves-light"') ?></td>
                    </tr>
                        <?php }?>
                        <!-- <td class="footable-visible footable-first-column">Lizzee</td>
                        <td class="footable-visible"><a href="#">Goodlow</a></td>
                        <td class="footable-visible footable-last-column">Technical Services Librarian</td>
                        <td class="">1 Nov 1961</td>
                        <td class=""><span class="label label-table label-danger">Suspended</span></td> -->
                    
                    <!-- <tr role="row" class="odd">
                    <td class="sorting_1">Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                    </tr> -->
            </tbody>
        </table>
    </div>
</div>
<!-- <div class="row">
    <div class="col-sm-6">
        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
        </div>
    </div>
    <div class="col-sm-6">
        <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
            <ul class="pagination">
                <li class="paginate_button previous disabled" aria-controls="datatable" tabindex="0" id="datatable_previous">
                    <a href="#">Previous</a>
                </li>
                <li class="paginate_button active" aria-controls="datatable" tabindex="0">
                    <a href="#">1</a>
                </li>
                <li class="paginate_button " aria-controls="datatable" tabindex="0">
                    <a href="#">2</a>
                </li>
                <li class="paginate_button " aria-controls="datatable" tabindex="0">
                    <a href="#">3</a>
                </li>
                <li class="paginate_button " aria-controls="datatable" tabindex="0">
                    <a href="#">4</a>
                </li>
                <li class="paginate_button " aria-controls="datatable" tabindex="0">
                    <a href="#">5</a>
                </li>
                <li class="paginate_button " aria-controls="datatable" tabindex="0">
                    <a href="#">6</a>
                </li>
                <li class="paginate_button next" aria-controls="datatable" tabindex="0" id="datatable_next">
                    <a href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div> -->
</div>
        </div>
    </div>
</div>