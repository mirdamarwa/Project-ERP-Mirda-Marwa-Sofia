<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Keranjang</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id">
                                        <th class="title"> Id: </th>
                                        <td class="value"> <?php echo $data['id']; ?></td>
                                    </tr>
                                    <tr  class="td-users_id">
                                        <th class="title"> Users Id: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['users_id']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="users_id" 
                                                data-title="Enter Users Id" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['users_id']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-perusahaan_id">
                                        <th class="title"> Perusahaan Id: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['perusahaan_id']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="perusahaan_id" 
                                                data-title="Enter Perusahaan Id" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['perusahaan_id']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nama_pembeli">
                                        <th class="title"> Nama Pembeli: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['nama_pembeli']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="nama_pembeli" 
                                                data-title="Enter Nama Pembeli" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['nama_pembeli']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-barang_id">
                                        <th class="title"> Barang Id: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['barang_id']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="barang_id" 
                                                data-title="Enter Barang Id" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['barang_id']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-status">
                                        <th class="title"> Status: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['status']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="status" 
                                                data-title="Enter Status" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['status']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-traffics_id">
                                        <th class="title"> Traffics Id: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['traffics_id']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="traffics_id" 
                                                data-title="Enter Traffics Id" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['traffics_id']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-provinsi">
                                        <th class="title"> Provinsi: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['provinsi']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="provinsi" 
                                                data-title="Enter Provinsi" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['provinsi']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-kabupaten">
                                        <th class="title"> Kabupaten: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['kabupaten']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="kabupaten" 
                                                data-title="Enter Kabupaten" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['kabupaten']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-kecamatan">
                                        <th class="title"> Kecamatan: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['kecamatan']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="kecamatan" 
                                                data-title="Enter Kecamatan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['kecamatan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-kelurahan">
                                        <th class="title"> Kelurahan: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['kelurahan']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="kelurahan" 
                                                data-title="Enter Kelurahan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['kelurahan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-jumlah">
                                        <th class="title"> Jumlah: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['jumlah']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="jumlah" 
                                                data-title="Enter Jumlah" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['jumlah']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-harga_asli">
                                        <th class="title"> Harga Asli: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['harga_asli']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="harga_asli" 
                                                data-title="Enter Harga Asli" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['harga_asli']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-harga_jual">
                                        <th class="title"> Harga Jual: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['harga_jual']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="harga_jual" 
                                                data-title="Enter Harga Jual" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['harga_jual']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-total_biaya">
                                        <th class="title"> Total Biaya: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['total_biaya']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="total_biaya" 
                                                data-title="Enter Total Biaya" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['total_biaya']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-keuntungan">
                                        <th class="title"> Keuntungan: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['keuntungan']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="keuntungan" 
                                                data-title="Enter Keuntungan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['keuntungan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-created_at">
                                        <th class="title"> Created At: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['created_at']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="created_at" 
                                                data-title="Enter Created At" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['created_at']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-updated_at">
                                        <th class="title"> Updated At: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['updated_at']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("keranjang/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="updated_at" 
                                                data-title="Enter Updated At" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['updated_at']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("keranjang/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("keranjang/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
