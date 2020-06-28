<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
   <div class="card m-4 border-0">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table " id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                           
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>Categories</th>
                                                <th>Tags</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php for($i=0; $i<10; $i++) {?>
                                            <tr>
                                              
                                                <td>List of 10 Best Schools in Bhiwani with Admission Details</td>
                                                <td>Navneet Singh</td>
                                                <td>School</td>
                                                <td>top school ,top institute</td>
                                                <td>2011/04/25</td>
                                                <td class="d-flex">
                                                    <a class="btn btn-success mx-1" href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    <a class="btn btn-danger mx-1" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                          
                                      <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        
   </div>
</main>

