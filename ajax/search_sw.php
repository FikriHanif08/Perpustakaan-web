<?php 

usleep(500000);

require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM perpus_tb WHERE nama LIKE '%$keyword%' OR kelas LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' OR buku LIKE '%$keyword%' ";

$pinjam = query($query);



 ?>



            <div id="container">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama <i class="fa fa-sort"></i></th>
                        <th>Kelas</th>
                        <th>Jurusan <i class="fa fa-sort"></i></th>
                        <th>Buku </th>
                        <th>Actions</th>
                    </tr>
        
                  <?php $a = 1; ?>
                     <?php foreach ($pinjam as $pjm) :?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $pjm["nama"]; ?></td>
                            <td><?php echo $pjm["kelas"]; ?></td>
                            <td><?php echo $pjm["jurusan"]; ?></td>
                            <td><?php echo $pjm["buku"]; ?></td>
                            <td><a href="ubah.php?id=<?php echo $pjm["id"]; ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> <a href="hapus.php?id=<?php echo $pjm["id"]; ?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Yakin mau menghapus?')";><i class="material-icons">&#xE872;</i></a>  
                            </td>
                        </tr>
                            <?php $a++; ?>
                          <?php endforeach ?>
      
                </tbody>
                </thead>
            </table>  
    </div>

        <!-- footer -->

<footer class="footer">
      <div class="container">
        <p class="text-muted">Dibuat oleh... ~Fuu</p>
      </div>
    </footer>
      