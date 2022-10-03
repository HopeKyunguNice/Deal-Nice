<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Voir les partenaires</h1>
    </div>
    <div class="content-header-right">
        <a href="service-add.php" class="btn btn-primary btn-sm">Ajouter un partenaire</a>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10">#</th>
                                <th>Logo</th>
                                <th width="160">Nom de l'entreprise</th>
                                <th>vedette?</th>
                                <th>Active?</th>
                                <th>Catégorie</th>
                                <th>Vue</th>
                                <th width="80">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$i=0;
							$statement = $pdo->prepare("SELECT
														
														t1.p_id,
														t1.p_name,
														t1.p_total_view,
														t1.p_featured_photo,
														t1.p_is_featured,
														t1.p_is_active,
														t1.ecat_id,

														t2.ecat_id,
														t2.ecat_name,

														t3.mcat_id,
														t3.mcat_name,

														t4.tcat_id,
														t4.tcat_name

							                           	FROM tbl_service t1
							                           	JOIN tbl_end_category t2
							                           	ON t1.ecat_id = t2.ecat_id
							                           	JOIN tbl_mid_category t3
							                           	ON t2.mcat_id = t3.mcat_id
							                           	JOIN tbl_top_category t4
							                           	ON t3.tcat_id = t4.tcat_id
							                           	ORDER BY t1.p_id DESC
							                           	");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							foreach ($result as $row) {
								$i++;
								?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td style="width:82px;"><img
                                        src="../assets/images/partenaire/<?php echo $row['p_featured_photo']; ?>"
                                        alt="<?php echo $row['p_name']; ?>" style="width:80px;"></td>
                                <td><?php echo $row['p_name']; ?></td>
                                <td>
                                    <?php if($row['p_is_featured'] == 1) {echo '<span class="badge badge-success" style="background-color:green;">Yes</span>';} else {echo '<span class="badge badge-success" style="background-color:red;">No</span>';} ?>
                                </td>
                                <td>
                                    <?php if($row['p_is_active'] == 1) {echo '<span class="badge badge-success" style="background-color:green;">Yes</span>';} else {echo '<span class="badge badge-danger" style="background-color:red;">No</span>';} ?>
                                </td>
                                <td><?php echo $row['tcat_name']; ?><br><?php echo $row['mcat_name']; ?><br><?php echo $row['ecat_name']; ?>
                                </td>
                                <th><?php echo $row['p_total_view']; ?></th>
                                <td>
                                    <a href="service-edit.php?id=<?php echo $row['p_id']; ?>"
                                        class="btn btn-primary btn-xs">Éditer</a>
                                    <a href="#" class="btn btn-danger btn-xs"
                                        data-href="service-delete.php?id=<?php echo $row['p_id']; ?>"
                                        data-toggle="modal" data-target="#confirm-delete">Effacer</a>
                                </td>
                            </tr>

                            <?php
							}
							?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer la confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Voulez-vous vraiment supprimer cet élément ??</p>
                <p style="color:red;">Faire attention! Ce produit sera également supprimé du tableau des commandes, du
                    tableau des paiements, du tableau des tailles, du tableau des couleurs et du tableau des notes.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Supprimer</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>