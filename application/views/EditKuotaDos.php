
<div class="col-md-6">

                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Custom Table</b></h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Use Class <code>.table-colored-bordered .table-bordered-custom</code>
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table m-0 table-colored-bordered table-bordered-custom">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NIP</th>
                                                <th>Prodi</th>
                                                <th>Nama</th>
                                                <th>Kuota</th>
                                                <th>Input Kuota</th>
                                                <th>Edit Kuota</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach ($datados as $row)

                                            echo "<tr>
                                                <td>$row->nip</td>
                                                <td>$row->nama</td>
                                                <td>$row->kuota</td>
                                            </tr>";
                                            </tbody>
                                            ?>
                                        </table>
                                    </div>
                                </div>

                            </div>